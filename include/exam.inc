<?PHP

//session can be activated or deactivated as required
session_start();

function error($message){
	print "<font color='red'>$message</font><br>";
}

//PHP4 script using domxml extension
//We want to make it run on PHP5 with dom
if (version_compare(PHP_VERSION,'5','>='))
 require_once('domxml-php4-to-php5.php'); //Load the PHP5 converter
    

$data_path = pathinfo(__FILE__,PATHINFO_DIRNAME);
if (!$dom = domxml_open_file("$data_path/data.xml"))
	die ("Error while parsing xml file!\n");
$root = $dom->document_element();
$questions = $root->get_elements_by_tagname("question");


function genQuestion($id, $wrap=false){
	global $questions;
	foreach ($questions as $question){
		if ($id == $question->get_attribute("id")){
			$type = $question->get_attribute("type");
			switch ($type){
				case "single":
					genSingle($question, $wrap);
					break;
				case "gap":
					genGap($question);
					break;
				case "gapc":
					genGap($question);
					break;
				case "gapx":
					genGapx($question);
					break;
				case "gapx2":
					genGapx2($question);
					break;
				case "gap_voc":
					genGapx2($question);
					break;
				case "gap2":
					genGap2($question);
					break;
					genGapx($question);
					break;
				case "drop":
					genDrop($question);
					break;
				case "drag":
					genDrag($question);
					break;
				case "multiple":
					genMultiple($question, $wrap);
					break;
				case "textbox":
					genTextbox($question);
					break;
				default: 
					error("Type ($type) of question $id is not defined.!");
					die();
			}
			return;
		}
	}
	error("Question $id not found!");
	die();
}

function genQuestionText($id){
	global $questions;
	foreach ($questions as $question){
		if ($id == $question->get_attribute("id")){
			$txt = $question->get_attribute("qtext");
			$txt = mb_convert_encoding($txt,"ISO-8859-1","UTF-8");
			print ("<span class='qtext'>$txt</span>");
			break;
		}
	}
}

function genSingle($question, $wrap=false){
	$choices = $question->get_elements_by_tagname("choice");
	$id = $question->get_attribute("id");
	print ("<input type='hidden' name='$id' value='0'>\n");
	$user_answer = $_SESSION["user_answer"][$id];
	for ($i=0; $i<count($choices); $i++){
		if ($wrap)
			print ("<br>");
		$choice = $choices[$i];
		$j = $i+1;
		if ($user_answer == $j)
			print ("<input type='radio' name='$id' value='$j' checked>");
		else
			print ("<input type='radio' name='$id' value='$j'>");
		$txt = mb_convert_encoding($choice->get_content(),"ISO-8859-1","UTF-8");
		print ("<span>$txt</span>\n");
	}
	print "\n";
	return;
}

function genGap($question){
	$choices = $question->get_elements_by_tagname("choice");
	$id = $question->get_attribute("id");
	print ("<select name='$id' class='brf'>\n");
	print ("<option value='0'></option>\n");
	for ($i=0; $i<count($choices); $i++){
		$selected_text = "";
		$choice = $choices[$i];
		$j = $i+1;
		if ($j ==  $_SESSION["user_answer"][$id])
			$selected_text="selected";
		$content = mb_convert_encoding($choice->get_content(),"ISO-8859-1","UTF-8");
		print ("<option value='$j' $selected_text>". $content ."</option>\n");
	}
	print ("</select>\n");
}

function genGapc($question){
		$choices = $question->getElementsByTagname("choice");
		$id = $question->getAttribute("id");
		print ("<select name='$id' class='brf'>\n");
		print ("<option value='0'></option>\n");
		for ($i=0; $i<$choices->length; $i++){
			$selected_text = "";
			$choice = $choices->item($i);
			$j = $i+1;
			if ($j ==  $_SESSION["user_answer"][$id])
				$selected_text="selected";
			$content = mb_convert_encoding($choice->nodeValue,"ISO-8859-1","UTF-8");
			print ("<option value='$j' $selected_text>". $content ."</option>\n");
		}
		print ("</select>\n");
}

function genGapx($question){
	$id = $question->get_attribute("id");
	$user_answer = $_SESSION["user_answer"][$id];
	print ("<input name='$id' type='text' class='gapx' size='20' value='$user_answer'>\n");
}

// With Attribute "length" to control to the length of the blank
function genGap_voc($question){
	$id = $question->get_attribute("id");
	$len = $question->get_attribute("length");
	$user_answer = $_SESSION["user_answer"][$id];
	print ("<input name='$id' type='text' class='gap_voc' size='$len' value='$user_answer'>\n");
}


// With Attribute "length" to control to the length of the blank
function genGapx2($question){
	$id = $question->get_attribute("id");
	$len = $question->get_attribute("length");
	$user_answer = $_SESSION["user_answer"][$id];
	print ("<input name='$id' type='text' class='gapx2' size='$len' value='$user_answer'>\n");
}

function genTextbox($question){
	$id = $question->get_attribute("id");
	$user_answer = $_SESSION["user_answer"][$id];
	print ("<textarea name='$id'  class='inputbox' cols='110' rows='6'>$user_answer</textarea>\n");
}

//user have no choices to use but must fill the gap manuelly
//so it just generats a input box for the user
function genGap2($question){
	$id = $question->get_attribute("id");
	$user_answer = $_SESSION["user_answer"][$id];
	print ("<input name='$id' type='text' class='gap2' size='30' value='$user_answer'>\n");
}

function genDrop($question){
	$id = $question->get_attribute("id");
	$user_answer = $_SESSION["user_answer"][$id];
	print ("<input name='$id' type='text' class='dropItem' size='20' value='$user_answer'>");

}

function genDrag($question){
	$choices = $question->get_elements_by_tagname("choice");
	$id = $question->get_attribute("id");
	for ($i=0; $i<count($choices); $i++){
		$choice = $choices[$i];
		$choice_content = mb_convert_encoding($choice->get_content(),"ISO-8859-1","UTF-8");
		$drag_id = "$id_$i";
		$move_id = "$drag_id" . "_dragging";
		print("<span class='dragItem' id='$drag_id'>$choice_content</span>\n");
		print("<span class='moveItem' id='$move_id'>$choice_content</span>\n\n");
	}
}


function genMultiple($question, $wrap = false){
	$choices = $question->get_elements_by_tagname("choice");
	$id = $question->get_attribute("id");
	$user_answer = $_SESSION["user_answer"][$id];
	
	//if user has already submitted answer
	if (isset($user_answer)) {
		print ("<input id='$id' type='hidden' name='$id' value='$user_answer' />\n");
		$user_answer_str = decbin($user_answer);
		//because use answers such as 0101 could be represented as 101, the front 0s should be inserted
		$temp = count($choices);
		$user_answer_str = sprintf("%0{$temp}s",$user_answer_str);
	}
	else
		print ("<input id='$id' type='hidden' name='$id' value='0' />\n");
	
	for ($i=0; $i<count($choices); $i++){
		if ($wrap)
			print ("<br>");
		$choice = $choices[$i];
		//$pos is the position from right to left in a binary string
		//used for javascript
		$pos = count($choices) - $i - 1;
		$temp = "";
		if ($user_answer_str)
			if($user_answer_str[$i])
				$temp = "checked";
		print ("<input type=\"checkbox\" $temp onchange=\"setValue('$id', $pos, this.checked)\" />");
		$txt = mb_convert_encoding($choice->get_content(),"ISO-8859-1","UTF-8");
		print ("<span>$txt</span>\n");
	}
	print "\n";
	return;
}

?>
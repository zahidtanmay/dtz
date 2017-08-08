<?PHP
session_start();

function error($message){
	print "<font color='red'>$message</font><br>";
}

//PHP4 script using domxml extension
//We want to make it run on PHP5 with dom
if (version_compare(PHP_VERSION,'5','>='))
 require_once('./include/domxml-php4-to-php5.php'); //Load the PHP5 converter


class Q_P_S
{
	var $solution = array();
	var $points = 0;
	var $answer;
	var $type;
}

$data_path = pathinfo(__FILE__,PATHINFO_DIRNAME);
if (!$dom = domxml_open_file("$data_path/data.xml"))
		die ("Error while parsing xml file!\n");
$root = $dom->document_element();
$xmlQuestions = $root->get_elements_by_tagname("question");


$qs = array();
foreach ($xmlQuestions as $question){
	$q_p_s = new Q_P_S;
	$id = $question->get_attribute("id");
	$q_p_s->points = $question->get_attribute("points");
	$solutions = $question->get_elements_by_tagname("solution");
	foreach ($solutions as $s) {
		$q_p_s->solution[] = mb_convert_encoding($s->get_content(),"ISO-8859-1","UTF-8");
	}
	$q_p_s->text = mb_convert_encoding($question->get_attribute("qtext"),"ISO-8859-1","UTF-8");
	$q_p_s->type = $question->get_attribute("type");
	$qs[$id] = $q_p_s;
}

?>

<html><head></head><body>
<table border="1">
<tr><th>Question</th><th>points</th><th>solution</th><th>answer</th>
<?php
$sum = 0;

foreach ($_POST as $key => $value) {
	
	if($qs[$key]){
		
		/* use answer can saved in session */
		if (!$_SESSION["user_answer"])
			$_SESSION["user_answer"] = array();
		$_SESSION["user_answer"][$key] = $value;
		
		$points = $qs[$key]->points;
		$solution = $qs[$key]->solution;
		$type = $qs[$key]->type;
		
		
		print "<tr>";
		print "<td>$key</td>";
		print "<td>$points</td>";
		print "<td>";
		foreach ($solution as $s) print ("$s<br>");
		print "</td>";	
		
		print "<td>";
		//if it is a multiple question, show user answer in binary form
		if ($type == "multiple") {
			$temp = strlen($solution[0]);
			printf("%0{$temp}s",decbin($value));
		}
		else
			print $value;
		print "</td></tr>";
		
		//if it is a multiple question
		if ($type == "multiple") {
			if ($value == bindec($solution[0]))
				$sum += $points;
		}
		else {
			foreach ($solution as $s) {
				if (strcasecmp(html_entity_decode(trim($value)), $s) == 0) {
					$sum += $points;
					break;
				}
			}
		}
	}
}
?>
</table>
<?php print "<b>sum: $sum</b>";?>

</body></html>

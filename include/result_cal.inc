<?PHP
class Q_P_S
{
	var $solution = array();
	var $points = 0;
	var $answer;
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
	$qs[$id] = $q_p_s;
}
$sum = 0;
foreach ($_POST as $key => $value) {
	if($qs[$key]){
		$points = $qs[$key]->points;
		$solution = $qs[$key]->solution;
		foreach ($solution as $s) {
			if (strcasecmp(html_entity_decode(trim($value)), trim($s)) == 0) {
				$sum += $points;
				break;
			}
		}
	}
}
?>


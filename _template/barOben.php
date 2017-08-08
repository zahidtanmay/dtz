<?php
function checkfertig($var){

	if ($var == 1)
	{
		print("button_Fertig");
	}
	else
	{
		print("button1");

	}

}

?>
<?php
$_SESSION['note_total'] = $_SESSION['note_S1'] + $_SESSION['note_S2'] +	$_SESSION['note_S3'] + $_SESSION['note_S4']
	+ $_SESSION['note_S5'] + $_SESSION['note_S6']+ $_SESSION['note_S7']	+ $_SESSION['note_S8']+ $_SESSION['note_S9']
	+ $_SESSION['note_S0'];

$_SESSION['ANR'] = $ANR;
$_SESSION['SCHL'] = $SCHL;
?>
<div style="height:15px; text-align:center;">Erreichte Punktzahl: <?php print($_SESSION['note_total']); ?> von 65
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


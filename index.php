<?PHP
	$_SESSION=array();
    session_start();

// time management
     	$_SESSION['testStart'] = time();

	// mit schr. Ausdruck:
	$_SESSION['testEnd'] = $_SESSION['testStart'] + 6000;
	// ohne schr. Ausdruck:
	//$_SESSION['testEnd'] = $_SESSION['testStart'] + 9000;


// Bewertung
	$_SESSION['note_S1']=0;
	$_SESSION['note_S2']=0;
	$_SESSION['note_S3']=0;
	$_SESSION['note_S4']=0;
	$_SESSION['note_S5']=0;
	$_SESSION['note_S6']=0;
	$_SESSION['note_S7']=0;
	$_SESSION['note_S8']=0;
	$_SESSION['note_S9']=0;
	$_SESSION['note_S0']=0;
	
	$_SESSION['note_total']=0;

// Fertig
	$_SESSION['fertig_S1']="0";
	$_SESSION['fertig_S2']="0";
	$_SESSION['fertig_S3']="0";
	$_SESSION['fertig_S4']="0";
	$_SESSION['fertig_S5']="0";
	$_SESSION['fertig_S6']="0";
	$_SESSION['fertig_S7']="0";
	$_SESSION['fertig_S8']="0";
	$_SESSION['fertig_S9']="0";
	$_SESSION['fertig_S0']="0";
	$_SESSION["user_answer"]="";
// stores the data

	$_SESSION['tab_S1']="0";
	$_SESSION['tab_S2']="0";
	$_SESSION['tab_S3']="0";
	$_SESSION['tab_S4']="0";
	$_SESSION['tab_S5']="0";
	$_SESSION['tab_S6']="0";
	$_SESSION['tab_S7']="0";
	$_SESSION['tab_S8']="0";
	$_SESSION['tab_S9']="0";
	$_SESSION['tab_S0']="0";
	
	include("index_original.html");
?>
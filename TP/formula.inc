<?PHP
$standard = Array();
$standard["ERROR"] = 8;
$standard["THEMA"] = 80;
$standard["WH_RATE"] = 2.00;
$standard["K_RANG"] = 80;
$standard["TRIP_RANG"] = 30;
$standard["QUAT_RANG"] = 9;
$standard["BSTB_ZAHL"] = 3.9;

$pars = $analyse->getPars();

$TA = $pars["TXT_LANG"];
$TH = $pars["THEMA"];
$TH_LOG = log10(3+$TH);
$KR = $pars["K_RANG"];
$TR = $pars["TRIP_RANG"];
$QR = $pars["QUAT_RANG"];
$WH = $pars["WH_RATE"];
$WH_LOG = log10(1 + $WH);
$BS = $pars["BSTB_ZAHL"];
$FE = $pars["ERROR"];
$FE_LOG = log10(1 + $FE);
$FORM = $pars["FORM"];
$ANR = $pars["ANR"];
$SCHL = $pars["SCHL"];


//Zusatz wg null
$TL = $TA + 3;
$TA_LOG = log10($TL);

$TX = 1/$TA_LOG;

//$FORM = ($ANR + $SCHL)/2;
$FORM = $FORM/10;
$FORM = round($FORM, 0);


//$WERT = 9 * (0.799 * $KR + - 9.546) + 9 * (3.1 * $TR + 16.96) + (0.878 * $QR + -7.4);

$WERT = 5 * $TH  + 3 * $KR + 2 * $TR + 6 * $QR ;


$PLAGE = 620;


$PKT = 15 * $WERT/$PLAGE;

$PKT = $PKT + $FORM;

	if ($PKT > 20) {
		$PKT = 20;
		}
		
	if ($KR < 1) {
		$PKT = 0;
		}
/*	if ($TR < 1) {
		$PKT = 0;
		}
*/
	if ($TH_LOG < 0.9) {
		$PKT = 0;
		}

	if ($TA < 12) {
		$PKT = 0;
		}

$KILL = $WH /$TH_LOG;

	if ($KILL > 1.05) {
		$PKT = 1;
		}


$PKT = round($PKT, 0);
$WERT = round($WERT,2);
$TH = round($TH,2);
$BS = round($BS,3);
$TH_LOG = round($TH_LOG,2);
$WH = round($WH,2);;
$WH_LOG = round($WH_LOG,2);

?>


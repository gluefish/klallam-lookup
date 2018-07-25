<?php
$addy="Location: https://docs.google.com/spreadsheets/d/";
$key="1_fhOXr_qdWYnZG1_N5ueNAdsusbQPrhp1uTOXU7wF_g/gviz/";
$tq="tq?tqx=out:html&tq=";
$addy = $addy . $key . $tq;
if (isset($_GET["notrimlead"])) { $spc1 = "' "; } else { $spc1 = "'"; }
if (isset($_GET["notrimtail"])) { $spc2 = " '"; } else { $spc2 = "'"; }
	
if (isset($_GET["en"])) {
	$addy = $addy . "SELECT A, B, C, D WHERE A CONTAINS " . $spc1 . $_GET["en"] . $spc2;	
}
if (isset($_GET["kl"])) {
	$addy = $addy . "SELECT A, B, C, D WHERE B CONTAINS " . $spc1 . $_GET["kl"] . $spc2;	
}
$addy = $addy . " OR A CONTAINS 'ENGLISH'";
//echo($addy);
header($addy);
exit();
?>

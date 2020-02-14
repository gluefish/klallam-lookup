<?php
$addy="Location: https://docs.google.com/spreadsheets/d/";
$key="1Df111tDKCBDVku_l_nbUp-ACOI8MJJE2MzfANXlJDsA/gviz/";
$tq="tq?tqx=out:html&tq=";
$addy = $addy . $key . $tq;
$addy = $addy . "SELECT A, B, C, D, E, G WHERE A CONTAINS '" . $_GET["en"] . "'";
$addy = $addy . " OR B CONTAINS '" . $_GET["en"] . "'";
$addy = $addy . " OR C CONTAINS '" . $_GET["en"] . "'";
$addy = $addy . " OR D CONTAINS '" . $_GET["en"] . "'";
$addy = $addy . " OR E CONTAINS '" . $_GET["en"] . "'";
$addy = $addy . " OR G CONTAINS '" . $_GET["en"] . "'";
$addy = $addy . " OR A CONTAINS 'ENGLISH'";
//$addy = $addy . " ORDER BY " . $_GET["sortby"];
//$addy .= " ORDER BY B";
echo($addy);
header($addy);
exit();
?>

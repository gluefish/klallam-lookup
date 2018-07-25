<?php
$addy="Location: https://docs.google.com/spreadsheets/d/";
$key="1_fhOXr_qdWYnZG1_N5ueNAdsusbQPrhp1uTOXU7wF_g/gviz/";
$tq="tq?tqx=out:html&tq=";
$addy = $addy . $key . $tq;
$addy = $addy . "SELECT A, B, C, D WHERE A CONTAINS '" . $_GET["en"] . "'";
$addy = $addy . " OR B CONTAINS '" . $_GET["en"] . "'";
$addy = $addy . " OR D CONTAIND '" . $_GET["en"] . "'";
$addy = $addy . " OR A CONTAINS 'ENGLISH'";
//echo($addy);
header($addy);
exit();
?>

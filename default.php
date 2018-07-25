<?php
if (!empty($_GET["word"])) {
	$addy = "Location: https://docs.google.com/spreadsheets/d/1_fhOXr_qdWYnZG1_N5ueNAdsusbQPrhp1uTOXU7wF_g/gviz/tq?tqx=out:html&tq=SELECT A, B, C, D WHERE A CONTAINS '" . $_GET["word"] . "'";	
}
if (!empty($_GET["klallam"])) {
	$addy = "Location: https://docs.google.com/spreadsheets/d/1_fhOXr_qdWYnZG1_N5ueNAdsusbQPrhp1uTOXU7wF_g/gviz/tq?tqx=out:html&tq=SELECT A, B, C, D WHERE B CONTAINS '" . $_GET["klallam"] . "'";	
}
header($addy);
exit();
?>

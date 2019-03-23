<?php 

$dataart_gettpl = file_get_contents('../tpl/dataart.tpl');
	$dataart_ph = array("{}");
	$dataart_phErsatz = array("");
 //,,rückgabe'' an die index.php - diese seite füllt nun das site_content
$site_content = str_replace($dataart_ph,$dataart_phErsatz,$dataart_gettpl);									
	//Den Seiten-Namen setzen
	$_GET['site'] = "dataart";

?>

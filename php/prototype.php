<?php 

$prototype_gettpl = file_get_contents('../tpl/prototype.tpl');
	$prototype_ph = array("{prototype_question1}", "{prototype_question2}","{prototype_question3}");
	$prototype_phErsatz = array("den 80er Jahre Look", "Eisbergsalat", "karierte Holzfällerhemden");
 //,,rückgabe'' an die index.php - diese seite füllt nun das site_content
$site_content = str_replace($prototype_ph,$prototype_phErsatz,$prototype_gettpl);									
	//Den Seiten-Namen setzen
	$_GET['site'] = "prototype";

?>


<?php
$site_content = file_get_contents('../tpl/start.tpl');

include "../tpl/header.tpl";

//+++NAVIGATION+++
$nav_gettpl = file_get_contents('../tpl/nav.tpl');
$nav_ph = array("{dataart_active}","{prototype_active}","{absurdum_active}","{kreativ_active}");
$nav_phErsatz = array("","","","");

if($_GET['site'] == "dataart") {	$nav_phErsatz[0] = "active"; }
if($_GET['site'] == "prototype") {	$nav_phErsatz[1] = "active"; }
if($_GET['site'] == "absurdum") { $nav_phErsatz[2] = "active"; }
if($_GET['site'] == "kreativ") { $nav_phErsatz[3] = "active"; }

$nav_fertig = str_replace($nav_ph, $nav_phErsatz, $nav_gettpl);
echo $nav_fertig;

switch($_GET['site']) {
	case "dataart": 
		include "../php/dataart.php";
		break;
	case "impressum":
		include "../tpl/impressum.tpl";
		break;
	case "prototype":
		include "../php/prototype.php";
		break;
	default: 
		include "../php/dataart.php";
}
echo $site_content;

include "../php/footer.php";

?>

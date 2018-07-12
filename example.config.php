<?php
require_once("control/queryFunctions.php");
require_once("control/class.Player.php");
require_once("control/class.Server.php");
$pageTitle = '';
$weaponsArray = array("m4a1_silencer","m4a1","ak47","awp","knife","usp_silencer","hkp2000","elite","p250","fiveseven","cz75a","deagle","glock","tec9","famas","aug","galilar","sg556","hegrenade","flashbang","smokegrenade","inferno");
$webTitle = '';
$serverType = '';
$table = 'rankme';
$dbh = new PDO("mysql:host=examplehost ;dbname=exampledb ", 'db_user', 'db_pass ');

$sql_details = array(
			'user' => 'db_user',
			'pass' => 'db_pass',
			'db' => 'exampledb',
			'host' => 'examplehost'
);

$webURL = ' ';
$sbURL = ' ';

?>

<?php 
$fileMain = fopen("../config.php", w);
$pageTitle = "$pageTitle = {$_POST['pageTitle']}\n";
$webTitle = "$webTitle = {$_POST['browserTitle']}\n";
$databaseConn = "$dbh = new PDO('mysql:host={$_POST['databaseIP']};dbname={$_POST['databaseName']}', '{$_POST['databaseUser']}', '{$_POST['databasePass']}');\n";

$dbh = new PDO('mysql:host={$_POST['databaseIP']};dbname={$_POST['databaseName']}', '{$_POST['databaseUser']}', '{$_POST['databasePass']}');
$createAdminDB = "";
$stmt = $dbh->prepare($createAdminDB);
$stmt->execute();

?>
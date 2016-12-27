<?php 
$fileMain = fopen("../config.php", "w");
$pageTitle = "$pageTitle = {$_POST['pageTitle']}\n";
$webTitle = "$webTitle = {$_POST['browserTitle']}\n";
$databaseConn = "$dbh = new PDO('mysql:host={$_POST['databaseIP']};dbname={$_POST['databaseName']}', '{$_POST['databaseUser']}', '{$_POST['databasePass']}');\n";
try{
$dbh = new PDO("mysql:host={$_POST['databaseIP']};dbname={$_POST['databaseName']}", $_POST['databaseUser'], $_POST['databasePass']);
$createAdminDB = "CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";
$stmt = $dbh->prepare($createAdminDB);
$stmt->execute();
} catch( PDOException $e ) {
	throw new pdoDbException($e); 
}

?>
<?php
try{



		require_once('../Bcrypt.php');

		$fileMain = fopen("../config.php", "w");
		$itemsArray = "";
		$commaFlag = 0;
		$headPHP = "<?php\n";
		$tailPHP = "?>";
		$requireStatements = "require_once(\"control/queryFunctions.php\");\nrequire_once(\"control/class.Player.php\");\nrequire_once(\"control/class.Server.php\");\n";


		$pageTitle = "\$pageTitle = '{$_POST['pageTitle']}';\n";
		$array = $_POST['check'];
		foreach($array as $item){
		if($commaFlag > 0){
			$itemsArray .= ",";
		}
		$commaFlag++;
		$itemsArray .= "\"{$item}\"";

		}
		$array = "\$weaponsArray = array({$itemsArray});\n";
		$webTitle = "\$webTitle = '{$_POST['browserTitle']}';\n";
		$serverType = "\$serverType = '{$_POST['serverType']}';\n";
		$table = "\$table = '{$_POST['tableName']}';\n";


		$databaseConn = "\$dbh = new PDO(\"mysql:host={$_POST['databaseIP']};dbname={$_POST['databaseName']}\", '{$_POST['databaseUser']}', '{$_POST['databasePass']}');\n";

		fwrite($fileMain, $headPHP);
		fwrite($fileMain, $requireStatements);
		fwrite($fileMain, $pageTitle);
		fwrite($fileMain, $array);
		fwrite($fileMain, $webTitle);
		fwrite($fileMain, $serverType);
		fwrite($fileMain, $table);
		fwrite($fileMain, $databaseConn);
		if(isset($_POST['webURL'])){
			$webURL = "\$webURL = '{$_POST['webURL']}';\n";
			fwrite($fileMain, $webURL);
		}
		if(isset($_POST['sbURL'])){
			$sbURL = "\$sbURL = '{$_POST['sbURL']}';\n";
			fwrite($fileMain, $sbURL);
		}
		$sqlDets = "\n\$sql_details = array(\n\t\t\t'user' => '{$_POST['databaseUser']}',\n\t\t\t'pass' => '{$_POST['databasePass']}',\n\t\t\t'db' => '{$_POST['databaseName']}',\n\t\t\t'host' => '{$_POST['databaseIP']}'\n);\n";
		fwrite($fileMain, $sqlDets);
		fwrite($fileMain, $tailPHP);

		fclose($fileMain);

		$dbh = new PDO("mysql:host={$_POST['databaseIP']};dbname={$_POST['databaseName']}", $_POST['databaseUser'], $_POST['databasePass']);

		$createAdminDB = "CREATE TABLE IF NOT EXISTS `users` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
		  `email` varchar(256) NOT NULL,
		  `password` varchar(256) NOT NULL,
		  PRIMARY KEY (`id`)
		) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";
		$stmt = $dbh->prepare($createAdminDB);
		$stmt->execute();
		$createServersDB = "CREATE TABLE IF NOT EXISTS `servers` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
		  `serverIP` varchar(128) NOT NULL,
		  `serverPort` varchar(128) NOT NULL,
		  `serverName` varchar(512) NOT NULL,
		  PRIMARY KEY (`id`)
		) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";
		$stmt = $dbh->prepare($createServersDB);
		$stmt->execute();

		$hash = Bcrypt::hashPassword($_POST['adminPass']);

		$query = "INSERT INTO users (email, password) VALUES (:email, :Password)";
		$stmt = $dbh->prepare($query);
		$stmt->bindValue(":email", $_POST['adminEmail']);
		$stmt->bindValue(":Password", $hash);
		$stmt->execute();

		echo "<h1>Success! You can now delete the install folder, please note that you must delete it before you can use the site!</h1>";
} catch(PDOException $e) {
    echo $e->getMessage();
}

?>

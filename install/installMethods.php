<?php 
try{



		require_once('../Bcrypt.php');

		$fileMain = fopen("../config.php", "w");
		$itemsArray = "";
		$commaFlag = 0;
		$headPHP = "<?php\n";
		$tailPHP = "?>";
		$requireStatements = "require_once(\"control/queryFunctions.php\");\nrequire_once(\"control/class.Player.php\");\n";


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


		$databaseConn = "\$dbh = new PDO(\"mysql:host={$_POST['databaseIP']};dbname={$_POST['databaseName']}\", '{$_POST['databaseUser']}', '{$_POST['databasePass']}');\n";

		fwrite($fileMain, $headPHP);
		fwrite($fileMain, $requireStatements);
		fwrite($fileMain, $pageTitle);
		fwrite($fileMain, $array);
		fwrite($fileMain, $webTitle);
		fwrite($fileMain, $databaseConn);
		fwrite($fileMain, $tailPHP);

		fclose($fileMain);

		$fileSB = fopen("../sbData.php", "w");

		$sbConn = "\$dbh = new PDO(\"mysql:host={$_POST['sbIP']};dbname={$_POST['sbName']}\", '{$_POST['sbUser']}', '{$_POST['sbPass']}');\n";

		fwrite($fileSB, $headPHP);
		fwrite($fileSB, "try {\n");
		fwrite($fileSB, $sbConn);
		fwrite($fileSB, "} catch(PDOException \$e) { \n echo \$e->getMessage();\n}\n");
		fwrite($fileSB, $tailPHP);

		fclose($fileSB);

		$dbh = new PDO("mysql:host={$_POST['databaseIP']};dbname={$_POST['databaseName']}", $_POST['databaseUser'], $_POST['databasePass']);

		$createAdminDB = "CREATE TABLE IF NOT EXISTS `users` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
		  `email` varchar(256) NOT NULL,
		  `password` varchar(256) NOT NULL,
		  PRIMARY KEY (`id`)
		) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";
		$stmt = $dbh->prepare($createAdminDB);
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
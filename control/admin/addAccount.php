<?php
require_once("../../config.php");
require_once("../../Bcrypt.php");
echo "HERE1";
if(isset($_POST['accountEmail'])){
	echo "HERE2";
	if($_POST['accountPass'] == $_POST['confPass']){
		echo "HERE3";
		$hash = Bcrypt::hashPassword($_POST['accountPass']);
		$query = "INSERT INTO users (email, password) VALUES (:email, :Password)";
		$stmt = $dbh->prepare($query);
		$stmt->bindValue(":email", $_POST['accountEmail']);
		$stmt->bindValue(":Password", $hash);
		$stmt->execute();
		header("location:../../admin.php?msg=Success!");

	}else{
		header("location:../../admin.php?msg=Error");
	}

}else {
	header("location:../../admin.php?msg=Error");

}


?>
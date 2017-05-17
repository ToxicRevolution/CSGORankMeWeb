<?php 
if($_POST['accountPass'] == $_POST['confPass']){
	require_once("../../config.php");
	require_once("../../Bcrypt.php");
	$hash = Bcrypt::hashPassword($_POST['accountPass']);
	$addServer = "UPDATE users SET password = :password WHERE id = :id";
	$stmt = $dbh->prepare($addServer);
	$stmt->bindValue(":id", $_POST['accountID']);
	$stmt->bindValue(":password", $hash);
	$stmt->execute();
	header("location:../../admin.php?msg=Success!");
}
?>
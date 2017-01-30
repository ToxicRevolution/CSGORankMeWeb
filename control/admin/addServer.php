<?php 
require_once("../../config.php");
$addServer = "INSERT INTO servers (serverIP, serverPort, serverName) VALUES (:serverIP, :serverPort, :serverName)";
$stmt = $dbh->prepare($addServer);
$stmt->bindValue(":serverIP", $_POST['serverIP']);
$stmt->bindValue(":serverPort", $_POST['serverPort']);
$stmt->bindValue(":serverName", $_POST['serverName']);
$stmt->execute();
header("location:../../admin.php");
?>
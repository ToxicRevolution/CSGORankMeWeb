<?php 
require_once("../../config.php");
$addServer = "UPDATE servers SET serverIP = :serverIP, serverPort =:serverPort, serverName = :serverName WHERE id = :serverID";
$stmt = $dbh->prepare($addServer);
$stmt->bindValue(":serverID", $_POST['serverID']);
$stmt->bindValue(":serverIP", $_POST['serverIP']);
$stmt->bindValue(":serverPort", $_POST['serverPort']);
$stmt->bindValue(":serverName", $_POST['serverName']);
$stmt->execute();
header("location:../../admin.php");
?>
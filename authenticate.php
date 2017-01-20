<?php
session_start();
require_once("config.php");
$query = "SELECT * FROM users WHERE lower(email) = :email";
$stmt = $dbh->prepare($query);
$stmt->bindValue(":email", strtolower($_POST['email']));
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if (isset($row['email'])) {

    require('Bcrypt.php');
    if (Bcrypt::checkPassword($_POST['password'], $row['password'])){
    session_regenerate_id();
	$_SESSION['sess_user_id'] = $row['id'];
	$_SESSION['sess_email'] = $row['email'];
	session_write_close();
        
        header("Location: admin.php");
    } else {
        header("Location: login.php?wrong=Incorrect Password");
    }
} else {
    header("Location: login.php?wrong=Email Not Found");
}
?>
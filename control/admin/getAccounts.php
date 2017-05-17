<?php
	require_once("config.php");
	$items = getUsers($dbh);
	$counter = 1;
	foreach($items as $item){
		echo "<option value='{$item['id']}'>{$item['email']}</option>";
	}
	



?>


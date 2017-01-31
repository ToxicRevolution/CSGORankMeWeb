<?php
	require_once("config.php");
	$items = getServerIDs($dbh);
	$counter = 1;
	foreach($items as $item){
		$server = new Server($item['id'], $dbh);
		echo "<option value='{$item['id']}'>{$server->get("name")} - {$server->get("IP")}:{$server->get("port")}</option>";
	}
	



?>


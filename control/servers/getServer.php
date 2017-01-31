<?php
	require_once("config.php");
	$items = getServerIDs($dbh);
	$counter = 1;
	foreach($items as $item){
		$server = new Server($item['id'], $dbh);
		echo "<h4><a class='connect' title='Click to connect' href='steam://connect/{$server->get("IP")}:{$server->get("port")}'>{$server->get("name")} - {$server->get("IP")}:{$server->get("port")}</a></h4><br>\n";
	}
	



?>


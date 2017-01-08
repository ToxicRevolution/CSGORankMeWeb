<?php
require_once("../../config.php");
$items = getAllSteamIDs($dbh);
echo "<table class='table table-striped table-inverse table-bordered table-hover' table_Dynamic>";
echo "<tr>";
echo "<th></th>";
echo "<th>Username</th>";
echo "<th>SteamID</th>";
echo "<th>Score</th>";
echo "<th>K/D</th>";
//echo "<th>Search</th>"; //Do later
echo "</tr>";
echo "<tbody id='leaderboardTable' class='leaderboardTable'>";
foreach ($items as $item){
	$player = new Player($steamID, $dbh);
	echo "<tr>";
	echo "";
}

?>
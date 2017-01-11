<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once("config.php");
$items = getAllSteamIDs($dbh);

echo "<table class='table table-striped table-inverse table-bordered table-hover' id='LeaderBoardTable' table_Dynamic >";
echo "<thead>";
echo "<tr>";
echo "<th></th>";
echo "<th>Username</th>";
echo "<th>SteamID</th>";
echo "<th>Score</th>";
echo "<th>K/D</th>";
//echo "<th>Search</th>"; //Do later
echo "</tr>";
echo "</thead>";
echo "<tbody id='leaderboardTable' class='leaderboardTable'>";
foreach ($items as $item){
	$player = new Player($item['steam'], $dbh);
	echo "<tr>";
	echo "<td><i class='fa fa-crosshairs' aria-hidden='true'></i></td>";
	echo "<td>" . $player->get("name") . "</td>";
	echo "<td>" . $player->get("steam") . "</td>";
	echo "<td>" . $player->get("score") . "</td>";
	echo "<td>" . getKD($player) . "</td>";
	echo "</tr>";
} 
echo "</tbody>\n</table>";

?>
<?php
function getAllSteamIDs($dbh){
	$stmt = "SELECT steam FROM rankme";
	$query = $dbh->prepare($stmt);
	$query->execute();
	$items = $query->fetchAll(PDO::FETCH_ASSOC);
	return $items;
}

function getTotalPlayers($dbh){
	$stmt = "SELECT count(steam) FROM rankme";
	$query = $dbh->prepare($stmt);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;	
}

function getKD($player){

	$kd = round($player->get("kills")/$player->get('deaths'), 2);
	return $kd;
}

function getADR($player){
	$roundsTotal = $player->get("rounds_ct");
	$roundsTotal += $player->get("rounds_tr");
	$damageTotal = $player->get("damage");
	$ADR = round($damageTotal / $roundsTotal, 2);
	return $ADR;
}

function getAccuracy($player){
	$shots = $player->get("shots");
    $hits = $player->get("hits");
    $Accuracy = ceil(($hits / $shots) * 100);
    return $Accuracy;
}

function getHeadShotPercent($player){
	$headshots = $player->get("headshots");
	$kills = $player->get("kills");

	$hsperct = round(($headshots / $kills) * 100, 2);
	return $hsperct;
}

function getPerctTotalKill($player, $weaponKills){
	$kills = $player->get("kills");
	$percentTotal = round(($weaponKills / $kills) * 100, 2);
	return $percentTotal;


}

function getFavoriteWeapon($player){
	$ak = $player->get("ak47");
	$m4a1 = $player->get("m4a1_silencer");
	$m4a4 = $player->get("m4a1");
	$awp = $player->get("awp");
	$usp = $player->get("usp_silencer");
	$p2000 = $player->get("hkp2000");
	$glock = $player->get("glock");
	$p250 = $player->get("p250");
	$deag = $player->get("deagle");
	$fiveseven = $player->get("fiveseven");
	$tec9 = $player->get("tec9");
	$sg556 = $player->get("sg556");
	$ssg08 = $player->get("ssg08");
	$aug = $player->get("aug");
	$famas = $player->get("famas");
	$galil = $player->get("galilar");
	$weapon = array ('AK-47' => $ak, 'M4A1-S' => $m4a1, 'M4A4' => $m4a4, 'AWP' => $awp, 'USP-S' => $usp, 'P2000' => $p2000, 'Glock' => $glock, 'P250' => $p250, 'Desert Eagle' => $deag, 'Five Seven' => $fiveseven, 'Tec-9' => $tec9, 'SG556' => $sg556, 'SSG-08' => $ssg08, 'Aug' => $aug, 'Famas' => $famas, 'Galil' => $galil);
	$favoriteWeapon = array_search(max($weapon), $weapon);
	return $favoriteWeapon;
}

function generateJsonForDonut($player){
	$head = $player->get("head");
	$chest = $player->get("chest");
	$stomach = $player->get("stomach");
	$left_arm = $player->get("left_arm");
	$right_arm = $player->get("right_arm");
	$right_leg = $player->get("right_leg");
	$left_leg = $player->get("left_leg");
    $display =  "{label: 'Head', value: {$head}},";
    $display .= "{label: 'Chest', value: {$chest}},";
    $display .= "{label: 'Stomach', value: {$stomach}},";
    $display .= "{label: 'Left Arm', value: {$left_arm}},";
    $display .= "{label: 'Right Arm', value: {$right_arm}},";
    $display .= "{label: 'Left Leg', value: {$left_leg}},";
    $display .= "{label: 'Right Leg', value: {$right_leg}}";
    return (string) $display;
}

function generateJsonForBar($player){
    $m4s = $player->get("m4a1") + $player->get("m4a1_silencer");
    $ctPistols = $player->get("hkp2000") + $player->get("usp_silencer");
    $ak = $player->get("ak47");
    $awp = $player->get("awp");
    $deagle = $player->get("deagle");
    $glock = $player->get("glock");
    $tec9 = $player->get("tec9");
    $fiveseven = $player->get("fiveseven");
    $display = (string) "{y: 'M4A4/M4A1-S', value: {$m4s}},";
    $display .= (string) "{y: 'AK-47', value: {$ak}},";
    $display .= (string) "{y: 'Awp', value: {$awp}},";
    $display .= (string) "{y: 'Desert Eagle', value: {$deagle}},";
    $display .= (string) "{y: 'USP/P2000', value: {$ctPistols}},";
    $display .= (string) "{y: 'Glock', value: {$glock}},";
    $display .= (string) "{y: 'Tec-9', value: {$tec9}},";
    $display .= (string) "{y: 'Five Seven', value: {$fiveseven}}";
    return (string) $display;
}

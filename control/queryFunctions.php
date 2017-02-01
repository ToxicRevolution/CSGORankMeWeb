<?php
function getAllSteamIDs($dbh){
	$stmt = "SELECT steam FROM rankme WHERE score > 0";
	$query = $dbh->prepare($stmt);
	$query->execute();
	$items = $query->fetchAll(PDO::FETCH_ASSOC);
	return $items;
}

function getServerIDs($dbh){
		$stmt = "SELECT id FROM servers";
		$query = $dbh->prepare($stmt);
		$query->execute();
		$items = $query->fetchAll(PDO::FETCH_ASSOC);
		return $items;
}

function getServerID($dbh, $ip, $port){
		$stmt = "SELECT id FROM servers WHERE serverIP = :IP AND serverPort = :port";
		$query = $dbh->prepare($stmt);
		$query->bindValue(":IP", $ip);
		$query->bindValue(":port", $port);
		$query->execute();
		$item = $query->fetchColumn();
		return $item;
}

function validSteamID($dbh, $steamID){
	$stmt = "SELECT count(steam) FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;	
}

function getLeaderBoardInfo($dbh){
	$stmt = "SELECT steam, name, score, kills, deaths FROM rankme WHERE score > 0";
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

function getTotalServers($dbh){
	$stmt = "SELECT count(id) FROM servers";
	$query = $dbh->prepare($stmt);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;	
}

function getKD($player){
	$deaths = $player->get('deaths');
	if($deaths == 0){
		$deaths = 1;
	}
	$kd = round($player->get("kills")/$deaths, 2);
	return $kd;
}

function getKDLeaderboard($kills, $deaths){
	if($deaths == 0){
		$deaths = 1;
	}
	$kd = round($kills/$deaths, 2);
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
    $display .= (string) "{y: 'AWP', value: {$awp}},";
    $display .= (string) "{y: 'Desert Eagle', value: {$deagle}},";
    $display .= (string) "{y: 'USP/P2000', value: {$ctPistols}},";
    $display .= (string) "{y: 'Glock', value: {$glock}},";
    $display .= (string) "{y: 'Tec-9', value: {$tec9}},";
    $display .= (string) "{y: 'Five Seven', value: {$fiveseven}}";
    return (string) $display;
}

function getWeaponName($weapon){
	switch($weapon){
		case "m4a1_silencer":
			return "M4A1-S";
		case "m4a1";
			return "M4A4";
		case "ak47":
			return "Ak-47";
		case "famas":
			return "Famas";
		case "galilar":
			return "Galil";
		case "sg556":
			return "SG556";
		case "aug":
			return "AUG";
		case "awp":
			return "AWP";
		case "scar20":
			return "Scar-20";
		case "g3sg1":
			return "G3SG1";
		case "ssg08":
			return "SSG-08";
		case "nova":
			return "Nova";
		case "xm1014":
			return "XM-1014";
		case "mag7":
			return "Mag-7";
		case "sawedoff":
			return "Sawed Off";
		case "m249":
			return "M-249";
		case "negev":
			return "Negev";
		case "knife":
			return "knife";
		case "p250":
			return "P-250";
		case "glock":
			return "Glock";
		case "usp_silencer":
			return "USP-S";
		case "hkp2000":
			return "P2000";
		case "fiveseven":
			return "Five Seven";
		case "tec9":
			return "Tec-9";
		case "elite":
			return "Dual Berettas";
		case "revolver":
			return "Revolver";
		case "deagle":
			return "Desert Eagle";
		case "cz75a":
			return "CZ-75a";
		case "bizon":
			return "PP Bizon";
		case "mp9":
			return "MP-9";
		case "mp7":
			return "MP-7";
		case "p90":
			return "P90";
		case "ump45":
			return "UMP-45";
		case "mac10":
			return "Mac-10";
		case "hegrenade":
			return "HE Grenade";
		case "flashbang":
			return "Flash Grenade";
		case "smokegrenade":
			return "Smoke Grenade";
		case "decoy":
			return "Decoy Grenade";
		case "inferno":
			return "Incendiary/Molotov Grenade";
		case "taser":
			return "Taser";
		default:
			return "<!-- ERROR WITH COLUMN {$weapon} -->";
	}
}

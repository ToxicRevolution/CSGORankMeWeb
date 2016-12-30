<?php

require_once("../config.php");
getTotalPlayers(){
	$stmt = "SELECT count(steam) FROM rankme";
	$query = $dbh->prepare($stmt);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;	
}

getLastIP(){
	$stmt = "SELECT lastip FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getScore(){
	$stmt = "SELECT score FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getKills(){
	$stmt = "SELECT kills FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getDeaths(){
	$stmt = "SELECT deaths FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getAssists(){
	$stmt = "SELECT assists FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getSuicides(){
	$stmt = "SELECT suicides FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getTKs(){
	$stmt = "SELECT tk FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getShots(){
	$stmt = "SELECT shots FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getHits(){
	$stmt = "SELECT hits FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getHeadshots(){
	$stmt = "SELECT headshots FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getConneced(){
	$stmt = "SELECT connected FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getRoundsT(){
	$stmt = "SELECT rounds_tr FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getRoundsCT(){
	$stmt = "SELECT rounds_ct FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getLastConnected(){
	$stmt = "SELECT lastconnect FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getKnife(){
	$stmt = "SELECT knife FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getGlock(){
	$stmt = "SELECT glock FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getP2000(){
	$stmt = "SELECT hk2000 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getUSPS(){
	$stmt = "SELECT usp_silencer FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getP250(){
	$stmt = "SELECT p250 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getDeagle(){
	$stmt = "SELECT deagle FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getElite(){
	$stmt = "SELECT elite FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getFiveSeven(){
	$stmt = "SELECT fiveseven FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getTec9(){
	$stmt = "SELECT tec9 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getCZ75A(){
	$stmt = "SELECT cz75a FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getRevolver(){
	$stmt = "SELECT revolver FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getNova(){
	$stmt = "SELECT nova FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getX1014(){
	$stmt = "SELECT xm1014 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getMag7(){
	$stmt = "SELECT mag7 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getSawedOff(){
	$stmt = "SELECT sawedoff FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $iitem[0]tem;
}

getBizon(){
	$stmt = "SELECT bizon FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getMac10(){
	$stmt = "SELECT mac10 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getMp9(){
	$stmt = "SELECT mp9 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}	

getMP7(){
	$stmt = "SELECT mp7 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getUMP45(){
	$stmt = "SELECT ump45 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getP90(){
	$stmt = "SELECT p90 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getGalilar(){
	$stmt = "SELECT galilar FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getAK47(){
	$stmt = "SELECT ak47 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getScar20(){
	$stmt = "SELECT sccar20 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getFamas(){
	$stmt = "SELECT famas FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getM4A4(){
	$stmt = "SELECT m4a1 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getM4a1S(){
	$stmt = "SELECT m4a1_silencer FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getAug(){
	$stmt = "SELECT aug FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getSSG08(){
	$stmt = "SELECT ssg08 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getSG556(){
	$stmt = "SELECT sg556 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getAWP(){
	$stmt = "SELECT awp FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getG3SG1(){
	$stmt = "SELECT g3sg1 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getm249(){
	$stmt = "SELECT m249 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getNegev(){
	$stmt = "SELECT negev FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getHeGernade(){
	$stmt = "SELECT hegrenade FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getFlashBang(){
	$stmt = "SELECT flashbang FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getSmokeGrenade(){
	$stmt = "SELECT smoekgrenade FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getInferno(){
	$stmt = "SELECT inferno FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getDecoy(){
	$stmt = "SELECT decoy FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getTaser(){
	$stmt = "SELECT taser FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getHead(){
	$stmt = "SELECT head FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getChest(){
	$stmt = "SELECT chest FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getStomach(){
	$stmt = "SELECT stomach FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getLeftArm(){
	$stmt = "SELECT left_arm FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getRightArm(){
	$stmt = "SELECT right_arm FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getLeftLeg(){
	$stmt = "SELECT left_leg FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getRightleg(){
	$stmt = "SELECT right_leg FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getC4Plants(){
	$stmt = "SELECT c4_planted FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getC4Exploded(){
	$stmt = "SELECT c4_exploded FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getC4Defused(){
	$stmt = "SELECT c4_defused FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getCTWins(){
	$stmt = "SELECT ct_win FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getTWins(){
	$stmt = "SELECT tr_win FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getHostagesRescued(){
	$stmt = "SELECT hostages_rescued FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getVIPKilled(){
	$stmt = "SELECT vip_killed FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getVIPEscaped(){
	$stmt = "SELECT vip_escaped FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getVIPPlayed(){
	$stmt = "SELECT vip_played FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getMVP(){
	$stmt = "SELECT mvp FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

getDamage(){
  	$stmt = "SELECT damage FROM rankme WHERE steam = :steamID";
  	$query = $dbh->prepare($stmt);
  	$query->bindValue(":steamID", $steamID);
  	$query->execute();
  	$item = $query->fetch(PDO::FETCH_ASSOC);
  	return $item[0];
}
<?php
class Player {
	private $lastIP;
	private $score;
	private $kills;
	private $deaths;
	private $assits;
	private $suicides;
	private $tk;
	private $shots;
	private $hits;
	private $headshots;
	private $connected;
	private $rounds_tr;
	private $rounds_ct;
	private $lastconnect;
	private $knife;
	private $glock;
	private $hkp2000;
	private $usp_silencer;
	private $p250;
	private $deagle;
	private $elite;
	private $fiveseven;
	private $tec9;
	private $cz75a;
	private $rovolver;
	private $nova;
	private $xm1014;
	private $mag7;
	private $sawedoff;
	private $bizon;
	private $mac10;
	private $mp9;
	private $mp7ump45;
	private $p90;
	private $galilar;
	private $ak47;
	private $scar20;
	private $famas;
	private $m4a1;
	private $m4a1_silencer;
	private $aug;
	private $ssg08;
	private $sg556;
	private $awp;
	private $g3sg1;
	private $m249;
	private $negev;
	private $hegrenade;
	private $flashbang;
	private $smoekgrenade;
	private $inferno;
	private $decoy;
	private $taser;
	private $head;
	private $chest;
	private $stomach;
	private $left_arm;
	private $right_arm;
	private $left_leg;
	private $right_leg;
	private $c4_planted;
	private $c4_exploded;
	private $c4_defused;
	private $ct_win;
	private $tr_win;
	private $hostages_rescued;
	private $vip_killed;
	private $vip_escaped;
	private $vip_played;
	private $mvp;


	/**
	 * Class Constructor
	 * @param    $lastIP   
	 * @param    $score   
	 * @param    $kills   
	 * @param    $deaths   
	 * @param    $assits   
	 * @param    $suicides   
	 * @param    $tk   
	 * @param    $shots   
	 * @param    $hits   
	 * @param    $headshots   
	 * @param    $connected   
	 * @param    $rounds_tr   
	 * @param    $rounds_ct   
	 * @param    $lastconnect   
	 * @param    $knife   
	 * @param    $glock   
	 * @param    $hkp2000   
	 * @param    $usp_silencer   
	 * @param    $p250   
	 * @param    $deagle   
	 * @param    $elite   
	 * @param    $fiveseven   
	 * @param    $tec9   
	 * @param    $cz75a   
	 * @param    $rovolver   
	 * @param    $nova   
	 * @param    $xm1014   
	 * @param    $mag7   
	 * @param    $sawedoff   
	 * @param    $bizon   
	 * @param    $mac10   
	 * @param    $mp9   
	 * @param    $mp7ump45   
	 * @param    $p90   
	 * @param    $galilar   
	 * @param    $ak47   
	 * @param    $scar20   
	 * @param    $famas   
	 * @param    $m4a1   
	 * @param    $m4a1_silencer   
	 * @param    $aug   
	 * @param    $ssg08   
	 * @param    $sg556   
	 * @param    $awp   
	 * @param    $g3sg1   
	 * @param    $m249   
	 * @param    $negev   
	 * @param    $hegrenade   
	 * @param    $flashbang   
	 * @param    $smoekgrenade   
	 * @param    $inferno   
	 * @param    $decoy   
	 * @param    $taser   
	 * @param    $head   
	 * @param    $chest   
	 * @param    $stomach   
	 * @param    $left_arm   
	 * @param    $right_arm   
	 * @param    $left_leg   
	 * @param    $right_leg   
	 * @param    $c4_planted   
	 * @param    $c4_exploded   
	 * @param    $c4_defused   
	 * @param    $ct_win   
	 * @param    $tr_win   
	 * @param    $hostages_rescued   
	 * @param    $vip_killed   
	 * @param    $vip_escaped   
	 * @param    $vip_played   
	 * @param    $mvp   
	 */
	public function __construct($lastIP, $score, $kills, $deaths, $assits, $suicides, $tk, $shots, $hits, $headshots, $connected, $rounds_tr, $rounds_ct, $lastconnect, $knife, $glock, $hkp2000, $usp_silencer, $p250, $deagle, $elite, $fiveseven, $tec9, $cz75a, $rovolver, $nova, $xm1014, $mag7, $sawedoff, $bizon, $mac10, $mp9, $mp7ump45, $p90, $galilar, $ak47, $scar20, $famas, $m4a1, $m4a1_silencer, $aug, $ssg08, $sg556, $awp, $g3sg1, $m249, $negev, $hegrenade, $flashbang, $smoekgrenade, $inferno, $decoy, $taser, $head, $chest, $stomach, $left_arm, $right_arm, $left_leg, $right_leg, $c4_planted, $c4_exploded, $c4_defused, $ct_win, $tr_win, $hostages_rescued, $vip_killed, $vip_escaped, $vip_played, $mvp)
	{
		$this->lastIP = $lastIP;
		$this->score = $score;
		$this->kills = $kills;
		$this->deaths = $deaths;
		$this->assits = $assits;
		$this->suicides = $suicides;
		$this->tk = $tk;
		$this->shots = $shots;
		$this->hits = $hits;
		$this->headshots = $headshots;
		$this->connected = $connected;
		$this->rounds_tr = $rounds_tr;
		$this->rounds_ct = $rounds_ct;
		$this->lastconnect = $lastconnect;
		$this->knife = $knife;
		$this->glock = $glock;
		$this->hkp2000 = $hkp2000;
		$this->usp_silencer = $usp_silencer;
		$this->p250 = $p250;
		$this->deagle = $deagle;
		$this->elite = $elite;
		$this->fiveseven = $fiveseven;
		$this->tec9 = $tec9;
		$this->cz75a = $cz75a;
		$this->rovolver = $rovolver;
		$this->nova = $nova;
		$this->xm1014 = $xm1014;
		$this->mag7 = $mag7;
		$this->sawedoff = $sawedoff;
		$this->bizon = $bizon;
		$this->mac10 = $mac10;
		$this->mp9 = $mp9;
		$this->mp7ump45 = $mp7ump45;
		$this->p90 = $p90;
		$this->galilar = $galilar;
		$this->ak47 = $ak47;
		$this->scar20 = $scar20;
		$this->famas = $famas;
		$this->m4a1 = $m4a1;
		$this->m4a1_silencer = $m4a1_silencer;
		$this->aug = $aug;
		$this->ssg08 = $ssg08;
		$this->sg556 = $sg556;
		$this->awp = $awp;
		$this->g3sg1 = $g3sg1;
		$this->m249 = $m249;
		$this->negev = $negev;
		$this->hegrenade = $hegrenade;
		$this->flashbang = $flashbang;
		$this->smoekgrenade = $smoekgrenade;
		$this->inferno = $inferno;
		$this->decoy = $decoy;
		$this->taser = $taser;
		$this->head = $head;
		$this->chest = $chest;
		$this->stomach = $stomach;
		$this->left_arm = $left_arm;
		$this->right_arm = $right_arm;
		$this->left_leg = $left_leg;
		$this->right_leg = $right_leg;
		$this->c4_planted = $c4_planted;
		$this->c4_exploded = $c4_exploded;
		$this->c4_defused = $c4_defused;
		$this->ct_win = $ct_win;
		$this->tr_win = $tr_win;
		$this->hostages_rescued = $hostages_rescued;
		$this->vip_killed = $vip_killed;
		$this->vip_escaped = $vip_escaped;
		$this->vip_played = $vip_played;
		$this->mvp = $mvp;
	}


}

function createOBJ($steamID, $dbh){
	 $stmt = "SELECT * FROM rankme WHERE steam = :steamID";
	 $query = $dbh->prepare($stmt);
}

function getTotalPlayers($dbh){
	$stmt = "SELECT count(steam) FROM rankme";
	$query = $dbh->prepare($stmt);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;	
}

function getLastIP($steamID, $dbh){
	$stmt = "SELECT lastip FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getScore($steamID, $dbh){
	$stmt = "SELECT score FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getKills($steamID, $dbh){
	$stmt = "SELECT kills FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getDeaths($steamID, $dbh){
	$stmt = "SELECT deaths FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}
function getKD($steamID, $dbh){
	$stmt = "SELECT kills, deaths FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	$kd = round($item['kills']/$item['deaths'], 2);
	return $kd;
}

function getAssists($steamID, $dbh){
	$stmt = "SELECT assists FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getSuicides($steamID, $dbh){
	$stmt = "SELECT suicides FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getTKs($steamID, $dbh){
	$stmt = "SELECT tk FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getShots($steamID, $dbh){
	$stmt = "SELECT shots FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getHits($steamID, $dbh){
	$stmt = "SELECT hits FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getHeadshots($steamID, $dbh){
	$stmt = "SELECT headshots FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getConneced($steamID, $dbh){
	$stmt = "SELECT connected FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getRoundsT($steamID, $dbh){
	$stmt = "SELECT rounds_tr FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getRoundsCT($steamID, $dbh){
	$stmt = "SELECT rounds_ct FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getLastConnected($steamID, $dbh){
	$stmt = "SELECT lastconnect FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getKnife($steamID, $dbh){
	$stmt = "SELECT knife FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getGlock($steamID, $dbh){
	$stmt = "SELECT glock FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getP2000($steamID, $dbh){
	$stmt = "SELECT hk2000 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getUSPS($steamID, $dbh){
	$stmt = "SELECT usp_silencer FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getP250($steamID, $dbh){
	$stmt = "SELECT p250 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getDeagle($steamID, $dbh){
	$stmt = "SELECT deagle FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getElite($steamID, $dbh){
	$stmt = "SELECT elite FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getFiveSeven($steamID, $dbh){
	$stmt = "SELECT fiveseven FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getTec9($steamID, $dbh){
	$stmt = "SELECT tec9 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getCZ75A($steamID, $dbh){
	$stmt = "SELECT cz75a FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getRevolver($steamID, $dbh){
	$stmt = "SELECT revolver FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getNova($steamID, $dbh){
	$stmt = "SELECT nova FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getX1014($steamID, $dbh){
	$stmt = "SELECT xm1014 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getMag7($steamID, $dbh){
	$stmt = "SELECT mag7 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getSawedOff($steamID, $dbh){
	$stmt = "SELECT sawedoff FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getBizon($steamID, $dbh){
	$stmt = "SELECT bizon FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getMac10($steamID, $dbh){
	$stmt = "SELECT mac10 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getMp9($steamID, $dbh){
	$stmt = "SELECT mp9 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}	

function getMP7($steamID, $dbh){
	$stmt = "SELECT mp7 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getUMP45($steamID, $dbh){
	$stmt = "SELECT ump45 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getP90($steamID, $dbh){
	$stmt = "SELECT p90 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getGalilar($steamID, $dbh){
	$stmt = "SELECT galilar FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getAK47($steamID, $dbh){
	$stmt = "SELECT ak47 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getScar20($steamID, $dbh){
	$stmt = "SELECT scar20 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getFamas($steamID, $dbh){
	$stmt = "SELECT famas FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getM4A4($steamID, $dbh){
	$stmt = "SELECT m4a1 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getM4a1S($steamID, $dbh){
	$stmt = "SELECT m4a1_silencer FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getAug($steamID, $dbh){
	$stmt = "SELECT aug FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getSSG08($steamID, $dbh){
	$stmt = "SELECT ssg08 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getSG556($steamID, $dbh){
	$stmt = "SELECT sg556 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getAWP($steamID, $dbh){
	$stmt = "SELECT awp FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getG3SG1($steamID, $dbh){
	$stmt = "SELECT g3sg1 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getm249($steamID, $dbh){
	$stmt = "SELECT m249 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getNegev($steamID, $dbh){
	$stmt = "SELECT negev FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getHeGernade($steamID, $dbh){
	$stmt = "SELECT hegrenade FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getFlashBang($steamID, $dbh){
	$stmt = "SELECT flashbang FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getSmokeGrenade($steamID, $dbh){
	$stmt = "SELECT smoekgrenade FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getInferno($steamID, $dbh){
	$stmt = "SELECT inferno FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getDecoy($steamID, $dbh){
	$stmt = "SELECT decoy FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getTaser($steamID, $dbh){
	$stmt = "SELECT taser FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getHead($steamID, $dbh){
	$stmt = "SELECT head FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getChest($steamID, $dbh){
	$stmt = "SELECT chest FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getStomach($steamID, $dbh){
	$stmt = "SELECT stomach FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getLeftArm($steamID, $dbh){
	$stmt = "SELECT left_arm FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getRightArm($steamID, $dbh){
	$stmt = "SELECT right_arm FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getLeftLeg($steamID, $dbh){
	$stmt = "SELECT left_leg FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getRightleg($steamID, $dbh){
	$stmt = "SELECT right_leg FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getC4Plants($steamID, $dbh){
	$stmt = "SELECT c4_planted FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getC4Exploded($steamID, $dbh){
	$stmt = "SELECT c4_exploded FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getC4Defused($steamID, $dbh){
	$stmt = "SELECT c4_defused FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getCTWins($steamID, $dbh){
	$stmt = "SELECT ct_win FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getTWins($steamID, $dbh){
	$stmt = "SELECT tr_win FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getHostagesRescued($steamID, $dbh){
	$stmt = "SELECT hostages_rescued FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getVIPKilled($steamID, $dbh){
	$stmt = "SELECT vip_killed FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getVIPEscaped($steamID, $dbh){
	$stmt = "SELECT vip_escaped FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getVIPPlayed($steamID, $dbh){
	$stmt = "SELECT vip_played FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getMVP($steamID, $dbh){
	$stmt = "SELECT mvp FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;
}

function getDamage($steamID, $dbh){
  	$stmt = "SELECT damage FROM rankme WHERE steam = :steamID";
  	$query = $dbh->prepare($stmt);
  	$query->bindValue(":steamID", $steamID);
  	$query->execute();
  	$item = $query->fetchColumn();
  	return $item;
}

function getADR($steamID, $dbh){
	$roundsTotal = getRoundsCT($steamID, $dbh);
	$roundsTotal += getRoundsT($steamID, $dbh);
	$damageTotal = getDamage($steamID, $dbh);
	$ADR = round($damageTotal / $roundsTotal, 2);
	return $ADR;
}

function getAccuracy($steamID, $dbh){
	$shots = getShots($steamID, $dbh);
    $hits = getHits($steamID, $dbh);
    $Accuracy = ceil(($hits / $shots) * 100);
    return $Accuracy;
}

function getHeadShotPercent($steamID, $dbh){
	$headshots = getHeadshots($steamID, $dbh);
	$kills = getKills($steamID, $dbh);

	$hsperct = round(($headshots / $kills) * 100, 2);
	return $hsperct;
}

function getPerctTotalKill($steamID, $weaponKills, $dbh){
	$kills = getKills($steamID, $dbh);
	$percentTotal = round(($weaponKills / $kills) * 100, 2);
	return $percentTotal;


}

function getFavoriteWeapon($steamID, $dbh){
	$ak = getAK47($steamID, $dbh);
	$m4a1 = getM4a1S($steamID, $dbh);
	$m4a4 = getM4A4($steamID, $dbh);
	$awp = getAWP($steamID, $dbh);
	$usp = getUSPS($steamID, $dbh);
	$p2000 = getUSPS($steamID, $dbh);
	$glock = getGlock($steamID, $dbh);
	$p250 = getP250($steamID, $dbh);
	$deag = getDeagle($steamID, $dbh);
	$fiveSeven = getFiveSeven($steamID, $dbh);
	$tec9 = getTec9($steamID, $dbh);
	$sg556 = getSG556($steamID, $dbh);
	$ssg08 = getSSG08($steamID, $dbh);
	$aug = getAug($steamID, $dbh);
	$famas = getFamas($steamID, $dbh);
	$galil =getGalilar($steamID, $dbh);
	$weapon = array ('AK-47' => $ak, 'M4A1-S' => $m4a1, 'M4A4' => $m4a4, 'AWP' => $awp, 'USP-S' => $usp, 'P2000' => $p2000, 'Glock' => $glock, 'P250' => $p250, 'Desert Eagle' => $deag, 'Five Seven' => $fiveseven, 'Tec-9' => $tec9, 'SG556' => $sg556, 'SSG-08' => $ssg08, 'Aug' => $aug, 'Famas' => $famas, 'Galil' => $galil);
	$favoriteWeapon = array_search(max($weapon), $weapon);
	return $favoriteWeapon;
}

function generateJsonForDonut($steamID, $dbh){
	$getHitBoxInfo = "SELECT head, chest, stomach, left_arm, right_arm, left_leg, right_leg FROM rankme WHERE steam = :steamID";
    $query = $dbh->prepare($getHitBoxInfo);
  	$query->bindValue(":steamID", $steamID);
  	$query->execute();
    $info = $query->fetch(PDO::FETCH_ASSOC);
    echo "{\"label\": \"Head\", \"value\": \"{$info['head']}\"},";
    echo "{\"label\": \"Chest\", \"value\": \"{$info['chest']}\"},";
    echo "{\"label\": \"Stomach\", \"value\": \"{$info['stomach']}\"},";
    echo "{\"label\": \"Left Arm\", \"value\": \"{$info['left_arm']}\"},";
    echo "{\"label\": \"Right Arm\", \"value\": \"{$info['right_arm']}\"},";
    echo "{\"label\": \"Left Leg\", \"value\": \"{$info['left_leg']}\"},";
    echo "{\"label\": \"Right Leg\", \"value\": \"{$info['right_leg']}\"},";
}

function generateJsonForBar($steamID, $dbh){
    $m4s = getM4A4($steamID, $dbh) + getM4a1S($steamID, $dbh);
    $ctPistols = getUSPS($steamID, $dbh) + getP2000($steamID, $dbh);
    $ak = getAK47($steamID, $dbh);
    $awp = getAWP($steamID, $dbh);
    $deagle = getDeagle($steamID, $dbh);
    $glock = getGlock($steamID, $dbh);
    $tec9 = getTec9($steamID, $dbh);
    $fiveseven = getFiveSeven($steamID, $dbh);
    $display = (string) "{y: 'M4A4/M4A1-S', value: {$m4s}},";
    $display .= (string) "{y: 'Ak-47', value: {$ak}},";
    $display .= (string) "{y: 'Awp', value: {$awp}},";
    $display .= (string) "{y: 'Desert Eagle', value: {$deagle}},";
    $display .= (string) "{y: 'USP/P2000', value: {$ctPistols}},";
    $display .= (string) "{y: 'Glock', value: {$glock}},";
    $display .= (string) "{y: 'Tec-9', value: {$tec9}},";
    $display .= (string) "{y: 'Five Seven', value: {$fiveseven}}";
    return (string) $display;
}

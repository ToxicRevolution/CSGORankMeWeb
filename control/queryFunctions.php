<?php
class Player {
	public $lastIP;
	public $score;
	public $kills;
	public $deaths;
	public $assists;
	public $suicides;
	public $tk;
	public $shots;
	public $hits;
	public $headshots;
	public $connected;
	public $rounds_tr;
	public $rounds_ct;
	public $lastconnect;
	public $knife;
	public $glock;
	public $hkp2000;
	public $usp_silencer;
	public $p250;
	public $deagle;
	public $elite;
	public $fiveseven;
	public $tec9;
	public $cz75a;
	public $revolver;
	public $nova;
	public $xm1014;
	public $mag7;
	public $sawedoff;
	public $bizon;
	public $mac10;
	public $mp9;
	public $mp7;
	public $ump45;
	public $p90;
	public $galilar;
	public $ak47;
	public $scar20;
	public $famas;
	public $m4a1;
	public $m4a1_silencer;
	public $aug;
	public $ssg08;
	public $sg556;
	public $awp;
	public $g3sg1;
	public $m249;
	public $negev;
	public $hegrenade;
	public $flashbang;
	public $smokegrenade;
	public $inferno;
	public $decoy;
	public $taser;
	public $head;
	public $chest;
	public $stomach;
	public $left_arm;
	public $right_arm;
	public $left_leg;
	public $right_leg;
	public $c4_planted;
	public $c4_exploded;
	public $c4_defused;
	public $ct_win;
	public $tr_win;
	public $hostages_rescued;
	public $vip_killed;
	public $vip_escaped;
	public $vip_played;
	public $mvp;
	public $damage;


	/**
	 * Class Constructor
	 * @param    $lastIP   
	 * @param    $score   
	 * @param    $kills   
	 * @param    $deaths   
	 * @param    $assists   
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
	 * @param    $revolver   
	 * @param    $nova   
	 * @param    $xm1014   
	 * @param    $mag7   
	 * @param    $sawedoff   
	 * @param    $bizon   
	 * @param    $mac10   
	 * @param    $mp9   
	 * @param    $mp7
	 * @param 	 $ump45   
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
	 * @param    $smokegrenade   
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
	 * @param 	 $damage
	 */
	 public function __construct($steamID, $dbh) {
    //Make DB Call
	    $result = $stmt = "SELECT * FROM rankme WHERE steam = :steamID";
	    $query = $dbh->prepare($stmt);
	    $query->bindValue(":steamID", $steamID);
	    $query->execute();
	    $item = $query->fetch(PDO::FETCH_ASSOC);
	    
	    $this->lastIP = $item['lastip'];
		$this->score = $item['score'];
		$this->kills = $item['kills'];
		$this->deaths = $item['deaths'];
		$this->assists = $item['assists'];
		$this->suicides = $item['suicides'];
		$this->tk = $item['tk'];
		$this->shots = $item['shots'];
		$this->hits = $item['hits'];
		$this->headshots = $item['headshots'];
		$this->connected = $item['connected'];
		$this->rounds_tr = $item['rounds_tr'];
		$this->rounds_ct = $item['rounds_ct'];
		$this->lastconnect = $item['lastconnect'];
		$this->knife = $item['knife'];
		$this->glock = $item['glock'];
		$this->hkp2000 = $item['hkp2000'];
		$this->usp_silencer = $item['usp_silencer'];
		$this->p250 = $item['p250'];
		$this->deagle = $item['deagle'];
		$this->elite = $item['elite'];
		$this->fiveseven = $item['fiveseven'];
		$this->tec9 = $item['tec9'];
		$this->cz75a = $item['cz75a'];
		$this->revolver = $item['revolver'];
		$this->nova = $item['nova'];
		$this->xm1014 = $item['xm1014'];
		$this->mag7 = $item['mag7'];
		$this->sawedoff = $item['sawedoff'];
		$this->bizon = $item['bizon'];
		$this->mac10 = $item['mac10'];
		$this->mp9 = $item['mp9'];
		$this->mp7 = $item['mp7'];
		$this->ump45 = $item['ump45'];
		$this->p90 = $item['p90'];
		$this->galilar = $item['galilar'];
		$this->ak47 = $item['ak47'];
		$this->scar20 = $item['scar20'];
		$this->famas = $item['famas'];
		$this->m4a1 = $item['m4a1'];
		$this->m4a1_silencer = $item['m4a1_silencer'];
		$this->aug = $item['aug'];
		$this->ssg08 = $item['ssg08'];
		$this->sg556 = $item['sg556'];
		$this->awp = $item['awp'];
		$this->g3sg1 = $item['g3sg1'];
		$this->m249 = $item['m249'];
		$this->negev = $item['negev'];
		$this->hegrenade = $item['hegrenade'];
		$this->flashbang = $item['flashbang'];
		$this->smokegrenade = $item['smokegrenade'];
		$this->inferno = $item['inferno'];
		$this->decoy = $item['decoy'];
		$this->taser = $item['taser'];
		$this->head = $item['head'];
		$this->chest = $item['chest'];
		$this->stomach = $item['stomach'];
		$this->left_arm = $item['left_arm'];
		$this->right_arm = $item['right_arm'];
		$this->left_leg = $item['left_leg'];
		$this->right_leg = $item['right_leg'];
		$this->c4_planted = $item['c4_planted'];
		$this->c4_exploded = $item['c4_exploded'];
		$this->c4_defused = $item['c4_defused'];
		$this->ct_win = $item['ct_win'];
		$this->tr_win = $item['tr_win'];
		$this->hostages_rescued = $item['hostages_rescued'];
		$this->vip_killed = $item['vip_killed'];
		$this->vip_escaped = $item['vip_escaped'];
		$this->vip_played = $item['vip_played'];
		$this->mvp = $item['mvp'];
		$this->damage = $item['damage'];
	}

	public function get($name) {
    	return $this->$name;
	}

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

<?php
class Player {
	public $steam;
	public $name;
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
	 * @param 	 $steam
	 * @param    $name
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
	    
	    $this->steam = $item['steam'];
	    $this->name = $item['name'];
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
?>
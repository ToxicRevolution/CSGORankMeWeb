<?php

namespace App\Http\Controllers\Tracker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use SteamID;
use App\RankMe;
use App\VacLink;
use Config;

class VacStatus extends Controller
{
    private $SteamAPIKey;

    public function __construct()
    {
        $this->SteamAPIKey = config("rankme.steam_key");
    }

    public function HandlePlayerBans()
    {
        foreach(Config::get("database.connections") as $key => $value){
            if($key != "mysql"){
                $data = new RankMe;
                $data->setConnection($key);
                $query = $data->orderBy("score", "desc")->take(Config::get("rankme.vac.count"))->get();
                foreach($query as $k => $i){
                    $SteamID = new SteamID($i['steam']);
                    $URL = "https://api.steampowered.com/ISteamUser/GetPlayerBans/v1/?key={$this->SteamAPIKey}&format=json&steamids={$SteamID->ConvertToUInt64()}";
                    $client = new Client();                 
                    $res = $client->request("GET", $URL)->getBody()->getContents();
                    $data = json_decode($res, true);
                    if($data['players'][0]['VACBanned'] || $data['players'][0]['CommunityBanned']){
                        if(Config::get("rankme.vac.autodelete")){
                            $del = new RankMe();
                            $del->setConnection($key);
                            $del->where("steam", $i['steam'])->delete();
                        }
                        if(!Config::get("rankme.vac.autodelete")){
                            $link = new VacLink();
                            $link->rankme_id = $i['steam'];
                            $link->save();
                        }
                    }
                }
            }
        }
    }
}
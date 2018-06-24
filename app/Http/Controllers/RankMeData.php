<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RankMe;

class RankMeData extends Controller
{
    public function getPaginated($_con="rankme", Request $request)
    {
        if($request->query("sort") && $request->query("sort") == "asc" || $request->query("sort") == "desc"){
            $query = new RankMe;
            $query->setConnection($_con);
            $data = $query->orderBy("score", $request->query("sort"))->paginate(15);
            $data->appends(["sort" => $request->query("sort")]);
            return response()->json($data);
        }
        return response()->json(["error" => "You must include a sort parameter of either 'asc' or 'desc' value!"]);
    }

    public function getProfile($_id=null, $_con="rankme")
    {
        $query = new RankMe;
        $query->setConnection($_con);
        $data = $query->where("steam", $_id)->firstOrFail();
        return response()->json(["data" => [$data]]);        
    }

    public function getTopPlayers($_count, $_con="rankme")
    {
        $query = new RankMe;
        $query->setConnection($_con);
        $data = $query->orderBy("score", "desc")->take($_count)->get();
        return response()->json($data);
    }

    public function panelStats($_con="rankme")
    {
        $query = new RankMe;
        $query->setConnection($_con);
        $data = $query->count();
        return response()->json(["data" => ["playercount" => $data]]);
    }
}

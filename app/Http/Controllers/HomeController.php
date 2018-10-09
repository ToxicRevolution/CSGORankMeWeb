<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\RankMe;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Getting Database Conntections
        $dbcons = config("database.connections");
        $valid_dbs = [];
        // Used to return only the index from the database connections
        foreach ($dbcons as $inx => $val){
            if($inx != "mysql"){
                array_push($valid_dbs, $inx);
            }
        }
        $playerCounts = [];
        foreach($valid_dbs as $db){
            $c = RankMe::on($db)->count();
            $playerCounts[$db] = $c;
        }
        return view('home')->with("data", [
            'userCount' => User::count(),
            'databases' => $valid_dbs,
            'playerCounts' => $playerCounts
        ]);
    }
}

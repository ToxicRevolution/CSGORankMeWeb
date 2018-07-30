<?php

namespace App\Http\Controllers;
use DB;
class SettingsList extends Controller
{
    // Returns configuration settings as well as the names of your database connections to be used in the routing of the UI
   public function __invoke(){
       $dbcons = config("database.connections");
       $valid_dbs = [];
       // Used to return only the index from the database connections
       foreach ($dbcons as $inx => $val){
           if($inx != "mysql"){
               array_push($valid_dbs, $inx);
           }
       }
       $social = DB::connection('mysql')->table('social_links')->where("enabled", 1)->get();
       $data = [
           "title" => config("app.name"),
           "urls" => $social,
           "paths" => $valid_dbs,
       ];
       return response()->json($data);
   }
}
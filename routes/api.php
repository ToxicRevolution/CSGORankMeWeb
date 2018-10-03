<?php
// Authentication Routes
Route::group(["prefix"=>"auth"], function(){
    Route::post("/login", "AuthController@login");
    Route::post("/logout", "AuthController@logout");
    Route::post("/refresh", "AuthController@refresh");
    Route::post("/me", "AuthController@me");
    
});

// basic statistics about your players
Route::get("/panelstats/{con?}", "RankMeData@panelStats");
// Routing for parameterized paginated database responses
Route::get("/all/{con?}", "RankMeData@getPaginated");
// Get player profiles
Route::get("/player/{id}/{con?}", "RankMeData@getProfile");
// Get top X players
Route::get("/top/{count}/{con?}", "RankMeData@getTopPlayers");
// Delete a VAC'd Player
Route::post("/vac/add", "Tracker\Manage@delete")->middleware("auth:api");
// Board Configuration
Route::get("/settings", "SettingsList");
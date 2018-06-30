<?php
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


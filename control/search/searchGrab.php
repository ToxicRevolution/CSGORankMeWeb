<?php

require_once("../queryFunctions.php");
require_once("../../config.php");
$steamID = $_POST['steamID'];
echo getKills($steamID, $dbh);


?>
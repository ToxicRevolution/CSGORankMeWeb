<?php
//echo $_POST['facebook'] . " " . $_POST['twitter'] . " " . $_POST['twitch'] . " " . $_POST['steamGroup'];
$fileMain = fopen("../../views/social.php", "w");
$fixedTop = "<div id='fixedsocial'>\n";
$fixedBottom = "</div>";
fwrite($fileMain, $fixedTop);
if($_POST['facebook'] != ""){
	$facebookWrite = "<a href='{$_POST['facebook']}'><div class='facebookflat'><i class='fa fa-facebook fa-3x' aria-hidden='true' style='color:white;'></i></div>\n";
	fwrite($fileMain, $facebookWrite);
}

if($_POST['twitter'] != ""){
	$twitterWrite = "<a href='{$_POST['twitter']}'><div class='twitterflat'><i class='fa fa-twitter fa-3x' aria-hidden='true' style='color:white;'></i></div>\n";
	fwrite($fileMain, $twitterWrite);
}
if($_POST['twitch'] != ""){
	$twitchWrite = "<a href='{$_POST['twitch']}'><div class='twitchflat'><i class='fa fa-twitch fa-3x' aria-hidden='true' style='color:white;'></i></div>\n";
	fwrite($fileMain, $twitchWrite);
}
if($_POST['steamGroup'] != ""){
	$steamWrite = "<a href='{$_POST['steamGroup']}'><div class='steamflat'><i class='fa fa-steam fa-3x' aria-hidden='true' style='color:white;'></i></div>\n";
	fwrite($fileMain, $steamWrite);
}

fwrite($fileMain, $fixedBottom);
fclose($fileMain);
header("location:../../admin.php");
?>
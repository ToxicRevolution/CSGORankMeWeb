$(document).ready(function() {
	$.ajax({
		type: 'post',
		url: 'control/leaderboard/leaderboardGrab.php',
		data: 'null=null',
	}).done(function(d){
		$('#loadArea').html(d);
		$('#LeaderBoardTable').DataTable();
	});

});
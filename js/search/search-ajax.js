function getSearch(steamID){
	$.ajax({
		type: 'post',
		url: 'control/search/searchGrab.php',
		data: 'steamID=' +steamID,
	}).done(function(d){
		$('.display-search').html(d);
			$('#searchTable').DataTable();
	});

}

$(document).on('click', '#searchBtn', function(){
	steamID = document.getElementById('steamID').value;
	getSearch(steamID);
});
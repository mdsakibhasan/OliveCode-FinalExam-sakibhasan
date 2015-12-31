
$('a').click(function(){
	var page= $(this).attr('href');
	$('html').load(page).fadeIn(5000);
	return false;
});
$('#btn').click(function(){
	location.reload();
});
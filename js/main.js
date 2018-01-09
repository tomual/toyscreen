$('.screen').click(function () {
	console.log();
	var url = $(this).attr('src');
	var img = '<img src="' + url + '">';
	$('.display').html(img);
	openGallery();
});

$('.dim').click(function () {
	closeGallery();
});

$('.display').click(function () {
	closeGallery();
});

function openGallery() {
	$('.display').fadeIn('fast');
	$('.dim').fadeIn('fast');
}

function closeGallery() {
	$('.display').fadeOut('fast');
	$('.dim').fadeOut('fast');
}
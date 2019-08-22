$(function() {
	$('.btn-sub').click(function() {
		let bio = $('.perfil').val();
		$('#bio').html(bio);
	});
});
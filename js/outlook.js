$(document).ready(() => {

	$('.userPanel').click(() => {
		$('.logIn').toggle(
			400,
			() => {
				$('.logIn').animate({
				'opacity': 1
				}, 400);
			}
		);

}).stop();
});
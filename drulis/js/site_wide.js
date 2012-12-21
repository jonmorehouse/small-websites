var animation_time = 1200;

$(document).ready(function() {

	var exit = $('#exit'),
		content = $('#content div');

	$('#title').animate({"top": "0px"},1000);

	$('#tiles > div').click(function() {

		var id = $(this).attr('data-id');
			

		var current = $('#content div[data-id="' + id + '"]');

		current.animate({"left": 0}, 1000);
		current.fadeIn(animation_time);
		current.children().fadeIn(animation_time);
		exit.fadeIn(animation_time);

	});

	exit.click(function() {	

		exit.fadeOut(animation_time);
		content.animate({"left": "-100%"},1000);

	});


});
$(document).ready(function() {

	var gallery = new base_gallery($('#slideshow'));

	$('#controller ul li div').click(function() {

		var id = $(this).attr("data-id");

		gallery.go_to(id);

	});

	var bumpbox_controllers = {

		1 : new base_bumpbox($('#images div[data-id="1"]'), $('#image_content div[data-id="1"]')),
		2 : new base_bumpbox($('#images div[data-id="2"]'), $('#image_content div[data-id="2"]')),
		3 : new base_bumpbox($('#images div[data-id="3"]'), $('#image_content div[data-id="3"]'))

	};

	// initialize all bumpbox controllers with the proper fade in / fadeouts!

});
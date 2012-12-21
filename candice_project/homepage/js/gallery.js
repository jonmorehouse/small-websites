/*
	Future functionality 
		1.) different types of animations -- ie: left / right etc -- can be configured through the config object
		2.) Ability to extend this to allow for controls / go to elements etc
		3.) A more efficient image loading system -- doesn't really exist right now
*/
var base_gallery = function (images, container, template) {

	var config = {

		"playing" : true,
		"interval" : 4000,
		"animation_speed": 1000,
		"total_images" : 0,
		"counter" : 1,
		"container": images,
		"current": images.children().first(),//container's first child
	};


	var init = (function() {

		config.container.find("img").each(function() {

			config.total_images += 1;
		});

		setTimeout(function() {start();}, config.interval);

	}());

	function start() {//this is a recursively running function that controls itself as the animation plays!

		config.counter = (config.counter < config.total_images) ? (config.counter + 1) : (config.counter = 1);

		if (config.counter == 5) config.counter = 1;

		var next = config.container.children("[data-id=" + config.counter + "]");//this will take care of if we are on the last element or not

		config.current.fadeOut(config.animation_speed, function() {next.fadeIn(config.animation_speed);});

		// 
		config.current = next;//reset the initial element

		if (config.playing) return setTimeout(function() {

			start();
		}, config.interval);

		return false;

	}

	return {

		config: config

	};
};
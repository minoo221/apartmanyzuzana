$(function() {
	var topSlider = new Swiper('.header .swiper-container', {
		loop: true,
		effect: "fade",
		autoplay: {
			delay: 4000,
		},
	});

	var toggleMenu = $("#toggle-menu");
	toggleMenu.on("click", function (e) {
		$(this).find(".menu-icon").toggleClass("active");
		$("body").toggleClass("menu-showed");
	});

	var reviewsSlider = new Swiper('.reviews .swiper-container', {
		loop: true,
		autoHeight: true,
		pagination: {
			el: '.reviews .swiper-pagination',
			clickable: true,
		},
	});

		var locations = [
			['Apartmány Zuzana', 49.033420, 19.561015, 2],
			['Chata pod Pálenicou', 49.027630, 19.570603, 1],
		];

		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 12,
			center: new google.maps.LatLng(49.033420, 19.561015),
			mapTypeId: google.maps.MapTypeId.ROADMAP
		});

		var infowindow = new google.maps.InfoWindow();

		var marker, i;

		for (i = 0; i < locations.length; i++) {
			marker = new google.maps.Marker({
				position: new google.maps.LatLng(locations[i][1], locations[i][2]),
				map: map
			});

			google.maps.event.addListener(marker, 'click', (function(marker, i) {
				return function() {
					infowindow.setContent(locations[i][0]);
					infowindow.open(map, marker);
				}
			})(marker, i));
		}

});
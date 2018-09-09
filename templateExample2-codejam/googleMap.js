/*-----Google Map-----*/
function initMap() {	
	var trottier = new google.maps.LatLng(45.507401,-73.579024);
	var mapCanvas = document.getElementById("googleMap")
	var mapOptions = {
		center: trottier,
		zoom: 16,
		mapTypeControl: true,
		zoomControl: true,
		streetViewControl: false,
		mapTypeId: google.maps.MapTypeId.ROADMAP		
	};	
	
	var map = new google.maps.Map(mapCanvas, mapOptions);
	
	var marker = new google.maps.Marker({
		position: trottier,
		map: map,
		animation: google.maps.Animation.BOUNCE
	});
	
	var infowindow = new google.maps.InfoWindow({
		content: "Trottier Building"
	});
	
	// Zoom to 16 and open info-window when clicking on marker
	google.maps.event.addListener(marker, "click", function() {
		map.setZoom(16);
		map.setCenter(marker.getPosition());
		infowindow.open(map, marker);
	});
	
	// 5 seconds after the center of the map has changed, pan back to the marker
	google.maps.event.addListener(map, "center_changed", function() {		
		window.setTimeout(function() {
			map.panTo(marker.getPosition());
		},5000);
	});
	
	
}
/*
$(document).ready(function() {
	initialize_map();
	google.maps.event.addDomListener(window, 'load', initialize_map);
});
*/
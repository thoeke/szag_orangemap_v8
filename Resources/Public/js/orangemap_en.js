var map = new L.Map('orangemap', {
    zoom: 2,
    zoomsliderControl: true,
    maxBounds: [
      [-85.0, -180.0],
      [85.0, 180.0]
    ],
    center: new L.latLng([30.575330,7.102411])
});

var markers = L.markerClusterGroup();
/*
 map.scrollWheelZoom.disable()
    map.dragging.disable()
    map.touchZoom.disable()
    map.doubleClickZoom.disable()
    map.boxZoom.disable()
    map.keyboard.disable()
    if (map.tap) {
        map.tap.disable()
    }
*/
//if (map.tap) map.tap.disable();
var szagmarker = L.icon({
  iconUrl: 'typo3conf/ext/szag_orangemap/pi1//img/marker-icon.png',
  iconSize:     [20, 32], // size of the icon
  // shadowSize:   [50, 64], // size of the shadow
 	iconAnchor:   [10, 32], // point of the icon which will correspond to marker's location
  popupAnchor:  [0, -35] // point from which the popup should open relative to the iconAnchor
});

//map.addLayer(new L.tileLayer.grayscale('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'));
//map.addLayer(new L.tileLayer('http://openmapsurfer.uni-hd.de/tiles/roadsg/x={x}&y={y}&z={z}'));
//map.addLayer(new L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'));
//accessToken = 'pk.eyJ1Ijoic2FsemdpdHRlcmFnIiwiYSI6ImNpZW5jeTR1czAwNHp0Nm0wZTg3NWh1NmEifQ.4q4fmFH1DaqGlMBgxnTfwg#3/-0.09/0.00';
//accessToken = 'pk.eyJ1Ijoic2FsemdpdHRlcmFnIiwiYSI6ImNpZW5jeTR1czAwNHp0Nm0wZTg3NWh1NmEifQ.4q4fmFH1DaqGlMBgxnTfwg';

map.addLayer(
  new L.tileLayer('https://api.mapbox.com/styles/v1/salzgitterag/cis7kykkj0041hhmd1yojhatu/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1Ijoic2FsemdpdHRlcmFnIiwiYSI6ImNpZW5jeTR1czAwNHp0Nm0wZTg3NWh1NmEifQ.4q4fmFH1DaqGlMBgxnTfwg', {
    attribution: '&copy; <a href="https://www.mapbox.com/map-feedback/">Mapbox</a> &copy;  <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
  })
);

/*
L.mapbox.accessToken = 'pk.eyJ1Ijoic2FsemdpdHRlcmFnIiwiYSI6ImNpZW5jeTR1czAwNHp0Nm0wZTg3NWh1NmEifQ.4q4fmFH1DaqGlMBgxnTfwg';
// Replace 'mapbox.streets' with your map id.
var mapboxTiles = L.tileLayer('https://api.mapbox.com/v4/salzgitterag.nf9gnoak/{z}/{x}/{y}.png?access_token=' + L.mapbox.accessToken, {
    attribution: '<a href="http://www.mapbox.com/about/maps/" target="_blank">Terms &amp; Feedback</a>'
});
*/

$( document ).ready(function() {

	updateOM();

});

function setMapZoom(zoomLvl){
	map.setZoom(zoomLvl);
}

function updateOM() {

	updateMarkers();
 	updateFilters();

	function updateMarkers() {

		nations = $('#om-nations').val();
		cities = $('#om-cities').val();
		businessunits = $('#om-businessunits').val();
		companies = $('#om-companies').val();

		$.ajax({
			method: "POST",
			url: "typo3conf/ext/szag_orangemap/pi1/build/markers.php",
			data: { language: 2, snations: nations, scities: cities, sbusinessunits: businessunits, scompanies: companies },
			//method: "GET",
			//url: "typo3conf/ext/szag_orangemap/pi1/build/markers.php",
			//dataType: "script"
		})
		.done(function( html ) {

			markers.clearLayers();

			for (var i = 0; i < addressPoints.length; i++) {

				var a = addressPoints[i];
        var alt = a[2];
				var marker = L.marker(new L.LatLng(a[0], a[1]), { icon: szagmarker, alt: alt });
				marker.bindPopup(alt);
				markers.addLayer(marker);
			}

			map.addLayer(markers);
			map.fitBounds(markers.getBounds());
			
			//set zoom level
			if(addressPoints.length <= 1) {
				if(nations != "" || cities != "" || businessunits != "" || companies != "") {
					setMapZoom(10);
				} else {
					setMapZoom(2);
				}
			}

		 });

	}

	function updateFilters() {

		nations = $('#om-nations').val();
		cities = $('#om-cities').val();
		businessunits = $('#om-businessunits').val();
		companies = $('#om-companies').val();

		$.ajax({
			method: "POST",
			url: "typo3conf/ext/szag_orangemap/pi1/build/cities.php",
			data: { language: 2, snations: nations, scities: cities, sbusinessunits: businessunits, scompanies: companies }
		})
		.done(function( html ) {
			$('#om-cities').empty();
			$('#om-cities').append( html );
			$("#om-cities").trigger("chosen:updated");
		});

		$.ajax({
			method: "POST",
			url: "typo3conf/ext/szag_orangemap/pi1/build/nations.php",
			data: { language: 2, snations: nations, scities: cities, sbusinessunits: businessunits, scompanies: companies }
		})
		.done(function( html ) {
			$('#om-nations').empty();
			$('#om-nations').append( html );
			$("#om-nations").trigger("chosen:updated");
		});

		$.ajax({
			method: "POST",
			url: "typo3conf/ext/szag_orangemap/pi1/build/businessunits.php",
			data: { language: 2, snations: nations, scities: cities, sbusinessunits: businessunits, scompanies: companies }
		})
		.done(function( html ) {
			$('#om-businessunits').empty();
			$('#om-businessunits').append( html );
			$("#om-businessunits").trigger("chosen:updated");
		});

		$.ajax({
			method: "POST",
			url: "typo3conf/ext/szag_orangemap/pi1/build/companies.php",
			data: { language: 2, snations: nations, scities: cities, sbusinessunits: businessunits, scompanies: companies }
		})
		.done(function( html ) {
			$('#om-companies').empty();
			$('#om-companies').append( html );
			$("#om-companies").trigger("chosen:updated");
		});


	}
}

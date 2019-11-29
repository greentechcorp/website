<h2>Maps</h2>

<head>
	<style>
		/* Set the size of the div element that contains the map */
		#map {
			height: 400px;
			width: 100%;
		}
	</style>
</head>

<body>
	<!--The div element for the map -->
	<div id="map"></div>
	<script>
		// Initialize and add the map
		function initMap() {

			var AT = {lat: 55.9444, lng: -3.1870};

			var map = new google.maps.Map(
					document.getElementById('map'), {zoom: 16, center: AT});

			var marker = new google.maps.Marker({position: AT, map: map});
		}
	</script>
	<!--Load the API from the specified URL
	* The async attribute allows the browser to render the page while the API loads
	* The key parameter will contain your own API key (which is not needed for this tutorial)
	* The callback parameter executes the initMap() function
	-->
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArLQlqxDaDLUqsu7KnMhl0Ud1FNIA9-zo&callback=initMap"></script>

</body>
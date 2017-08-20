<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>
			My Map
		</title>
		<!-- Leaflet -->
		<link rel="stylesheet" href="lib/leaflet/leaflet.css" />
		<link rel="stylesheet" href="lib/leaflet/leaflet.label.css" />
		<script src="lib/leaflet/leaflet.js"></script>
		<script src="lib/leaflet/leaflet.label.js"></script>
		<script src="http://maps.google.com/maps/api/js?v=3&sensor=false"></script>
		<script src="lib/leaflet/Google.js"></script>
		<script src="data/cityzones.geojson"></script>
		<style type="text/css">
			#map { height : 400px; }
			.legend { background : white; line-height : 1.5em}
			.legend i { width : 5em; float : left }
			.map-label { background : yellow }
		</style>
	</head>
	<body>
		<h1>My Map</h1>
		<div id="map"></div>
		<script>
			var zones;					
			function countriesStyle(feature){
				return {
					fillColor : '#800026',
					weight : 2,
					opacity : 1,
					color : 'white',
					dashArray : 3,
					fillOpacity : 0.7
				}
			}
			
			var map = L.map('map').setView([33.59,73.05], 10);			
			var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
			var osmAttrib='Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors';
			var osm = new L.TileLayer(osmUrl, {minZoom: 8, maxZoom: 12, attribution: osmAttrib});
			map.addLayer(osm);
			zones = L.geoJson(
				cityzones,
				{
					style : countriesStyle
				}
			).addTo(map);
			map.fitBounds(countriesLayer.getBounds());
			var basemap = {
					'osm' : osm
			};
			var overlaylayer = {
					'zones' : zones 
			};
			L.control.layers(basemap,overlaylayer).addTo(map);
			
		</script>
	</body>
</html>

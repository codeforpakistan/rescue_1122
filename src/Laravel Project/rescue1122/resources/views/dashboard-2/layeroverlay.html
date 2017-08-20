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
		<script src="lib/leaflet/WFS.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
		<style type="text/css">
			#map { height : 400px; }
			.legend { background : white; line-height : 1.5em}
			.legend i { width : 5em; float : left }
			
		</style>
	</head>
	<body>
		<h1>My Map</h1>
		<div id="map"></div>
		<script>
			var WFSLayer;
			var WFSLayer_1;
			function highlightFeature(e){
				var layer = e.target;
				layer.setStyle(
				   {
					weight:5,
					color: 'red',
					fillColor:'white',
					fillOpacity:0.2
					}
				);
			}
			function resetHighlight(e){
				WFSLayer.resetStyle(e);
			}
			function zoomToFeature(e){
				map.fitBounds(e.target.getBounds());
			}
			var geojsonMarkerOptions = {
					radius: 8,
					fillColor: "#ff7800",
					color: "#000",
					weight: 1,
					opacity: 1,
					fillOpacity: 0.8
			};
			var map = L.map('map').setView([33.56,72.96], 10);
			var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
			var osmAttrib='Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors';
			var osm = new L.TileLayer(osmUrl, {minZoom: 8, maxZoom: 12, attribution: osmAttrib});
			map.addLayer(osm);
			zoneslayer = L.geoJson(
				features,
				{
					style : countriesStyle
				}
			).addTo(map);
			map.fitBounds(countriesLayer.getBounds());
				var geoJsonUrl = "http://localhost:8080/geoserver/wfs?version=1.1.0&request=GetFeature&typename=rescue1122:hospital&outputFormat=application/json&srsname=EPSG:4326&"
				$.ajax({
				 url : geoJsonUrl,
				success : function (response) {
				WFSLayer_1 = L.geoJson(response, {
				pointToLayer: function (feature, latlng) {
				return L.circleMarker(latlng, geojsonMarkerOptions);
				}
				}).addTo(map);
				}
				});
			var basemap = {
					'osm' : osm
			};
			var overlaylayer = {
					'Zones' : WFSLayer,
					'Hospital' : WFSLayer_1
			};
			var control_layer = L.control.layers(basemap,overlaylayer);
			control_layer.addTo(map);
			

			
			
		</script>
		
	</body>
</html>
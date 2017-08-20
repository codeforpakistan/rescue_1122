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
			
			var map = L.map.document.getElementById('map', {
			center: [33.56,72.96],
			zoom: 13,
			layers: [
			new L.TileLayer(
            'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            {
                attribution: 'Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
            }
			)
			]
			});
			function getColor(d) {
				return d > 90 ?  '#800026' :
					   d > 75 ?  '#BD0026' :
					   d > 60 ?  '#E31A1C' :
				       d > 45 ?  '#FC4E2A' :
				       d > 30 ?  '#FD8D3C' :
				       d > 15 ?  '#FEB24C' :
				       d > 0  ?  '#FED976' :
								 '#FFEDA0';
			}
			function style(feature) {
			return {
				fillColor: getColor(feature.properties.caller_count),
				weight: 1,
				opacity: 1,
				color: 'white',
				fillOpacity: 1
				};
			}
			var geoJsonUrl = "http://localhost:8080/geoserver/wfs?version=1.1.0&request=GetFeature&typename=rescue1122:Callercountperpolygonatnoon&outputFormat=application/json&srsname=EPSG:4326&"
				$.ajax({
				 url : geoJsonUrl,
				success : function (response) {
				WFSLayer = L.geoJson(response, {
				style: function (feature) {
                return {
				fillColor: getColor(feature.properties.caller_count),
				weight: 1,
				opacity: 1,
				color: 'white',
				fillOpacity: 1
				};
            },
            onEachFeature: function (feature, layer) {
                popupOptions = {maxWidth: 200};
                layer.bindPopup(feature.properties.name_1 + 
				"\n  Count: " + feature.properties.caller_count
                    ,popupOptions);
            }
        }).addTo(map);
    }
				});
			var legend = L.control({position: 'bottomright'});
			legend.onAdd = function(map){
				var div = L.DomUtil.create('div','legend');
				div.innerHTML = '<div><b>Legend</b></div>';
				div.innerHTML = '<div><b>Caller Count</b></div>';
				div.innerHTML += '<i style="background:' + getColor(1)  + '">&nbsp;&nbsp;</i>&nbsp;&nbsp;' 	+ "Count greater than 0" + '<br />';
				div.innerHTML += '<i style="background:' + getColor(16) + '">&nbsp;&nbsp;</i>&nbsp;&nbsp;'	+ "Count greater than 15" + '<br />';
				div.innerHTML += '<i style="background:' + getColor(31) + '">&nbsp;&nbsp;</i>&nbsp;&nbsp;'	+ "Count greater than 30" + '<br />';
				div.innerHTML += '<i style="background:' + getColor(46) + '">&nbsp;&nbsp;</i>&nbsp;&nbsp;'	+ "Count greater than 45" + '<br />';
				div.innerHTML += '<i style="background:' + getColor(61) + '">&nbsp;&nbsp;</i>&nbsp;&nbsp;'	+ "Count greater than 60" + '<br />';
				div.innerHTML += '<i style="background:' + getColor(76) + '">&nbsp;&nbsp;</i>&nbsp;&nbsp;'	+ "Count greater than 75" + '<br />';
				div.innerHTML += '<i style="background:' + getColor(91) + '">&nbsp;&nbsp;</i>&nbsp;&nbsp;'	+ "Count greater than 90" + '<br />';
				return div;

			}
			legend.addTo(map);
		</script>
		
	</body>
</html>
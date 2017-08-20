<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Hospital | RESCUE 1122</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link rel="stylesheet" href="lib/leaflet/leaflet.css" />
		<link rel="stylesheet" href="lib/leaflet/leaflet.label.css" />
		<script src="lib/leaflet/leaflet.js"></script>
		<script src="lib/leaflet/leaflet.label.js"></script>
		<script src="lib/leaflet/WFS.js"></script>
		<style type="text/css">
		#map { height : 400px; }
			.legend { background : white; line-height : 1.5em}
			.legend i { width : 5em; float : left }
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>
  <body>

  <!-- container section start -->
  
    <section id="container" class="">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="image_1"><img src="img/logo.png" style="width: 50px;height: 50px;"></a>
            <a href="index.html" class="logo"><span class="lite"> Efficient Rescue Administration using Spatial Decision Support System</span></a>
			
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
      </header>     
      <!--header end-->

      <!--sidebar start-->
    <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="index.html">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Caller</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="general.html">Caller count</a></li>
						  <li><a class="" href="generalmorning.html">Morning</a></li>
						  <li><a class="" href="generalevening.html">Evening</a></li>
						  <li><a class="" href="generalnoon.html">Noon</a></li>
						  <li><a class="" href="generalnight.html">Night</a></li>
						  <li><a class="" href="monday.html">Monday</a></li>
						  <li><a class="" href="tuesday.html">Tuesday</a></li>
						  <li><a class="" href="wednesday.html">Wednesday</a></li>
						  <li><a class="" href="thursday.html">Thursday</a></li>
						  <li><a class="" href="friday.html">Friday</a></li>
						  <li><a class="" href="saturday.html">Saturday</a></li>
						  <li><a class="" href="sunday.html">Sunday</a></li>
                      </ul>
                  </li>       
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Patient</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="patient_count.html">Patient Count</a></li>
						  <li><a class="" href="shifted.html">Shifted</a></li>
						  <li><a class="" href="expired.html">Expired</a></li>
						  <li><a class="" href="firstaid.html">First aid</a></li>
						  
						  
                      </ul>
                  </li>
				   <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Nature of emergency</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="RTA.html">RTA</a></li>
						  <li><a class="" href="medical.html">Medical</a></li>
						  <li><a class="" href="crime.html">Crime</a></li>					  
						  
                      </ul>
                  </li>
                  <!-- <li>                     
                      <a class="" href="chart-chartjs.html">
                          <i class="icon_piechart"></i>
                          <span>Charts</span>
                          
                      </a>
                                         
                  </li> -->
                     <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Tracks</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="layer1.html">July</a></li>
						  <li><a class="" href="layer2.html">August</a></li>
						  <li><a class="" href="layer4.html">September</a></li>	  
						  
                      </ul>
                  </li>				  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
     <section id="main-content">
          <section class="wrapper">
		  <!--Map Start-->
<label for="Patientcount"><strong>Analysis Maps</strong></label>
<!--from here copy-->
 <div class="panel panel-default">
							<div class="panel-heading"><h4><b> Shifted Patients (July 2016 to September 2016) </b></h4></div>
                            <div class="panel-body">
							<div id="map" class="map" style="height:400px;"></div>	
							<body>
   
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
			
			var map = L.map('map', {
			center: [33.59,73.05],
			zoom: 11,
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
				return d > 216 ?  '#800026' :
					   d > 180 ?  '#BD0026' :
					   d > 144 ?  '#E31A1C' :
				       d > 108 ?  '#FC4E2A' :
				       d > 72 ?  '#FD8D3C' :
				       d > 36 ?  '#FEB24C' :
				       d > 0  ?  '#FED976' :
								 '#FFEDA0';
			}
			function style(feature) {
			return {
				fillColor: getColor(feature.properties.count),
				weight: 1,
				opacity: 1,
				color: 'white',
				fillOpacity: 1
				};
			}
			var geoJsonUrl = "http://localhost:8080/geoserver/wfs?version=1.1.0&request=GetFeature&typename=rescue1122:Shitedpatientsperpolygon&outputFormat=application/json&srsname=EPSG:4326&"
				$.ajax({
				 url : geoJsonUrl,
				success : function (response) {
				WFSLayer = L.geoJson(response, {
				style: function (feature) {
                return {
				fillColor: getColor(feature.properties.count),
				weight: 1,
				opacity: 1,
				color: '#808080',
				fillOpacity: 1
				};
            },
            onEachFeature: function (feature, layer) {
                popupOptions = {maxWidth: 200};
                layer.bindPopup(feature.properties.names_1 + 
				"\n  Count: " + feature.properties.count
                    ,popupOptions);
            }
        }).addTo(map);
    }
				});
			var legend = L.control({position: 'bottomright'});
			legend.onAdd = function(map){
				var div = L.DomUtil.create('div','legend');
				div.innerHTML = '<div><b>Legend</b></div>';
				div.innerHTML = '<div><b>Patient Count</b></div>';
				div.innerHTML += '<i style="background:' + getColor(1)  + '">&nbsp;&nbsp;</i>&nbsp;&nbsp;' 	+ "Count > 0" + '<br />';
				div.innerHTML += '<i style="background:' + getColor(37) + '">&nbsp;&nbsp;</i>&nbsp;&nbsp;'	+ "Count > 36" + '<br />';
				div.innerHTML += '<i style="background:' + getColor(73) + '">&nbsp;&nbsp;</i>&nbsp;&nbsp;'	+ "Count > 72" + '<br />';
				div.innerHTML += '<i style="background:' + getColor(109) + '">&nbsp;&nbsp;</i>&nbsp;&nbsp;'	+ "Count > 108" + '<br />';
				div.innerHTML += '<i style="background:' + getColor(145) + '">&nbsp;&nbsp;</i>&nbsp;&nbsp;'	+ "Count > 144" + '<br />';
				div.innerHTML += '<i style="background:' + getColor(181) + '">&nbsp;&nbsp;</i>&nbsp;&nbsp;'	+ "Count > 180" + '<br />';
				div.innerHTML += '<i style="background:' + getColor(217) + '">&nbsp;&nbsp;</i>&nbsp;&nbsp;'	+ "Count > 216" + '<br />';
				return div;

			}
			legend.addTo(map);
		</script>
  </body>

							</div>
							</div>
							<!--paste to here-->
</section>
</section>
                      <!--tab nav start-->
                    
                      <!--tab nav start-->

                      <!--tab nav start-->
                               
                                                <!--tab nav start-->
                      
                      <!--navigation start-->
                      
                          <!-- Brand and toggle get grouped for better mobile display -->
                                                   <!-- Collect the nav links, forms, and other content for toggling -->
                        
                              <!--<form class="navbar-form navbar-left" role="search">-->
                              <!--<div class="form-group">-->
                              <!--<input type="text" class="form-control" placeholder="Search">-->
                              <!--</div>-->
                              <!--<button type="submit" class="btn btn-default">Submit</button>-->
                              <!--</form>-->
                                                      <!-- /.navbar-collapse -->
                    
                      <!--navigation end-->

                      <!--tooltips start-->
                                         <!--tooltips start-->

                      <!--popover start-->
                                            <!--popover start-->

                      <!--modal start-->
                                                                          <!-- Modal -->
                             
                              <!-- modal -->
                              <!-- Modal -->
                                                        <!-- modal -->

                                               <!--modal start-->

                      <!--carousel start-->
                     
                      <!--carousel end-->

                      <!--gritter notification start--
                      <section class="panel">
                          <header class="panel-heading">
                              Hospitals
                          </header>
                          <div class="panel-body">
                              <p class="">Click on below buttons to check it out.</p>
                              <a id="add-regular" class="btn btn-danger btn-sm" href="javascript:;">HFH</a>
                              <a id="add-sticky" class="btn btn-success  btn-sm" href="javascript:;">BBH</a>
                              <a id="add-without-image" class="btn btn-info  btn-sm" href="javascript:;">MH</a>

                              <a id="add-gritter-light" class="btn btn-warning  btn-sm" href="javascript:;">CMH</a>
                              <a id="add-max" class="btn btn-primary  btn-sm" href="javascript:;">PIMS</a>
                              >
                          </div>
                      </section>
                      <!--gritter notification end-->

                 
                      <!--progress bar start-->
                     
                      <!--progress bar end-->

                      <!--collapse start-->
                      
                      <!--collapse end-->

                      <!--label and badge start-->
                   
                      <!--label and badge end-->

                     
                      <!--pagination end-->

                  </div>

              </div>
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- gritter -->
   
    <!-- custom gritter script for this page only-->
    <script src="js/gritter.js" type="text/javascript"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>

    


  </body>
</html>

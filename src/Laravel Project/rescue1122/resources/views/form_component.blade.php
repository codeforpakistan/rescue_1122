<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">
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

    <title>Caller | RESCUE 1122</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- owl carousel -->
    


     Theme URL: https://bootstrapmade.com/nice-admin-
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">

    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- date picker -->
    
    <!-- color picker -->
    
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

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
      <!--header start-->
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo">Nice <span class="lite">Admin</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    <!-- task notificatoin start -->
                    <li id="task_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-task-l"></i>
                            <span class="badge bg-important">5</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 5 pending tasks</p>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Design PSD </div>
                                        <div class="percent">90%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                            <span class="sr-only">90% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">
                                            Project 1
                                        </div>
                                        <div class="percent">30%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                            <span class="sr-only">30% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Digital Marketing</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Logo Designing</div>
                                        <div class="percent">78%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                                            <span class="sr-only">78% Complete (danger)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Mobile App</div>
                                        <div class="percent">50%</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar"  role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                            <span class="sr-only">50% Complete</span>
                                        </div>
                                    </div>

                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- task notificatoin end -->
                    <!-- inbox notificatoin start-->
                    <li id="mail_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
                            <span class="badge bg-important">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Greg  Martin</span>
                                    <span class="time">1 min</span>
                                    </span>
                                    <span class="message">
                                        I really like this admin panel.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Bob   Mckenzie</span>
                                    <span class="time">5 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, What is next project plan?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Phillip   Park</span>
                                    <span class="time">2 hrs</span>
                                    </span>
                                    <span class="message">
                                        I am like to buy this Admin Template.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Ray   Munoz</span>
                                    <span class="time">1 day</span>
                                    </span>
                                    <span class="message">
                                        Icon fonts are great.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox notificatoin end -->
                    <!-- alert notification start-->
                    <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 4 new notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span> 
                                    Friend Request
                                    <span class="small italic pull-right">5 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>  
                                    John location.
                                    <span class="small italic pull-right">50 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span> 
                                    Project 3 Completed.
                                    <span class="small italic pull-right">1 hr</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span> 
                                    Mick appreciated your work.
                                    <span class="small italic pull-right"> Today</span>
                                </a>
                            </li>                            
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username">Jenifer Smith</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
                            </li>
                            <li>
                                <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                            <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                            </li>
                            <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
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
                          <li><a class="" href="form_component.html">Analysis</a></li>                          
                      
                      </ul>
                  </li>       
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Hospitals</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="general.html">Analysis</a></li>
                      </ul>
                  </li>
                  <li>
                      <a class="" href="widgets.html">
                          <i class="icon_genius"></i>
                          <span>Statistics</span>
                      </a>
                  </li>
                  <li>                     
                      <a class="" href="chart-chartjs.html">
                          <i class="icon_piechart"></i>
                          <span>Charts</span>
                          
                      </a>
                                         
                  </li>
                             
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Trajectories</span>
                      </a>
                      
                  </li>
                  
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Archive</span>
                          
                      </a>
                      
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h2 class="page-header"><i class="fa fa-file-text-o"></i> <strong>Caller Information</strong>.</h2>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_document_alt"></i>Caller</li>
						<li><i class="fa fa-file-text-o"></i>Analysis</li>
					</ol>
				</div>
			</div>
			<!--Main-->
			<div class="row">
                  <div class="col-lg-12">
                      <!--notification start-->
                     
                       
                      
                      <!--notification end-->

                      <!--tab nav start-->
                     <div class="container">
  <h3>Daily Maps</h3>
   <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#Monday">Home</a></li>
    <li><a data-toggle="tab" href="#Tues">Tuesday</a></li>
    <li><a data-toggle="tab" href="#Wed">Wednesday</a></li>
    <li><a data-toggle="tab" href="#Thor">Thursday</a></li>
    <li><a data-toggle="tab" href="#Fri">Friday</a></li>
    <li><a data-toggle="tab" href="#Saturn">Saturday</a></li>
    <li><a data-toggle="tab" href="#Sun">Sunday</a></li>


  </ul>

  <div class="tab-content">
    <div id="Monday" class="tab-pane fade in active">
      <h3 class="bg-info"><strong>Monday</strong></h3>
      <!--MAP-->
   
                       <div class="row">
		    <div class="col-lg-9 col-md-12">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4><i class="fa fa-map-marker red"></i><strong>Countries</strong></h4>
							<div class="panel-actions">
								<a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
								<a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>	
						</div>
						<div class="panel-body-map">
						<div id="map"></div>
						<!--	<div id="map" style="height:380px;"></div>	-->
							<body>
		<!--<h1>My Map</h1>-->
		
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
				return d > 66 ?  '#800026' :
					   d > 55 ?  '#BD0026' :
					   d > 44 ?  '#E31A1C' :
				       d > 33 ?  '#FC4E2A' :
				       d > 22 ?  '#FD8D3C' :
				       d > 11 ?  '#FEB24C' :
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
			var geoJsonUrl = "http://localhost:8080/geoserver/wfs?version=1.1.0&request=GetFeature&typename=rescue1122:Callercountperpolygonatevening&outputFormat=application/json&srsname=EPSG:4326&"
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
				div.innerHTML += '<i style="background:' + getColor(11) + '">&nbsp;&nbsp;</i>&nbsp;&nbsp;'	+ "Count greater than 11" + '<br />';
				div.innerHTML += '<i style="background:' + getColor(22) + '">&nbsp;&nbsp;</i>&nbsp;&nbsp;'	+ "Count greater than 22" + '<br />';
				div.innerHTML += '<i style="background:' + getColor(33) + '">&nbsp;&nbsp;</i>&nbsp;&nbsp;'	+ "Count greater than 33" + '<br />';
				div.innerHTML += '<i style="background:' + getColor(44) + '">&nbsp;&nbsp;</i>&nbsp;&nbsp;'	+ "Count greater than 44" + '<br />';
				div.innerHTML += '<i style="background:' + getColor(55) + '">&nbsp;&nbsp;</i>&nbsp;&nbsp;'	+ "Count greater than 55" + '<br />';
				div.innerHTML += '<i style="background:' + getColor(66) + '">&nbsp;&nbsp;</i>&nbsp;&nbsp;'	+ "Count greater than 66" + '<br />';
				return div;

			}
			legend.addTo(map);
		</script>
		
	</body>
	-->
						</div>
	
					</div>
				</div> 
				</div>                       <!-- Map end -->
</div>

    <div id="Tues" class="tab-pane fade">
      <h3 class="bg-info"><strong>Tuesday</strong></h3>

      <!--MAP-->
   
                       <div class="row">
		    <div class="col-lg-9 col-md-12">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2><i class="fa fa-map-marker red"></i><strong>Countries</strong></h2>
							<div class="panel-actions">
								<a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
								<a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>	
						</div>
						<div class="panel-body-map">
						<div id="map1"></div>
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
			
			var map = L.map('map1', {
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
						</div>
					</div>
				</div> 
			</div>                       <!-- Map end -->

        </div>
    <div id="Wed" class="tab-pane fade">
      <h3 class="bg-info"><strong>Wednesday</strong></h3>     
       <!--MAP-->
   
                       <div class="row">
		    <div class="col-lg-9 col-md-12">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2><i class="fa fa-map-marker red"></i><strong>Countries</strong></h2>
							<div class="panel-actions">
								<a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
								<a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>	
						</div>
						<div class="panel-body-map">
							<div id="map" style="height:380px;"></div>	
						</div>
					</div>
				</div> 
			</div>                       <!-- Map end -->
    </div>
    <div id="Thor" class="tab-pane fade">
    <h3 class="bg-info"><strong>Thursday</strong></h3>      <p> <div class="row">
		    <div class="col-lg-9 col-md-12">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2><i class="fa fa-map-marker red"></i><strong>Countries</strong></h2>
							<div class="panel-actions">
								<a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
								<a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>	
						</div>
						<div class="panel-body-map">
							<div id="map" style="height:380px;"></div>	
						</div>
					</div>
				</div> 
			</div>                       <!-- Map end -->
</p>
    </div>
       <div id="Fri" class="tab-pane fade">
      <h3 class="bg-info"><strong>Friday</strong></h3>
      <p> <div class="row">
		    <div class="col-lg-9 col-md-12">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2><i class="fa fa-map-marker red"></i><strong>Countries</strong></h2>
							<div class="panel-actions">
								<a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
								<a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>	
						</div>
						<div class="panel-body-map">
							<div id="map" style="height:380px;"></div>	
						</div>
					</div>
				</div> 
			</div>                       <!-- Map end -->
</p>
    </div>
   <div id="Saturn" class="tab-pane fade">
       <h3 class="bg-info"><strong>Saturday</strong></h3>
      <p> <div class="row">
		    <div class="col-lg-9 col-md-12">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2><i class="fa fa-map-marker red"></i><strong>Countries</strong></h2>
							<div class="panel-actions">
								<a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
								<a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>	
						</div>
						<div class="panel-body-map">
							<div id="map" style="height:380px;"></div>	
						</div>
					</div>
				</div> 
			</div>                       <!-- Map end -->
</p>
    </div>
       <div id="Sun" class="tab-pane fade">
      <h3 class="bg-info"><strong>Sunday</strong></h3>
      <p> <div class="row">
		    <div class="col-lg-9 col-md-12">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2><i class="fa fa-map-marker red"></i><strong>Countries</strong></h2>
							<div class="panel-actions">
								<a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
								<a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>	
						</div>
						<div class="panel-body-map">
							<div id="map" style="height:380px;"></div>	
						</div>
					</div>
				</div> 
			</div>                       <!-- Map end -->
</p>
    </div>


  </div>
</div>

			<!--EnD-->
                                                                
              <!-- Bootsrep Editor -->
                         <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

    <!-- jquery ui -->
    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

    <!--custom checkbox & radio-->
    <script type="text/javascript" src="js/ga.js"></script>
    <!--custom switch-->
    <script src="js/bootstrap-switch.js"></script>
    <!--custom tagsinput-->
    <script src="js/jquery.tagsinput.js"></script>
    
    <!-- colorpicker -->
   
    <!-- bootstrap-wysiwyg -->
    <script src="js/jquery.hotkeys.js"></script>
    <script src="js/bootstrap-wysiwyg.js"></script>
    <script src="js/bootstrap-wysiwyg-custom.js"></script>
    <!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
    <!-- custom form component script for this page-->
    <script src="js/form-component.js"></script>
    <!-- custome script for all page -->
    <script src="js/scripts.js"></script>


  </body>
</html>

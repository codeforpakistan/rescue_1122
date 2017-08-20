@extends('layouts.app3')

@section('content')
<?php
        date_default_timezone_set("Etc/GMT-5");
        $dateToday = date("D-d-M-Y"); 
        $timeNow = date("h:i:sa");
?>


<?php
        date_default_timezone_set("Etc/GMT-5");
        $dateToday = date("D-d-M-Y"); 
        $timeNow = date("h:i:sa");
    ?>
    <div class="container-fluid">
        <!-- ALL DATA THROUGH HERE -->
        <div class="form-group">

            <div class="well" style="width: 350px; position: absolute; z-index: 1; margin-top: 20px;a">
                   
                    
               
                
               
                      <div class="row">
                        <div class="col-md-6">
                          Hospital 
                        </div>
                        <div class="col-md-6">
                          <select name="hospital" class="form-control">
                            @foreach($data as $v)
                              <option value="{{$v->hospital_id}}"> {{$v->hospital_name}} </option>
                            @endforeach
                          </select>
                          <input type="hidden" name="id">
                          <input type="hidden" name="name">
                        </div>
                      </div>
                
                 
                
                      <center>
                        <button type="button" class="btn btn-success"  onclick="stopActivity()">
                        Submit
                        </button>
                    </center>
                      
                    
                </div>  
            </div>
        
        </div>
    </div>

    <div id="map" class="well" style="height: 550px"></div>

   

                    <script type="text/javascript">
                        var getActivities = "{{route('getActivities')}}";
                        var token = "{{Session::token()}}";

                        
                          var map;

      // Create a new blank array for all the listing markers.
      var markers = [];

      function myMap() {
        // Constructor creates a new map - only center and zoom are required.
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 33.5384, lng: 73.0441},
          zoom: 9
        });



        // These are the real estate listings that will be shown to the user.
        // Normally we'd have these in a database instead.
       
        var start = new Date().getTime() / 1000;
        var stop = new Date().getTime() / 1000;
        var bounds = new google.maps.LatLngBounds();

            setInterval(function(){ 


                     $.post(getActivities,{_token:token},function(data){

                
                for (var i = 0; i < data.length; i++) {
                          // Get the position from the location array.
                        
                          var myLatlng = {lat: parseFloat(data[i].lat), lng: parseFloat(data[i].lon)};
                          // Create a marker per location, and put into markers array.

                        
                          var marker = new google.maps.Marker({
                            map: map,
                            position: myLatlng,
                            id: data[i].caller_id,
                            name:data[i].name
                          });
                          // Push the marker to our array of markers.
                          markers.push(marker);
                          // Create an onclick event to open an infowindow at each marker.
                           marker.addListener('click', function(event) {
                            map.setZoom(15);
                            map.panTo(event.latLng)
                            $('input[name = id]').val(this.id);
                            $('input[name = name]').val(this.name);
                            alert(this.name);
                            //hide this marker
                          });


                        }

            });


             }, 3000);

           
      
        

        map.addListener('click', function(event) {
          // 3 seconds after the center of the map has changed, pan back to the
          // marker.
            $('#lat').val(event.latLng.lat());
            $('#lng').val(event.latLng.lng());
        });

         
}
    function stopActivity(argument) {
      var id = $('input[name = id]').val();
      var hos = $('select[name = hospital]').val();

      var StopActivity = "{{route('StopActivity')}}";

      $.post(StopActivity,{id:id,hos:hos,_token:token},function(data){

            if(data == 1){
              alert("Activity Stoped");
              //stop function
            }

      });

    }

    </script>
@endsection



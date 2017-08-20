@extends('layouts.app2')

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
                            <div class="col-md-6"> <label>Date: </label></div>
                            <div class="col-md-6">  <input class="form-control" id="date" value="{{date('Y-m-d H:m:s')}}"  disabled = "disabled" name="date" ></div>
                    </div>
                    
                     <div class="row">
                            <div class="col-md-6">   <label>Time:</label></div>
                            <div class="col-md-6">  <input class="form-control" id="time" value="<?php echo $timeNow;?>" disabled="disabled" name='time'></div>
                    </div>
                   
               
                 
                  <div class="row">
                      <div class="col-md-6"> <label>Emergency Type</label></div>
                      <div class="col-md-6">
                        <select  class="form-control" name="emergency">
                            <option>Medical</option>
                            <option>RTA </option>
                            <option>Crime</option>
                            <option>Fire</option>
                            <option>Drowning</option>
                            <option>Train accident</option>
                            <option>Blast</option>
                            <option>Building collapse</option>
                            <option>Misc</option>
                        </select>
                    </div>
                  </div>
               
                <div class="row">
                    <div class="col-md-6"><label>Gender</label></div>
                    <div class="col-md-6">   
                    <select  class="form-control" name="gender">
                        <option>male </option>
                        <option>female</option>
                    </select></div>
                </div>
                
                   <!--  <div class="row">
                        <div class="col-md-6">
                            <label>Patient status: </label>
                        </div>
                        <div class="col-md-6"> 
                        <select  class="form-control" name="patient">
                            <option>Expired </option>
                            <option>Shifted</option>
                            <option>First Aid</option>
                    </select>
              </div>
                    </div> -->
                
                    <div class="row">
                            <div class="col-md-6"><label>Name: </label></div>
                            <div class="col-md-6"> <input  type="text" class="form-control" name="mobile" id="e_num"></div>
                    </div>
                   
                    
                   <div class="row">
                       <div class="col-md-3">  <label>location: </label></div>
                       <div class="form-inline">  
                        <input style="width: 100px;" name="lat" class="form-control" id="lat" placeholder="latitude" disabled="disabled">
                        <input style="width: 100px;" name="lon" class="form-control" id="lng" placeholder="longitude" disabled="disabled">
                    </div>
                   </div>
                
                  
                  <br>
                       
                    <center>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" onclick="displayData()">
                        Submit
                        </button>
                    </center>
                      
                    
                </div>  
            </div>
        
        </div>
    </div>

    <div id="map" class="well" style="height: 550px"></div>

    <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
                      <div class="modal-dialog" role="document" style="z-index: 2">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                          </div>
                          <div class="modal-body">
                            <center>
                                <h1 id="d"></h1>
                                <h1 id="t"></h1>
                                <h1 id="e"></h1>
                                <h1 id="g"></h1>
                                <h1 id="p"></h1>
                                <h1 id="m"></h1>
                                <h1 id="la"></h1>
                                <h1 id="ln"></h1>
                            </center>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" onclick="SaveForm()">Save changes <img id="loader" style="display: none" src="image/loader.gif" width="30px" height="30px" ></button>
                          </div>
                        </div>
                      </div>
                    </div>

<script type="text/javascript">
    function displayData() {
        $('#d').html("Date: "+$('input[name = date]').val());
        $('#t').html("Time: "+$('input[name = time]').val());
        $('#e').html("Emergency: "+$('select[name = emergency]').val());
        $('#g').html("Gender: "+$('select[name = gender]').val());
       // $('#p').html("Patient: "+$('select[name = patient]').val());
        $('#m').html("Name: "+$('input[name = mobile]').val());
        $('#la').html("Latitude: "+$('input[name = lat]').val());
        $('#ln').html("Longitude: "+$('input[name = lon]').val());

    }  

    function SaveForm() {
          var saveCaller = "{{route('saveCaller')}}";
            var token = "{{Session::token()}}"; 

            var date = "<?php echo date('Y-m-d H:m:s') ?>"
            var emergency = $('select[name = emergency]').val();
            var gender = $('select[name = gender]').val();
            var patient = "NA";
            var mobile = $('input[name = mobile]').val();
            var lat = $('input[name = lat]').val();
            var lon = $('input[name = lon]').val();

            $('#loader').show();

        $.post(saveCaller,{date:date,emergency:emergency,gender:gender,patient:patient,mobile:mobile,lat:lat,lon:lon,_token:token},function(data){

                if(data == 1){
                    $('#loader').hide();
                    alert("saved");
                }else{
                    alert(data);
                }


        });    

        
     } 

   
                   
</script>
@endsection



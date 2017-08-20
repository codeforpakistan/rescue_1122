<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head> 
    <!-- STYLESHEET -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <script src="js\javascript2.js"></script>
    <script async defer src="http://maps.google.com/maps/api/js?key=AIzaSyDz7DxkLSBRe_lBunSMo6qphJmXTUd1T-Q&v=3&callback=myMap"
          type="text/javascript"></script>
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- logo on tab -->
    <link rel="icon" href="image\icon.ico" type="image/x-icon"/>
    <!-- text on tab -->
    <title>login page</title>
</head>
<body >
    <div id="app">
        <!-- nav bar-->
    <nav class="navbar navbar-inverse" style="margin: 0px;">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">RESCUE1122</a>
        </div>
        <ul class="nav navbar-nav">
            <li><img src="image\Logo.png" style="width: 50px;height: 50px;"></li>
            <li><img  src="image\NUST.png" style="width: 50px;height: 50px;"></li>
            @if(Auth::user()->role == 'o' || Auth::user()->role == 'a')
            <li><a href="{{url('callerForm')}}">Caller form</a></li>
            @endif
             @if(Auth::user()->role == 'a')
            <li><a href="">Dashboard for DEO</a></li>
            @endif
             @if(Auth::user()->role == 'w' || Auth::user()->role == 'a')
            <li><a href="{{url('Activity')}}">Activity management for Wireless perssonal</a></li>
            @endif
            @if(Auth::user()->role == 'a')
            <li><a href="{{url('manageUsers')}}">manage users</a></li>
            @endif

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <a href="{{url('logout')}}"><button class="btn btn-danger navbar-btn">Signout</button><a>
            </ul>
      </div>
    </nav>


        @yield('content')
    </div>

    <script src="{{asset('js/app.js') }}"></script>
</body>
</html>

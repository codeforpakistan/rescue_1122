<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head> 
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- logo on tab -->
    <link rel="icon" href="image\icon.ico" type="image/x-icon"/>
    <!-- text on tab -->
    <title>Login</title>
</head>
<body style="background-image: url('image/bg.jpg'); background-repeat: no-repeat; background-size: cover; ">
    <div id="app">
        

    <div>
        <center><img src="image\logo.png" class="img-rounded" width="450" height="450"><br><Br></center>
    </div>

        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

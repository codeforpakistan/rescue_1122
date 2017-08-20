<!DOCTYPE html>
<html lang="en">
<head>
  <title>ERASDSS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

   <!-- nav bar-->
<nav class="navbar navbar-inverse" style="margin: 0;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">project E.R.A.S.D.S.S.</a>
    </div>
    <ul class="nav navbar-nav">
        <li><img src="image\Logo.png" style="width: 50px;height: 50px;">  .</li>
        <li><img  src="image\NUST.png" style="width: 50px;height: 50px;"></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <a href="{{url('login')}}"><button class="btn btn-success navbar-btn" style="width: 100px; margin: 10px">Login</button><a>
        </ul>
  </div>
</nav>
        
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="image/link.png" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption" style="color: black; font-size: 35px;">
          <h3>Academia/Industry</h3>
          <p>The future of solutions in Pakistan</p>
        </div>
      </div>

      <div class="item">
        <img src="image/team.png" alt="Chicago" style="width:100%;">
        <div class="carousel-caption" style="color: darkblue; font-size: 35px;">
          <h3>team ERASDSS</h3>
          <p>ABEERA || HAMMAD || JAVERIA || SAJAWAL </p>
        </div>
      </div>
    
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</body>
</html>

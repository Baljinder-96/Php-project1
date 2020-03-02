<?php

//Baljinder Project 1
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Baljinder - Home Page</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
  body{
      margin-left:10%;
      margin-right:10%;
     
  }
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 90%; /* Set width to 100% */
      margin: auto;
      height: 200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">HighFive Books</a>
    </div>
    
  </div>
</nav>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="slider/slider2.jpg" alt="Image">   
      </div>

      <div class="item">
        <img src="slider/slider1.jpg" alt="Image">   
      </div>
      <div class="item">
        <img src="slider/slider3.jpg" alt="Image">      
      </div>
      <div class="item">
        <img src="slider/slider4.jpg" alt="Image">    
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h2>HighFive Book Store</h2><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="slider/slider5.jpg
      " class="img-responsive" style="width:100%" alt="Image">
      <button style="margin-top:8px" class="btn btn-success btn-lg"><a style='color:black;font-weight:bold;' href="store.php">Shop Now</a></button>
    </div>
    <div class="col-sm-4"> 
      <img src="slider/slider6.jpg" class="img-responsive" style="width:100%" alt="Image">
      <button style="margin-top:10px" class="btn btn-success btn-lg"><a style='color:black;font-weight:bold;' href="store.php">Explore More</a></button>    
    </div>
    <div class="col-sm-4">
      <div class="well">
       <h5>Bookstore makes it easy to find the exact textbooks you need for every class....</h5>
      </div>
      <div class="well">
       <h5>Buy new/used and out of print books Compare prices from 100,000 sellers...</h5>
      </div>
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
  <h4 style="text-align:center">Phone: 416.736.5024 <br>
General Enquiries Email: bkweb@yorku.ca<br>
Web Orders Email: highfive@yorku.ca</h4>
</footer>


</body>
</html>
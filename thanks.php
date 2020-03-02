<?php

//Baljinder Project 1
session_start();
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

<div class="text-center">
<h1>Your Order Has Been Placed.</h1>
<img src='images/thanks.png' style='height:80%;width:80%;margin:50px;'>
</div>
<div class="text-center">
<button style="margin-bottom:10px" class="btn btn-success"><a style='color:white;'
        href="store.php">Want To make Another Purchase</a></button></div><!--by pressing this button customer can make another purchase-->


<footer class="container-fluid text-center">
  <h4 style="text-align:center">Phone: 416.736.5024 <br>
General Enquiries Email: bkweb@yorku.ca<br>
Web Orders Email: highfive@yorku.ca</h4>
</footer>


</body>
</html>
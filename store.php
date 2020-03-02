<?php

session_start();

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


<div class="rows">
<div class="container">
<div class="rows-grids">
<div class="col-md-10  rows-grid-left">
<div class="rows-grid-left">
						<u><h1 style="text-align: center;font-size: 4em">HighFive Boks </h1></u><br><br>
    <?php
    $connect = mysqli_connect("localhost", "root", "", "bookstorecreator");  //connecting database
    $q1 ="SELECT * FROM bookinventory";//selecting all values from bookinventory
    $r =mysqli_query($connect,$q1);
     
    $book_id ='book_id';
    $book_name='book_name';
    $book_price='book_price';
    $book_quantity='book_quantity';
    $book_image='book_image';
    $book_author='book_author';

    $form = "";

    if(mysqli_num_rows($r)>0){
     while($row=mysqli_fetch_array($r)){
       $book_id =$row['book_id'];
       $book_name = $row['book_name'];
       $book_price=$row['book_price'];
       $book_quantity =$row['book_quantity'];
       $book_image =$row['book_image'];
       $book_author=$row['book_author'];

       $form .= "<div class='rows' style='border:2px black solid;margin-bottom:10px;'>
       <div class='book_name'
       style='text-align:center;'>
       <h2 style='color:green;font-weight:bold;'>$book_name<h2></div><br>       
       <div class='book_image'
       style='text-align:center;'>
       <img src=$book_image style='height:40%;width:40%;border:2px black solid'>
       </div><br>
       <div class='book_author'
       style='text-align:center;'>
       <h2 style='color:blue;font-weight:bold'>$book_author<h2>
       </div>
       <div class='book_price'
       style='text-align:center;'>
       <button class='btn btn-primary'>$book_price</button>
       </div><br>
       <div class='book_quantity'
       style='text-align:center;'>
       <h4>Available Quantity in Inventory : $book_quantity<h4>
       </div><br>
       <div class='AddtoCart'
       style='text-align:center;margin-bottom:8em;'>
       <a href='cart.php?book_id=$book_id'>
       <input type='submit' class='btn btn-success' name='submit' value='Add to Cart' onClick='location.href='cart.php''></a>
       </div><br>
       </div>";
     }
     echo $form;
    }


    ?>
    
</div>
</div>
</div>
</div>
</div>

<footer class="container-fluid text-center">
  <h4 style="text-align:center">Phone: 416.736.5024 <br>
General Enquiries Email: bkweb@yorku.ca<br>
Web Orders Email: highfive@yorku.ca</h4>
</footer>


</body>
</html>
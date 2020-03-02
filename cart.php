<?php
//Baljinder Project1
session_start();

if(isset($_GET['book_id'])) {
       $_SESSION['bid'] = $_GET['book_id'];
  $book_id = '';
      $book_name = '';
      $book_price = '';
      $book_image = '';
      $book_author='';
  
  $book_id = $_GET['book_id'];

  $connect = mysqli_connect("localhost", "root", "", "bookstorecreator");

  $result = mysqli_query($connect, "SELECT * FROM bookinventory WHERE book_id = $book_id");
  
   while($row =mysqli_fetch_array($result)){
    $_SESSION['book_image'] = $row['book_image'];
    $_SESSION['book_name'] = $row['book_name'];
    $_SESSION['book_price'] = $row['book_price'];
    $_SESSION['book_author']=$row['book_author'];
    $_SESSION['book_quantity'] = $row['book_quantity'];
   }
  
}
  
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

<div class=container>


<div class='cart col-sm-12'>
<div class='form'>

<form class='form-horizontal' action='cart.php' method='POST'><br><br>
<fieldset>
<legend>Product is ready to purchase in cart</legend>
<div class='form-group text-center'>
<div style='height:20%;width:50%;margin-left:60px;'>

<img src='<?php echo $_SESSION['book_image']; ?>'
style='height:20%;width:50%;'>
</div><br>
<label class="control-label col-sm-2" >Book Name:</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" value="<?php echo $_SESSION['book_name']; ?>" disabled="disabled">
			    </div>
</div>

<div class="form-group">
			    <label class="control-label col-md-2">Book Price:</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" value="<?php echo $_SESSION['book_price']; ?>" disabled="disabled">
			    </div>
       </div>
       <div class="form-group">
			    <label class="control-label col-md-2">Author Name:</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" value="<?php echo $_SESSION['book_author']; ?>" disabled="disabled">
			    </div>
       </div>
       <br>
       
      </div>
 
       <button style="margin-left:100px;margin-bottom:10px" class="btn btn-success"><a style='color:white;' href="store.php">Inventory</a></button>
       <button type='submit' style="margin-left:10px;margin-bottom:10px" class="btn btn-success"><a style='color:white;' href="checkout.php">Checkout</a></button>
       </fieldset>      
</form>
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
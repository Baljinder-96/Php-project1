<?php

//Baljinder Project 1

session_start();
$error=array();
$book_id = $_SESSION['bid'];

echo $book_id;
require('mysqli_connect.php');


   if($_SERVER['REQUEST_METHOD']=='POST'){
     
       

 

  $sql = "SELECT * FROM `bookinventory` WHERE book_id = $book_id";
  // query get product details of given product id specially quantity to maintain inventory
  $result = $connect->query($sql); // execute query
  $row = $result->fetch_assoc();
  $quantity = intval($row['book_quantity'])- 1; // will covert row data in integer nd reduce quantity by 1 as we got order that

  $sql1 ="UPDATE `bookinventory` SET `book_quantity` = $quantity WHERE `bookinventory`.`book_id` =  $book_id;"; // update quantity
 $connect->query($sql1);


 /* $result = mysqli_query($connect, "SELECT * FROM `bookinventory` WHERE book_id = $book_id");
  
   while($row =mysqli_fetch_array($result)){
    $_SESSION['book_price'] = $row['book_price'];
  
    $quantity = intval($row['book_quantity'])- 1;
    echo $quantity;
        $sql1 ="UPDATE `bookinventory` SET `book_quantity` = $quantity WHERE `bookinventory`.`book_id` =  $book_id;"; // update quantity
        $connect->query($sql1);
*/
   
  
    //connection to the database
    //$q1="INSERT INTO `message` (`comment`) VALUES (?);"; 
     $customer_fname=mysqli_real_escape_string($connect,$_POST['customer_fname']);
     $customer_lname=mysqli_real_escape_string($connect,$_POST['customer_lname']);
     $customer_address=mysqli_real_escape_string($connect,$_POST['customer_address']);
     $customer_paymentmethod=mysqli_real_escape_string($connect,$_POST['customer_paymentmethod']);
     $book_id=mysqli_real_escape_string($connect,$_SESSION['bid']);
     $email=mysqli_real_escape_string($connect,$_POST['email']);
     $total=mysqli_real_escape_string($connect,$_SESSION['book_price']);
  //inserting values into customer table
     $query="INSERT INTO  `customer` (`customer_fname`,`customer_lname`,`customer_address`,`customer_paymentmethod`,`book_id`,`email`,`total`) Values (?,?,?,?,?,?,?)";
     //prepare statement
     $stmt = mysqli_prepare($connect,$query) or die(mysqli_error($connect));
     //bind data
     mysqli_stmt_bind_param($stmt,"ssssiss",$customer_fname,$customer_lname,$customer_address,$customer_paymentmethod,$book_id,$email,$total);
     //execute the query
     mysqli_stmt_execute($stmt);
    header('location:thanks.php');
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

<div class=container>


<div class='cart col-sm-12'>
<div class='form'>

<form class='form-horizontal' action='checkout.php' method='POST'><br><br>
<fieldset>
<legend>Checkout</legend>
<div class='form-group text-center'>
<label class="control-label col-sm-2" for='customer_fname'>First Name:</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" id='customer_fname' name='customer_fname' placeholder='John' required='required'>
			    </div>
</div>

<div class="form-group">
			    <label class="control-label col-md-2" for='customer_lname'>Last Name:</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" id='customer_lname' name='customer_lname' placeholder='doe' required='required' >
			    </div>
          </div>
       <div class="form-group">
			    <label class="control-label col-md-2" for='customer_address'>Address:</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" id='customer_address' name='customer_address' placeholder='117 pepperswood. kitchener,ON' required='required'>
			    </div>
       </div>
       <div class="form-group">
			    <label class="control-label col-md-2" for='email'>Email:</label>
			    <div class="col-sm-6">
			      <input type="email" class="form-control" id='email' name='email' placeholder='baljinder@gmail.com' required='required'>
			    </div>
       </div>
       <div class="form-group">
			    <label class="control-label col-md-2" for='total'>Total Price:</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" id='total' name='total' value="<?php echo $_SESSION['book_price']; ?>" disabled="disabled">
			    </div>
       </div>
       <br>
       <div class="form-group">
			    <label class="control-label col-md-2">Payment Method:</label>
			    <div class="col-sm-6">
			      <select name="customer_paymentmethod" style="color: black" required='required'>
					<option value="Credit Card">Credit Card</option>
					<option value="Debit Card">Debit Card</option>
					<option value="Cash on Delivery">Cash On Delivery</option>
				  </select>
				 </div> 
       </div>
       </div>
       <input type="hidden" name="book_id" value="<?php echo $book_id; ?>">
       <button type='submit' style="margin-left:10px;margin-bottom:10px" class="btn btn-success">Submit </button>
       <button style="margin-bottom:10px" class="btn btn-success"><a style='color:white;'
        href="store.php">Inventory</a></button>
       <button style="margin-bottom:10px"
        class="btn btn-success"><a style='color:white;' href="cart.php">View Your Cart</a></button>
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
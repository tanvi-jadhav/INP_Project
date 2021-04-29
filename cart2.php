<?php 
  session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
  <title>Cart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  	.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}

.column{
	float: left;
	padding: 20px;
	width: 25%;
}

.row:after{
	content: "";
	display: table;
	clear: both;
}

  </style>

</head>
<body>
  <div class="top-nav-bar">
    <div class="search-box">
      <i class="fa fa-bars" id="menu-btn" onclick="openmenu()"></i>
      <i class="fa fa-times" id="close-btn" onclick="closemenu()"></i>
      <a href="index.php"><img src="bazar.png" class="logo"></a>
      <br><br>
      <input type="text" class="form-control">
      <span class="input-group-text">
        <i class="fa fa-search"></i>
      </span>
    </div>
<div class="menu-bar">
 <ul>
 <li><a href="cart1.php"><i class="fa fa-shopping-cart"></i>Cart
</a></li>
<?php 

  if(isset($_SESSION['name'])){
  echo '<li><a href="adminlogout.php" style="text-decoration:none">Logout</a></li>';
}
else{
  echo'<li><a  href="loginnew.html">Login</a></li>';
  echo'<li><a  href="signup.html" >Sign Up</a></li>';
}
?> 
</ul>
</div>
</div>
	<?php

$con = mysqli_connect("localhost", "id11300039_root", "ecommerce", "id11300039_ecommerce");
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$sql = "select * from cart where username="."'".$_SESSION['name']."'";
$result = $con->query($sql);
$tot_price=0;

if ($result->num_rows > 0) {
    // output data of each row
    echo '<div class="container">';
    echo '<div class="row">';
    while($row = $result->fetch_assoc()) {
    	$cprice=$row['price'];
    	$cprod_name=$row['prod_name'];
    	$cp_name=$row['p_name'];
      $i=$row['p_id'];
      $quantity=intval($row['quantity']);
    	$int_cprice=floatval($cprice);
      $int_cprice=$int_cprice*$quantity;
    	$tot_price=$tot_price+$int_cprice;
      
      echo '<div class="col-sm-4">';
    	echo '<div class="card" style="width:400px">';
    	echo '<img src='.$cp_name.' style="width:100%" >';
    	echo '<h1>'.$cprod_name.'</h1>';
    echo '<p class="price">'."Rs.".$cprice.'</p>';
    echo '<p >Quantity  : '.$quantity.'</p>';
    echo '<p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>';
    echo '<form action="removecart.php?i='.$i.'" method="post">';
  echo '<p><button>Remove</button></p>';
  echo '</form>';
  echo '<form action="updatecart.php?i='.$i.'" method="post">';
  echo '<p><button>Add</button></p>';
  echo '</form>';
  echo '<form action="updatecart1.php?i='.$i.'" method="post">';
  echo '<p><button>Less</button></p>';
  echo '</form>';
echo '</div>';
echo '</div>';

$_SESSION['total_price']=$tot_price;
    }
    echo '</div>';
    echo '</div>';
  echo '<div class="card">';
   echo ' <div class="card-body">Total Amount                  :        '.$_SESSION['total_price'].'</div>';
   echo '<form action="payment.php" method="post">';
    echo '<button type="submit">Place Order</button>';
    echo '</form>';
  echo '</div>';
}

else{
	echo "Cart empty";
}

?>

<section class="footer">
<div class="container text-center">
  <div class="row">
    <div class="col-md-3">
       <h1>Useful Links</h1>
       <p>Privacy Policy</p>
       <p>Terms of Use</p>
       <p>Return Policy</p>
       <p>Discount Coupons</p>
    </div>

    <div class="col-md-3">
       <h1>Company</h1>
       <p>About Us</p>
       <p>Contact Us</p>
       <p>Career</p>
       <p>Affiliate</p>
    </div>

    <div class="col-md-3">
       <h1>Follow Us On</h1>
       <p><i class="fa fa-facebook-official"></i>Facebook</p>
       <p><i class="fa fa-youtube-play"></i>YouTube</p>
       <p><i class="fa fa-twitter"></i>Twitter</p>
       <p><i class="fa fa-instagram"></i>Instagram</p>
    </div>
    <div class="col-md-3" footer-image>
      <h1>Download App</h1>
      <img src="downloadapp.png">
    </div>
  </div>
  <hr>
  <p class="copyright"><i class="fa fa-copyright"></i> DesiBazar.com </p>
</div> 
</section>




<script>
  function openmenu()
  {
    document.getElementById("side-menu").style.display="block";
    document.getElementById("menu-btn").style.display="none";
    document.getElementById("close-btn").style.display="block";

  }
  function closemenu()
  {
    document.getElementById("side-menu").style.display="none";
    document.getElementById("menu-btn").style.display="block";
    document.getElementById("close-btn").style.display="none";

  }
</script>

</body>
</html>


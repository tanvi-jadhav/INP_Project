<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>E-COMMERCE WEBSITE </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
      <img src="bazar.png" class="logo">
      <br><br>
   <!--   
      <form action="https://www.desibazaaar.000webhostapp.com/search" method="GET">
	<input type="text" name="q" placeholder="Search">
	<input type="submit" name="Search">
	
</form> -->
      
      <input type="text" class="form-control">
      <span class="input-group-text">
        <i class="fa fa-search"></i>
      </span> 
    </div>
<div class="menu-bar">
 <ul>
 <li><a href="cart1.php">Cart
</a></li>
<?php 
  

  if(isset($_SESSION['name'])){
  echo '<li><a href="adminlogout.php" style="text-decoration:none">Logout</a></li>';
}
else{
  echo'<li><a  href="loginnew.html">Login</a></li>';
  echo'<li><a  href="signup.html" >SignUp</a></li>';
}
?> 
</ul>
</div>
</div>


<section class="header">

<div class="side-menu" id="side-menu">
<ul>
  <li>On Sale<i class="fa fa-angle-right"></i>
  <ul>
  <li>Sub-Menu 1</li>
  <li>Sub-Menu 1</li>
  <li>Sub-Menu 1</li>
  <li>Sub-Menu 1</li>
  </ul>
  </li>
  <li>New Arrivals<i class="fa fa-angle-right"></i>
  <ul>
  <li>Sub-Menu 2</li>
  <li>Sub-Menu 2</li>
  <li>Sub-Menu 2</li>
  <li>Sub-Menu 2</li>
  </ul>
  </li>
  <li>Men<i class="fa fa-angle-right"></i>
  <ul>
  <li>Sub-Menu 3</li>
  <li>Sub-Menu 3</li>
  <li>Sub-Menu 3</li>
  <li>Sub-Menu 3</li>
  </ul>
  </li>
  <li>Women<i class="fa fa-angle-right"></i>
  <ul>
  <li>Sub-Menu 4</li>
  <li>Sub-Menu 4</li>
  <li>Sub-Menu 4</li>
  <li>Sub-Menu 4</li>
  </ul>
  </li>
  <li>Kids-Girls<i class="fa fa-angle-right"></i>
  <ul>
  <li>Frocks</li>
  <li>Sub-Menu 5</li>
  <li>Sub-Menu 5</li>
  <li>Sub-Menu 5</li>
  </ul>
  </li>
  <li>Kids-Boys<i class="fa fa-angle-right"></i>
  <ul>
  <li>Party Wear 6</li>
  <li>Sherwani</li>
  <li>Jeans</li>
  <li>Formals</li>
  </ul>
  </li>
  <li>Laptops<i class="fa fa-angle-right"></i>
  <ul>
  <li>Sub-Menu 7</li>
  <li>Sub-Menu 7</li>
  <li>Sub-Menu 7</li>
  <li>Sub-Menu 7</li>
  </ul>
  </li>
</ul>
</div>

<div class="slider">
<div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="shop3.jpg" class="d-block w-100" >
    </div>
    <div class="carousel-item">
      <img src="shop4.jpg" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="shop2.jpg" class="d-block w-100" >
    </div>
    <div class="carousel-item">
      <img src="shop7.jpg" class="d-block w-100" >
    </div>
  </div>
<ol class="carousel-indicators">
    <li data-target="#slider" data-slide-to="0" class="active"></li>
    <li data-target="#slider" data-slide-to="1"></li>
    <li data-target="#slider" data-slide-to="2"></li>
    <li data-target="#slider" data-slide-to="3"></li>

  </ol>
</div>
  
</div>

</section>

<!----------------featured-categories--------------------->
<br><br>

<section class="featured-categories">
<div class="container">
  <div class="title-box">
  <h2>Ladies Sandal</h2>
   </div>
  <div class="row">
    <div class="col-md-6 col-sm-12 col-lg-4">
     <img src="sandal4.jpg" title="upto 30%off">
    </div>
    <div class="col-md-4">
     <img src="sandal.jpg" title="upto 30-40%off"> 
    </div>
    <div class="col-md-4">
     <img src="sandal5.jpg" title="upto 20-30%off">
    </div>
  </div>
 
</div>  

</section>

<br><br>

<!-------------------On Sale product-------------------------->
<?php

$con = mysqli_connect("localhost", "id11300039_root", "ecommerce", "id11300039_ecommerce");
if ( mysqli_connect_errno() ) {
  // If there is an error with the connection, stop the script and display the error.
  die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$sql = "select * from product order by productid";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    echo '<section class="on-sale">';
    echo '<div class="title-box">';
    echo '<h2>On Sale</h2> ';  
  echo '</div> ';
   echo '<div class="container">';
    echo '<div class="row">';
    while($row = $result->fetch_assoc()) {
      $i=$row['productid'];
      $price=$row['price'];
      $image=$row['name'];
      $p_name=$row['product_name'];
    echo '<div class="col-md-6 col-sm-12 col-lg-4">';
    echo '<div class="card" style="width:300px">';
    echo '<div class="product-top">';
      echo '<a href="product1.php?product_id='.$i.'"><img src="'.$image.'"></a>';
     echo ' <div class="overlay-right">';
     echo ' <button type="button" class="btn btn-secondary" title="Quick Shop">';
       echo '<i class="fa fa-eye"></i> ';
      echo '</button>';
      echo '<button type="button" class="btn btn-secondary" title="Add to Wishlist">';
      echo ' <i class="fa fa-heart-o"></i> ';
     echo ' </button>  ';
     echo ' <button type="button" class="btn btn-secondary" title="Add to Cart">';
      echo ' <i class="fa fa-shopping-cart"></i> ';
     echo ' </button>';
      echo '</div>';
    echo '</div>';
   echo '<div class="product-bottom text-center">';
    echo '  <h5>'.$p_name.'</h5>';
     echo ' <h7>Rs. '.$price.'</h7>';
    echo '</div> ';
    echo '</div> ';
    echo '<br></br>';echo '<br></br>';
    echo ' </div>';
echo '<br></br>';
 }
 echo '<br></br>';
  echo '</div>';
  echo '</div>';
echo '</section>';
}
?>
<!--------------New-products------------------------>

<!--------------website-fetures---------------------->

<section class="website-fetures">
<div class="container">
<div class="row">
<div class="col-md-3 feature-box">
<img src="satisfaction.png">
<div class="feature-text">
  <p><b>100% Original items</b>are available.</p>  
</div>
</div>
<div class="col-md-3 feature-box">
<img src="return.png">
<div class="feature-text">
  <p><b>Return within 30 days</b>of receiving.</p>  
</div>
</div> 
<div class="col-md-3 feature-box">
<img src="delivery1.png">
<div class="feature-text">
  <p><b>Get free delivery for every</b>order on more than price.</p>  
</div>
</div>
<div class="col-md-3 feature-box">
<img src="payment.jfif">
<div class="feature-text">
  <p><b>Pay Online through multiple</b>payment options.</p>  
</div>
</div> 
</div>  
</div>  
</section>

<!-----------footer------------------->
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
  <p class="copyright"><i class="fa fa-copyright"></i> DesiBazar.com </p><br><br>
  <h6>(Used only for educational purpose)</h6>
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
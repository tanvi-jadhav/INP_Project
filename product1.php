<?php 
  session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
<title>E-COMMERCE WEBSITE Single Product</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 <style type="text/css">
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 500px;
  margin: auto;
  text-align: center;
  font-family: arial;
 
  margin-left: 50px
}

.price {
  color: grey;
  font-size: 22px;
}
.card button {
  border: none;
  outline: 0;
  color: white;
    padding: 12px;
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
.col-lg-6{
  margin-top: 100px;
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
  $_SESSION['product_id']=$_GET['product_id'];
 $con = mysqli_connect("localhost", "id11300039_root", "ecommerce", "id11300039_ecommerce");
  $prod=$_SESSION['product_id'];
  $sql = "select * from product where productid=".$_SESSION['product_id'];
  $result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $_SESSION['price']= $row["price"];
      $_SESSION['pname']= $row["name"];
      $_SESSION['product_name']= $row["product_name"];
      $_SESSION['availability']= $row["availability"];

  }
} else {
    echo "0 results";
}
$con->close();
?> 

<!-----------single-product------------------->
<div class="container">
<div class="row">
<div class="col-lg-6">
  <div class="card" style="width:400px">
      <?php
      echo '<img src='.$_SESSION['pname'].' style="width:100%" class="d-block " >';
      ?>
  <?php
 echo '<h2 >'.$_SESSION['product_name'].'</h2>';
 ?>
   <?php
    echo '<p class="price" >Rs. '.$_SESSION['price'].'</p>';
    ?> 
    <form action="cart5.php" method="post">
    <button class="button" type="submit">Add to Cart</button>
    </form>
</div>
</div>

<div class=" col-lg-6">
  <h6>Product Description</h6>
  <p>Keep this hip this season with the Desibazaar's product. This product can be styled any way you like for the ultimate gym-to-street look.
</p>
  <p>Material & Care
Cotton
Machine-wash</p>
  <br>
  <?php echo '<h6>In Stock  :  '.$_SESSION['availability'].'</h6>';?>
  <hr>
</div>
</div> 
</div> 
 
<br>
<br>
<br>
<br>




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
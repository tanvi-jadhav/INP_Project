<!DOCTYPE html>
<html>
<head>
<title>E-COMMERCE WEBSITE </title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
  <div class="top-nav-bar">
    <div class="search-box">
      <i class="fa fa-bars" id="menu-btn" onclick="openmenu()"></i>
      <i class="fa fa-times" id="close-btn" onclick="closemenu()"></i>
      <img src="bazar.png" class="logo">
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
  session_start();

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
      <img src="machine.jfif" class="d-block w-100" >
    </div>
    <div class="carousel-item">
      <img src="soup.jfif" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="image3.jfif" class="d-block w-100" >
    </div>
    <div class="carousel-item">
      <img src="image5.jfif" class="d-block w-100" >
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

<section class="featured-categories">
<div class="container">
  <div class="row">
    <div class="col-md-4">
     <img src="shoes1.jfif" title="upto 30%off">
    </div>
    <div class="col-md-4">
     <img src="saree1.jfif" title="upto 30-40%off"> 
    </div>
    <div class="col-md-4">
     <img src="phone.jfif" title="upto 20-30%off">
    </div>
  </div>
</div>  

</section>

<!-------------------On Sale product-------------------------->
<section class="on-sale">
  <div class="container">
   <div class="title-box">
   <h2>On Sale</h2>  
   </div> 
   <div class="row">
    <div class="col-md-3">
    <div class="product-top">
      <a href="product1.php?product_id=1"><img src="men8.jfif"></a>
      <div class="overlay-right">
      <button type="button" class="btn btn-secondary" title="Quick Shop">
       <i class="fa fa-eye"></i> 
      </button>
      <button type="button" class="btn btn-secondary" title="Add to Wishlist">
       <i class="fa fa-heart-o"></i> 
      </button>  
      <button type="button" class="btn btn-secondary" title="Add to Cart">
       <i class="fa fa-shopping-cart"></i> 
      </button>
      </div>
    </div>
    <div class="product-bottom text-center">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>  
    <i class="fa fa-star-half-o"></i>
      <h5>Men Casual Shirt</h5>
      <h7>$25.99</h7>
    </div> 
    </div> 
    <div class="col-md-3">
    <div class="product-top">
      <a href="product1.php?product_id=2 "><img src="kids-frock3.jfif"></a>
       
            <div class="overlay-right">
      <button type="button" class="btn btn-secondary" title="Quick Shop">
       <i class="fa fa-eye"></i> 
      </button>
      <button type="button" class="btn btn-secondary" title="Add to Wishlist">
       <i class="fa fa-heart-o"></i> 
      </button>  
      <button type="button" class="btn btn-secondary" title="Add to Cart">
       <i class="fa fa-shopping-cart"></i> 
      </button>
      </div>
    </div>
    <div class="product-bottom text-center">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>  
    <i class="fa fa-star-o"></i>
      <h5>White Frock</h5>
      <h7>$35.00</h7>
    </div> 
    </div> 
    <div class="col-md-3">
    <div class="product-top">
      <a href="product1.php?product_id=3" ><img src="g_dress2.jfif"></a>
      <div class="overlay-right">
      <button type="button" class="btn btn-secondary" title="Quick Shop">
       <i class="fa fa-eye"></i> 
      </button>
      <button type="button" class="btn btn-secondary" title="Add to Wishlist">
       <i class="fa fa-star"></i> 
      </button>  
      <button type="button" class="btn btn-secondary" title="Add to Cart">
       <i class="fa fa-shopping-cart"></i> 
      </button>
      </div>
    </div>
    <div class="product-bottom text-center">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star-half-o"></i>  
    <i class="fa fa-star-o"></i>
      <h5>Line High Waisted Dress</h5>
      <h7>$34.67</h7>
    </div> 
    </div> 
     <div class="col-md-3">
    <div class="product-top">
      <a href="product1.php?product_id=4"><img src="men_jacket.jfif"></a>
      <div class="overlay-right">
      <button type="button" class="btn btn-secondary" title="Quick Shop">
       <i class="fa fa-eye"></i> 
      </button>
      <button type="button" class="btn btn-secondary" title="Add to Wishlist">
       <i class="fa fa-heart-o"></i> 
      </button>  
      <button type="button" class="btn btn-secondary" title="Add to Cart">
       <i class="fa fa-shopping-cart"></i> 
      </button>
      </div>
    </div>
    <div class="product-bottom text-center">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>  
    <i class="fa fa-star"></i>
      <h5>Military Bomber Men's Jacket</h5>
      <h7>$30.00</h7>
    </div> 
    </div>
   </div>
  </div>
</section>

<!--------------New-products------------------------>

<section class="new-products">
  <div class="container">
   <div class="title-box">
   <h2>New Arrivals</h2>  
   </div> 
   <div class="row">
    <div class="col-md-3">
    <div class="product-top">
      <img src="g.jfif">
      <div class="overlay-right">
      <button type="button" class="btn btn-secondary" title="Quick Shop">
       <i class="fa fa-eye"></i> 
      </button>
      <button type="button" class="btn btn-secondary" title="Add to Wishlist">
       <i class="fa fa-heart-o"></i> 
      </button>  
      <button type="button" class="btn btn-secondary" title="Add to Cart">
       <i class="fa fa-shopping-cart"></i> 
      </button>
      </div>
    </div>
    <div class="product-bottom text-center">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>  
    <i class="fa fa-star-half-o"></i>
      <h5>Off Shoulder Lace Dress</h5>
      <h7>$24.99</h7>
    </div> 
    </div> 
    <div class="col-md-3">
    <div class="product-top">
      <img src="g_dress1.jfif">
      <div class="overlay-right">
      <button type="button" class="btn btn-secondary" title="Quick Shop">
       <i class="fa fa-eye"></i> 
      </button>
      <button type="button" class="btn btn-secondary" title="Add to Wishlist">
       <i class="fa fa-heart-o"></i> 
      </button>  
      <button type="button" class="btn btn-secondary" title="Add to Cart">
       <i class="fa fa-shopping-cart"></i> 
      </button>
      </div>
    </div>
    <div class="product-bottom text-center">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>  
    <i class="fa fa-star-o"></i>
      <h5>Prada Dress</h5>
      <h7>$30.00</h7>
    </div> 
    </div> 
    <div class="col-md-3">
    <div class="product-top">
      <img src="g_dress2.jfif">
      <div class="overlay-right">
      <button type="button" class="btn btn-secondary" title="Quick Shop">
       <i class="fa fa-eye"></i> 
      </button>
      <button type="button" class="btn btn-secondary" title="Add to Wishlist">
       <i class="fa fa-star"></i> 
      </button>  
      <button type="button" class="btn btn-secondary" title="Add to Cart">
       <i class="fa fa-shopping-cart"></i> 
      </button>
      </div>
    </div>
    <div class="product-bottom text-center">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star-half-o"></i>  
    <i class="fa fa-star-o"></i>
      <h5>Line High Waisted Dress</h5>
      <h7>$34.67</h7>
    </div> 
    </div>
     <div class="col-md-3">
    <div class="product-top">
      <img src="dress_frock.jfif">
      <div class="overlay-right">
      <button type="button" class="btn btn-secondary" title="Quick Shop">
       <i class="fa fa-eye"></i> 
      </button>
      <button type="button" class="btn btn-secondary" title="Add to Wishlist">
       <i class="fa fa-heart-o"></i> 
      </button>  
      <button type="button" class="btn btn-secondary" title="Add to Cart">
       <i class="fa fa-shopping-cart"></i> 
      </button>
      </div>
    </div>
    <div class="product-bottom text-center">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>  
    <i class="fa fa-star-o"></i>
      <h5>Princess Frock</h5>
      <h7>$40.00</h7>
    </div> 
    </div> 
   </div>
 </div>
</section>


<br><br>
<br><br>

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
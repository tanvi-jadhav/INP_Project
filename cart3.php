<?php
session_start();
// Change this to your connection info.
// Try and connect using the info above.
$con = mysqli_connect("localhost", "id11300039_root", "ecommerce", "id11300039_ecommerce");
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
$namec=$_SESSION['name'];

$prod_namec=$_SESSION['product_name'];
$pricec=$_SESSION['price'];
$pnamec=$_SESSION['pname'];
$id=$_SESSION['product_id'];

$sqll = "select p_id from cart where username="."'".$_SESSION['name']."'"."and p_id="."'".$_SESSION['product_id']."'";
$result= $con->query($sqll);
if ($result->num_rows > 0) {

header("location:cart2.php");
}
else{
	$sql = "insert into cart(username,prod_name,price,p_name,p_id,quantity) values('$namec', '$prod_namec', '$pricec', '$pnamec','$id',1)";
if($con->query($sql) == TRUE){
    header("location:cart2.php");
   }else{
      echo($con->error);
   }
	
}

?>

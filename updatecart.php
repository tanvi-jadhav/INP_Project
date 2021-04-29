<?php
session_start();
?>
<?php
$con = mysqli_connect("localhost", "id11300039_root", "ecommerce", "id11300039_ecommerce");
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
$pid=$_GET['i'];
$sql= "select quantity from cart where username="."'".$_SESSION['name']."'"."and p_id="."'".$pid."'";
$result = $con->query($sql);
$sqll= "select availability from product where productid="."'".$pid."'";
$result1 = $con->query($sqll);
while($row = $result->fetch_assoc()) {
    	$quantity=intval($row['quantity']);
 }
while($row1 = $result1->fetch_assoc()) {
    	$availability=intval($row1['availability']);
    }
if($quantity<$availability)
{
	$quantity++;
	$stmt= "update cart set quantity="."'".$quantity."'"." where username="."'".$_SESSION['name']."'"."and p_id="."'".$pid."'";
	if($con->query($stmt) == TRUE){
    header("location:cart2.php");

   }else{
      echo($con->error);
   }
}
else{
      header("location:cart2.php");
   }
?>
<?php
session_start();
$con = mysqli_connect("localhost", "id11300039_root", "ecommerce", "id11300039_ecommerce");
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
$pid=$_GET['i'];
$sql= "delete from cart where username="."'".$_SESSION['name']."'"."and p_id="."'".$pid."'";
if($con->query($sql) == TRUE){
    header("location:cart2.php");

   }else{
      echo($con->error);
   }
?>
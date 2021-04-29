<?php
$con = mysqli_connect("localhost", "id11300039_root", "ecommerce", "id11300039_ecommerce");

   if(!$con){
      die("Error : " . $con->connect_error);
   }

   
   $name    = $_POST["firstname"];
    $email  = $_POST["email"];
    $address = $_POST["address"];
   $city= $_POST["city"];
   $state  = $_POST["state"];
   $zip  = $_POST["zip"];

   $sql = "insert into payment(Fullname,Email, Address, City, State,Zip) values('$name', '$email', '$address', '$city','$state','$zip')";

   if($con->query($sql) == TRUE){
      header("location:index1.php");
   }else{
      echo($con->error);
   }
?>
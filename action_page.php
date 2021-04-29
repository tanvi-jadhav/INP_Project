<?php

   $con = mysqli_connect("localhost", "id11300039_root", "ecommerce", "id11300039_ecommerce");

   if(!$con){
      die("Error : " . $con->connect_error);
   }
   
   $name    = $_POST["name"];
   $Contact  = $_POST["Contact"];
   $email   = $_POST["email"];
   $username = $_POST["username"];
   $Password    = $_POST["Password"];

   $sql = "insert into signup(name, contact, email , username, password) values('$name', '$Contact', '$email', '$username', '$Password')";

   if($con->query($sql) == TRUE){
      header("location:index.php");
   }else{
      echo($con->error);
   }
?>
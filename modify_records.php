<?php

$con = mysqli_connect("localhost", "id11300039_root", "ecommerce", "id11300039_ecommerce");
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
if(isset($_POST['edit_row']))
{
 $row=$_POST['row_id'];
 $pid=$_POST['prod_id'];
 $price=$_POST['price_val'];
 $image=$_POST['Image_val'];
 $prname=$_POST['prod_name'];
 $avail=$_POST['avail_val'];

 $sql="update product set productid='$pid',price='$price',name='$image',product_name='$prname',availability='$avail' where productid='$row'";
 $result= $con->query($sql);
 echo "success";
 exit();
}

if(isset($_POST['delete_row']))
{
 $row_no=$_POST['row_id'];
 $sql="delete from product where productid='$row_no'";
 $result= $con->query($sql);
 echo "success";
 exit();
}

if(isset($_POST['insert_row']))
{
 $pid=$_POST['prod_id'];
 $price=$_POST['price_val'];
 $image=$_POST['Image_val'];
 $prname=$_POST['prod_name'];
 $avail=$_POST['avail_val'];
 $sql="insert into product values('$pid','$price','$image','$prname','$avail')";
 $result= $con->query($sql);
 echo mysql_insert_id();
 exit();
}
?>
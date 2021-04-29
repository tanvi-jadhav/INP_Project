<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="modify_records.js"></script>
<SCRIPT type="text/javascript" src="jQuery.js"></SCRIPT>
<style>
body{
    background-color:#E8DAEF;
}
</style>
</head>
<body>
<div id="wrapper">

<?php

$con = mysqli_connect("localhost", "id11300039_root", "ecommerce", "id11300039_ecommerce");
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$sql="SELECT * FROM product";
$result = $con->query($sql);
?>

<table align="center" cellpadding="10" border="1" id="user_table">
<tr>
<th>Product Id</th>
<th>Price</th>
<th>Image</th>
<th>Product Name</th>
<th>Availability</th>
<th></th>
</tr>
<?php
while($row = $result->fetch_assoc())
{
 ?>
 <tr id="row<?php echo $row['productid'];?>">
  <td id="prod_id<?php echo $row['productid'];?>"><?php echo $row['productid'];?></td>
  <td id="price_val<?php echo $row['productid'];?>"><?php echo $row['price'];?></td>
  <td id="Image_val<?php echo $row['productid'];?>"><?php echo $row['name'];?></td>
  <td id="prod_name<?php echo $row['productid'];?>"><?php echo $row['product_name'];?></td>
  <td id="avail_val<?php echo $row['productid'];?>"><?php echo $row['availability'];?></td>
  <td>
   <input type='button' class="edit_button" id="edit_button<?php echo $row['productid'];?>" value="edit" onclick="edit_row(<?php echo $row['productid'];?>);">
   <input type='button' class="save_button" id="save_button<?php echo $row['productid'];?>" value="save" onclick="save_row(<?php echo $row['productid'];?>);">
   <input type='button' class="delete_button" id="delete_button<?php echo $row['productid'];?>" value="delete" onclick="delete_row(<?php echo $row['productid'];?>);">
  </td>
 </tr>
 <?php
}
?>

<tr id="new_row">
 <td><input type="text" id="new_id"></td>
 <td><input type="text" id="new_price"></td>
 <td><input type="text" id="new_image"></td>
 <td><input type="text" id="new_prname"></td>
 <td><input type="text" id="new_avail"></td>
 <td><input type="button" value="Insert Row" onclick="insert_row();"></td>
</tr>
</table>
<h2><a href="adminlogout.php">Logout</a></h2>
</div>
</body>
</html>
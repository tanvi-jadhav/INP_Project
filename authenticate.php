<?php
session_start();
// Change this to your connection info.
// Try and connect using the info above.
$con = mysqli_connect("localhost", "id11300039_root", "ecommerce", "id11300039_ecommerce");
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if (!isset($_POST['username'], $_POST['Password']) ) {
	// Could not get the data that should have been sent.
	die ('Please fill both the username and password field!');
}
$username = $_POST["username"];
$password    = $_POST["Password"];
if ($username=='admin'&& $password=='admin') {
    $_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['username'];
	header("location:admin_page.php");
}
else{

if ($stmt = $con->prepare('SELECT username, password FROM signup WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
	if ($stmt->num_rows > 0) {
	$stmt->bind_result($username,$password);
	$stmt->fetch();
	// Account exists, now we verify the password.
	// Note: remember to use password_hash in your registration file to store the hashed passwords.
	if ($_POST['Password'] === $password) {
		// Verification success! User has loggedin!
		// Create session
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['username'];
		header("location:index.php");
	} else {
		echo 'Incorrect password!';
	}
} else {
	echo 'Incorrect username!';
}
$stmt->close();
}
}
?>

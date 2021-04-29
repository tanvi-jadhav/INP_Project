<?php
session_start();
$totalprice=100*$_SESSION['total_price'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<title>Checkout</title>
    <style>
        body{
            background-color: pink;
        }
        .razorpay-payment-button
        {
            color: #ffffff !important;
            background-color: #7266ba;
            border-color: #7266ba;
            font-size: 14px;
            padding: 10px;
            margin-top: 100px;
            margin-left: 650px;

        }
       @media only screen and (max-width: 600px) {
  .razorpay-payment-button{
    margin-top: 100px;
            margin-left: 160px;
  }
}
    </style>
</head>
<body>

	<form  method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="rzp_test_0K20HRHZK9W9Gv" // Enter the Key ID generated from the Dashboard
    data-amount="<?php echo($totalprice); ?>" // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise or INR 500.
    data-currency="INR"
    data-buttontext="Pay with Razorpay"
    data-name="Acme Corp"
    data-description="A Wild Sheep Chase is the third novel by Japanese author Haruki Murakami"
    data-image="https://example.com/your_logo.jpg"
    data-prefill.name="Gaurav Kumar"
    data-prefill.email="gaurav.kumar@example.com"
    data-prefill.contact="9999999999"
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>
</body>
</html>
<!doctype html>

<html>
	<head>
        <!--
          OpenLabProject_01
          
          Author: Tabiths Siclovan
          Date: October 30, 2018 

          Filename: results.php
       -->
		<title>Results</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body style="text-align:center">
	<h2>Superglobal Array \$_SERVER[]</h2>
  <?php
    //The SERVER superglobal
    //Used the server superglobal to get the script name
    echo "<p>The name of the current script is: " , $_SERVER["SCRIPT_NAME"], "<br>";
    //Used the server superglobal to get the software type
    echo "This script was executed with the following server software: ", $_SERVER["SERVER_SOFTWARE"], "<br>";
    //Used the server superglobal to get the protocol type
    echo "This script was requested with the following server protocol: ", $_SERVER["SERVER_PROTOCOL"], "<br>";
    //Used the server superglobal to retrieve the server name
    echo "This script is running on the following server name: ", $_SERVER["SERVER_NAME"], "<br>";
    //Used the server superglobal to retrieve the server address
    echo "This script is running on the following server address: ", $_SERVER["SERVER_ADDR"], "<br>";
    //Used the server superglobal to get the gateway interface
    echo "This script is running on the following gateway interface: ", $_SERVER["GATEWAY_INTERFACE"], "<br>";
    //Used the server superglobal to get the request method
    echo "This script is running on the following request method: ", $_SERVER["REQUEST_METHOD"], "<br>";
    /////////////////////////////////////////////////////////////////////
    //Uses stripslashes function to protect input/output
    $message = stripslashes($_POST['message']);
    $billingAddress = stripslashes($_POST['bAddress']);
    $deliveryAddress = stripslashes($_POST['dAddress']);
    $delivDate = stripslashes($_POST['dDate']);
    $payment = stripslashes($_POST['payment']);
    $createAccount = stripslashes($_POST['cAccount']);
    //Prints to the screen the first name and last names that are inputted and submitted
    echo "Thank You for filling out the payment form.";
    ?>
	</body>
</html>
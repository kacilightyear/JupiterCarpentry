

	<html>
	<head>
	<title>Form</title>
	</head>

	<body>

<?php
if ( preg_match( "/[\r\n]/", $name ) || preg_match( "/[\r\n]/", $email ) ) {

	echo "<h1>Subject " . $_POST["subject"] . "</h1>";
	/*header("Location: {$_REQUEST["destination"]}");*/

}

    mail('support@jupitercarpentry.com', $_POST['subject'], $_POST['name'] . $_POST['message'], $_POST['email']);

    /*Go back to the main page */
	header("Location: index.html");

?>

	</body>
	</html>
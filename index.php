<?php 
//configuration for our PHP Server
set_time_limit(0);
ini_set('default_socket_timeout', 300);
session_start();

//Make Constants using define
define('client_ID', '1f6322580ee64ef985c108f07df45876');
define('client_Secret', '8df27ad17af047ff84e0eb035aebc066');
define('redirectURI', 'http://localhost/appacademyapi/index.php');
define('ImageDirectory', 'pics/');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="width=device-width, initial-scale=1">
	<title>Untitled</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="humans.txt">
</head>
<body>
	<!-- Creating a login for people to go and give approval for our web app to acess their Instagram Account
	After getting approval we are now going to have the information so that we can play with it.
	-->
	<a href="https:api.instagram/oauth/authorize/?client_id=<?php echo client_ID; ?>&redirect_uri=<?php echo redirectURI ?>&response_type=code">LOGIN</a>
	<script src="js/main.js"></script>
</body>
</html>

<!--CLIENT INFO
CLIENT ID
1f6322580ee64ef985c108f07df45876
CLIENT SECRET
8df27ad17af047ff84e0eb035aebc066
WEBSITE URL
http://localhost/appacademyapi/index.php
REDIRECT URI
http://localhost/appacademyapi/index.php-->

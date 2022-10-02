<?php
include("init.php");
protect_page();
?>
<!DOCTYPE html>
<html>

<head>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="asset/style.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="asset/style.css?v=<?php echo time(); ?>"> -->
	<title>Home Page</title>
</head>

<body>
	<div class="home_body">
		<div class="heading">Home Page</div>
		<div class="welcom">Welcome to Home page</div>
		<div class="log_out">
			<a href="logout.php"><button type="button" class="btn_logout">Log Out!</button></a>
		</div>

	</div>
</body>

</html>
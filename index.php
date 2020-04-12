<?php session_start(); ?>
<html>
<head>

	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="description" content="">
	  <meta name="author" content="">
	  <link rel="stylesheet" type="text/css" href="scss/style.css" />
	<script type="text/javascript" language="javascript" src="javascripts/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="javascripts/script.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	  <title>Mr & Mrs CUE</title>

	  <!-- Bootstrap core CSS -->
	  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	  <!-- Custom fonts for this template -->
	  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

	  <!-- Custom styles for this template -->
	  <link href="css/business-casual.min.css" rel="stylesheet">

	  <!--form-->
	  <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>

	<?php
	if(isset($_SESSION['valid'])) {
		include("connection.php");
		$result = mysqli_query($mysqli, "SELECT * FROM login");
	?>

		Welcome <?php echo $_SESSION['name'] ?> ! <a href='logout.php'>Logout</a><br/>
		<br/>
		<a href='view.php'>View and Add Products</a>
		<br/><br/>
	<?php
	} else {
		echo "You must be logged in to view this page.<br/><br/>";
		echo "<a href='login.php'>Login</a> | <a href='register.php'>Register</a>";
	}
	?>

</body>
</html>

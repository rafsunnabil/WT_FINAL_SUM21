<?php
    
	session_start();
?>
<html>


	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="css/mystyle.css">
	</head>
	<body>
	    
		<div class="header-index">
		    <h2>Welcome, <?php echo $_SESSION["uname"]; ?></p>
			<a class="btn"><b class="text-white name">Resturant Management Sysytem</b></a>
			<div class="pull-right">
				<a class="btn btn-success" href="index.php">Home</a>
				<a class="btn btn-danger" href="adminLogin.php">Login</a>
			</div>
			
		</div>
		
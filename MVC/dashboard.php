<?php
	session_start();
?>
<html>
	<body>
		<h1 align="center">Welcome <?php echo $_SESSION["loggeduser"];?></h1>
		<a href ="add_product.php">Add Product</a>
	</body>
</html>
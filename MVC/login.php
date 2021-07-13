<?php include'header.php';?>
<?php include'controllers/user_controller.php';?>

<html>
	<head><title>Registration</title></head>
	<body>
	
		<fieldset>
			<center>
			<h1>Log in</h1>
			<form action="" method="POST">
				<table >
					<tr>
						<td>Name: </td>
						<td><input type="text" size="30" name="uname" value="<?php echo $uname;?>" placeholder="Name"></td>
						<td><span><?php echo $err_uname;?></span></td>
						</tr>
						<tr>
						<td>Password: </td>
						<td><input type="password" size="30" name="pass" value="<?php echo $pass;?>" placeholder="Password"></td>
						<td><span><?php echo $err_pass;?></span></td>
					</tr>				 					
				</table>
				<br>
				<a align="right"colspan="2"><input type="submit" name="Log in" value="Log in"></a>								
			</form>
			</center>
		</fieldset>
		
	</body>
</html>
<?php include'footer.php';?>
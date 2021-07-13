<?php include'header.php';?>
<?php
	include'controllers/user_controller.php';		
?>

<html>
	<head><title>Registration</title></head>
	<body>
		<fieldset>
			<center>
			<h3><?php echo $err_db;?></h3>
			<h1>Sign up</h1>
			<form action="" method="POST">
				<table>
					<tr>
						<td>Name: </td>
						<td><input type="text" size="30" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						<td><span><?php echo $err_name;?></span></td>
						
					</tr>
					<tr>
						<td>Username: </td>
						<td><input type="text" size="30" name="uname" value="<?php echo $uname;?>" placeholder="Username"></td>
						<td><span><?php echo $err_uname;?></span></td>
					</tr>
					<tr>
						<td>Email: </td>
						<td><input type="text" size="30" name="email" value="<?php echo $email;?>" placeholder="Email id"></td>
						<td><span><?php echo $err_email;?></span></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td><input type="password" size="30" name="pass" value="<?php echo $pass;?>" placeholder="Password"></td>
						<td><span><?php echo $err_pass;?></span></td>
					</tr>					
				</table>
				<br>
				<a align="center"colspan="3"><input type="submit" name="sign up" value="sign up"></a>	
			</form>
			</center>
		</fieldset>		
	</body>
</html>


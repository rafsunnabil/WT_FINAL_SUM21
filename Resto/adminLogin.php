<?php
    require_once 'Controllers/admincontroller.php';
?>
<html>
    <head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="css/mystyle.css">
	</head>
    <body>
	<script src="ajax/login.js"></script>
        <fieldset>
		<p align="center"><img src="Storage/images/login.png" width="150px" height="150px"></p>
		    <legend align="center"><h1> Login</h1></legend>
			<h2><?php echo $err_db; ?></h2>
		    <form action="" method="post">
			    <table align="center">
					<tr>
						<td><b><i>Username: <i><b></td>
						<td><input type="text" onfocusout="checkUsername(this)" name="uname" value="<?php echo $uname;?>" placeholder="Username"></td>
						<td><span id="err_uname"><small><?php echo $err_uname;?><small></span></td>
					</tr>
					<tr>
						<td><b><i>Password: <i><b></td>
						<td><input type="password" name="pass" value="<?php echo $pass;?>" placeholder="Password"></td>
						<td><span><small><?php echo $err_pass;?><small></span></td>
					</tr>
					<tr>
						<td align="center" colspan="3" ><br><br><input type="submit" name="login" value="Login"></td>
						<td><span><br><br><a href ="Signup.php" > Don't Have an Account Yet? Register Now.</a></span></td>
					</tr>
					
				</table>
		 	</form>
		</fieldset>
    </body>
</html>
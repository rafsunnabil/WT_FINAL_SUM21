<?php
    include 'Controllers/usercontroller.php';
?>
<html>
    <head></head>
    <body>
	    
        <fieldset>
		    <legend align="center"><h1> Login</h1></legend>
			<h2><?php echo $err_db; ?></h2>
		    <form action="" method="post">
			    <table align="center">
					<tr>
						<td><b><i>Username: <i><b></td>
						<td><input type="text" name="uname" value="<?php echo $uname;?>" placeholder="Username"></td>
						<td><span><small><?php echo $err_uname;?><small></span></td>
					</tr>
					<tr>
						<td><b><i>Password: <i><b></td>
						<td><input type="password" name="pass" placeholder="Password"></td>
						<td><span><small><?php echo $err_pass;?><small></span></td>
					</tr>
					<tr>
						<td align="center" colspan="3" ><br><br><input type="submit" value="Login"></td>
					</tr>
					
				</table>
		 	</form>
		</fieldset>
    </body>
</html>
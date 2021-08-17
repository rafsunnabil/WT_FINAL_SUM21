<?php
    include 'Controllers/salesmancontroller.php';
?>
<html>
    <head></head>
	<body>

		<fieldset>
		    <legend align="center"><h1> Manage Profile</h1></legend>
            <h2><?php echo $err_db; ?></h2>
		        <form action="" method="post">
				<table align="center" >
					<tr>
						<td><b><i>Name: <i><b></td>
						<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						<td><span><small><?php echo $err_name;?><small></span></td>
						
					</tr>
					<tr>
						<td><b><i>Username: <i><b></td>
						<td><input type="text" name="uname" value="<?php echo $uname;?>" placeholder="Username"></td>
						<td><span><small><?php echo $err_uname;?><small></span></td>
					</tr>
					<tr>
						<td><b><i>Password: <i><b></td>
						<td><input type="password" name="pass" value="<?php echo $pass;?>" placeholder="Password"></td>
						<td><span><small><?php echo $err_pass;?><small></span></td>
					</tr>
					<tr>
						<td><b><i>Confirm Password: <i><b></td>
						<td><input type="password" name="cpass" placeholder="Confirm Password"></td>
						<td><span><small><?php echo $err_cpass;?><small></span></td>
					</tr>
					
					<tr>
						<td><b><i>Email: <b><i></td>
						<td><input type="text" name="email" value="<?php echo $email;?>" placeholder="Email"></td>
						<td><span><small><?php echo $err_email;?><small></span></td>
					</tr>
					<tr>
						<td><b><i>Phone: <i><b></td>
						<td><input type="text" name="phone" value="<?php echo $phone;?>" placeholder="Phone"></td>
						<td><span><small><?php echo $err_phone;?><small></span></td>
					</tr>

					<tr>
						<td align="center" colspan="3"><br><br><input type="submit" name="update" value="Manage"></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
	</body>
<html>
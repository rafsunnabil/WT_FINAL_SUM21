<?php
    require_once 'Controllers/admincontroller.php';
?>
<html>
    <head>
	<link rel="stylesheet" href="css/resto.css">
	</head>
	<body>
    
		<fieldset>
		<p align="center"><img src="Storage/images/register-now-1.png" width="150px" height="150px"></p>
		    <legend align="center"><h1> Registration Form</h1></legend>
            <h2><?php echo $err_db; ?></h2>
		        <form action="" onsubmit="return validate()" method="post">
				<table align="center" >
					<tr>
						<td><b><i>Name: <i><b></td>
						<td><input type="text" id="name" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						<td><span id="err_name"><small><?php echo $err_name;?><small></span></td>
						
					</tr>
					<tr>
						<td><b><i>Username: <i><b></td>
						<td><input type="text" id="uname" name="uname" value="<?php echo $uname;?>" placeholder="Username"></td>
						<td><span id="err_uname"><small><?php echo $err_uname;?><small></span></td>
					</tr>
					<tr>
						<td><b><i>Password: <i><b></td>
						<td><input type="password" id="pass" name="pass" value="<?php echo $pass;?>" placeholder="Password"></td>
						<td><span id="err_pass" ><small><?php echo $err_pass;?><small></span></td>
					</tr>
					<tr>
                        <td><b><i>Confirm Password: <i><b></td>
                        <td><input type="password"  id="cpass" name="cpass" value="<?php echo $cpass;?>" placeholder="Confirm Password"></td>
                        <td><span id="err_cpass"><small><?php echo $err_cpass;?><small></span></td>
                    </tr>
					<tr>
						<td><b><i>Email: <b><i></td>
						<td><input type="text" id="email" name="email" value="<?php echo $email;?>" placeholder="Email"></td>
						<td><span id="err_email"><small><?php echo $err_email;?><small></span></td>
					</tr>
					<tr>
                        <td><b><i>Phone: <i><b></td>
                        <td><input type="text" id="phone" name="phone" value="<?php echo $phone;?>" placeholder="Phone"></td>
                        <td><span id="err_phone"><small><?php echo $err_phone;?><small></span></td>
                    </tr>

					<tr>
						<td align="center" colspan="3"><br><br><input type="submit" name="register" value="Register"></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
		<script src="js/signup.js"></script>
	</body>
<html>
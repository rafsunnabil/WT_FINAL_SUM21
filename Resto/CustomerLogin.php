<?php

   require_once 'Controllers/customercontroller.php';
     
    
?>

	    
        <fieldset>
		<?php include'customerheader.php';?>
		   <h2 align="center"><?php echo $err_db;?></h2>
		   <h1 align="center">Customer Login</h1>
		    <form action="" method="post">
			    <table align="center">
					<tr>
						<td>Username: </td>
						<td><input type="text" name="uname" value="<?php echo $uname;?>" placeholder="Username"></td>
						<td><span><?php echo $err_uname;?></span></td>
					</tr>
					<tr>
						<td>password: </td>
						<td><input type="password" name="pass" value="<?php echo $pass;?>" placeholder="Password"></td>
						<td><span><?php echo $err_pass;?></span></td>
					</tr>
					<tr>
						<td align="center"colspan="2"><br><br><input type="submit" name="Login" value="Login"><br>
					</br><b>Forgot Password?</b> <a href ="C_forgotpass.php">Click here</a></td>
					</tr>
					<!--<tr>
					<td align="center" colspan="3"><br><b>Want to Update Your profile? Click on</b> <a href ="UpdateCustomerProfile.php" >Update</a></td>
					</tr>-->
					<tr>
					    <td align= "center" colspan="3" rowspan="3"><br><br><b>Don't Have an Account Yet?</b> <a href ="C.Registration.php" >Register Now.</a></td>
					</tr>
				</table>
		 	</form>
		</fieldset>
    <?php
	require_once'customerfooter.php'; 
	?>
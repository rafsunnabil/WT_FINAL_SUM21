<?php
    require_once 'Controllers/paymentcontroller.php';
    $id= $_GET["id"];
    $p= getPayment($id);
?>
<html>
	<head></head>
	<body>
        
		<fieldset>
		    <legend align="center"><h1> Delete Payment:</h1></legend>
			<h5><?php echo $err_db; ?></h5>
			<form action="" method="post">
				<table align="center" >
					<tr>
					    <td><input type="hidden" value="<?php echo $id?>"name="id"></td>
						<td><input type="text" name="uname" value="<?php echo $p["uname"]; ?>"></td>
						
					</tr>
					
					<tr>
					    <td><input type="submit" name="delete_payment" value="Delete"></td>
					</tr>
					<td><a href="dashboard.php?" class="btn btn-success">Back</a></td>
				</table>
			</form>
		</fieldset>
		
	</body>
</html>
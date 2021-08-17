<?php
	require_once 'Controllers/track_controllers.php'
	$id = $_GET["id"];
	$status = getStatus($id);
?>
<html>
<head></head>
	<body>
		<fieldset>
			<legend align="center"><h1>ABC Restaurant</h1></legend>
				<center>
					<table>
						<tr>
							<td><h2>Thank You!</h2></td>
						</tr>
						<tr>
							<td>We have received your order<div>Your order is on the way</div></td>
						</tr>
						<tr>
						    <td><input type="hidden" name="id" value="<?php echo $status["id"];?>"></td>
							<td><br><br><h3 >Your order status is:</h3></td>
						</tr>							
					</table>
				</center>
		</fieldset>
	</body>
</html>
						
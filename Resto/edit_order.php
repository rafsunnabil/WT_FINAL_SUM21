<?php
    require_once 'Controllers/ordercontroller.php';
    $id= $_GET["id"];
    $o= getOrders($id);
?>
<html>
	<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="css/mystyle.css"></head>
	<body>
        
		<fieldset>
		    <legend align="center"><h1> Edit Order:</h1></legend>
			<h5><?php echo $err_db; ?></h5>
			<form action="" method="post">
				<table align="center" >
					<tr>
					    <td><input type="hidden" value="<?php echo $id?>"name="id"></td>
						<td><input type="text" name="name" value="<?php echo $o["name"]; ?>"></td>
						
					</tr>
					
					<tr>
					    <td><input type="submit" name="customize_order" value="Customize"></td>
					</tr>
					<td><a href="all_orders.php?" class="btn btn-success">Back</a></td>
				</table>
			</form>
		</fieldset>
		
	</body>
</html>
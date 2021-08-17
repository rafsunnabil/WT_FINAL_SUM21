<?php
    require_once 'Controllers/trackcontroller.php';
    $id= $_GET["id"];
    $t= getStatus($id);
?>
<html>
	<head></head>
	<body>
        
		<fieldset>
		    <legend align="center"><h1> Delete Status:</h1></legend>
			<h5><?php echo $err_db; ?></h5>
			<form action="" method="post">
				<table align="center" >
					<tr>
					    <td><input type="hidden" value="<?php echo $id?>"name="id"></td>
						<td><input type="text" name="status" value="<?php echo $t["status"]; ?>"></td>
						
					</tr>
					
					<tr>
					    <td><input type="submit" name="delete_status" value="Delete Track Status"></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
		
	</body>
</html>
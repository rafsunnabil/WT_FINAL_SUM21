<?php
    require_once 'Controllers/trackcontroller.php';
?>
<html>
	<head></head>
	<body>
        
		<fieldset>
		    <legend align="center"><h1> Add Status:</h1></legend>
            <h5><?php echo $err_db; ?></h5>
			<form action="" method="post">
				<table align="center" >
					<tr>
					    <td><b><i>Status: <i><b></td>
						<td><input type="text" name="status" value="<?php echo $status; ?>"></td>
						
					</tr>
					
					<tr>
					    <br><td align="center" colspan="3"><br><br><input type="submit" name="update" value="Status"></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
		
	</body>
</html>
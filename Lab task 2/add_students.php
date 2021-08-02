<?php
    include 'Controllers/categorycontroller.php';
?>
<html>
	<head></head>
	<body>
        
		<fieldset>
		    <legend align="center"><h1> Add Students:</h1></legend>
            <h5><?php echo $err_db; ?></h5>
			<form action="" method="post">
				<table align="center" >
					<tr>
					    <td><b><i>Product Name: <i><b></td>
						<td><input type="text" name="name" value="<?php echo $name; ?>"></td>
						
					</tr>
					
					<tr>
					    <br><td align="center" colspan="3"><br><br><input type="submit" name="add_students" value="Add Students"></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
		
	</body>
</html>
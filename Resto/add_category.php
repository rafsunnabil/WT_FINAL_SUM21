<?php
    require_once 'Controllers/categorycontroller.php';
?>
<html>
	<head></head>
	<body>
        
		<fieldset>
		    <legend align="center"><h1> Add Category:</h1></legend>
            <h5><?php echo $err_db; ?></h5>
			<form action=""  onsubmit="return validate()" method="post">
				<table align="center" >
					<tr>
					    <td><b><i>Product Name: <i><b></td>
						<td><input type="text" id="name" name="name" value="<?php echo $name; ?>"></td>
						<td><span id="err_name"><small><?php echo $err_name;?><small></span></td>
						
					</tr>
					
					<tr>
					    <br><td align="center" colspan="3"><br><br><input type="submit" name="add_category" value="Add Category"></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
		<script src="js/category.js"></script>
	</body>
</html>
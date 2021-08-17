<?php
    require_once 'Controllers/foodcontroller.php';
    $id= $_GET["id"];
    $c= getFood($id);
?>
<html>
	<head></head>
	<body>
        
		<fieldset>
		    <legend align="center"><h1> Delete Food Items:</h1></legend>
			<h5><?php echo $err_db; ?></h5>
			<form action="" method="post">
				<table align="center" >
					<tr>
					    <td><input type="hidden" value="<?php echo $id?>"name="id"></td>
						<td><input type="text" name="name" value="<?php echo $f["name"]; ?>"></td>
						
					</tr>
					
					<tr>
					    <td><input type="submit" name="delete_food" value="Delete food"></td>
						
					</tr>
					<tr>
					    <td align="center" colspan="3"><td ><a href="all_foods.php?"class="btn-btn-success">Back</a></td></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
		
	</body>
</html>
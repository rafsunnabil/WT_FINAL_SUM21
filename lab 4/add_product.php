<?php
    require_once 'Controllers/productcontroller.php';
	require_once 'Controllers/categorycontroller.php';
	
?>
<html>
	<head></head>
	<body>
        
		<fieldset>
		    <legend align="center"><h1> Add Product:</h1></legend>
            <h5><?php echo $err_db; ?></h5>
			<form action="" method="post" enctype="multipart/form-data">
				<table align="center" >
					<tr>
					    <td><b><i>Name: <i><b></td>
						<td><input type="text" name="name" value="<?php echo $name; ?>"></td>
						
					</tr>
                    <tr>
						<td><b><i>Category:  <b><i></td>
						<td>
							<select name="c_id">
								<option selected disabled>--Choose--</option>
								<?php
								    foreach($categories as $c){
										echo'<option value="'.$c[$id].'">'.$c[$name].'</option>';
									}
								?>
							</select> 
						</td>
						<td><span><small><?php echo $err_types;?></small></span></td>
					</tr>
                    <tr>
					    <td><b><i>Price: <i><b></td>
						<td><input type="text" name="price" value="<?php echo $price; ?>"></td>
						
					</tr>
                    <tr>
					    <td><b><i>Quantity: <i><b></td>
						<td><input type="text" name="quantity" value="<?php echo $qty; ?>"></td>
						
					</tr>
                    <tr>
					    <td><b><i>Description: <i><b></td>
						<td><input type="text" name="description" value="<?php echo $desc; ?>"></td>
						
					</tr>
                    <tr>
					    <td><b><i>Image: <i><b></td>
						<td><input type="file"  name="image" value="<?php echo $img; ?>"></td>
						
					</tr>
                    
					
					<tr>
					    <br><td align="center" colspan="3"><br><br><input type="submit" name="add_product" value="Add Product"></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
		
	</body>
</html>
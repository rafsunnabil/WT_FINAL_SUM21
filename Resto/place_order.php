
<?php
    require_once 'Controllers/ordercontroller.php';
	require_once 'Controllers/foodcontroller.php';
	$foods = getAllFoods();
	
?>
<html>
	<head></head>
	<body>
        
		<fieldset>
		    <legend align="center"><h1> Place Order:</h1></legend>
            <h5><?php echo $err_db; ?></h5>
			<form action="" onsubmit="return validate()" method="post" >
				<table align="center" >
					<tr>
					    <td><b><i>Name: <i><b></td>
						<td><input type="text" id="name" name="name" value="<?php echo $name; ?>"></td>
						<td><span id="err_name"><small><?php echo $err_name;?><small></span></td>
						
					</tr>
                    <tr>
						<td><b><i>Foods:  <b><i></td>
						<td>
							<select id="f_id" name="f_id">
								<option selected disabled>--Choose--</option>
								<?php
								    foreach($foods as $f){
										echo '<option value="'.$f["id"].'">'.$f["name"].'</option>';
									}
								?>
							</select> 
						</td>
						<td><span id="err_f_id"><small><?php echo $err_f_id;?></small></span></td>
					</tr>
                    <tr>
					    <td><b><i>Quantity: <i><b></td>
						<td><input type="text" id="$qty" name="quantity" value="<?php echo $qty; ?>"></td>
						<td><span id="err_qty"><small><?php echo $err_qty;?><small></span></td>
						
					</tr>
                    
                    
					
					<tr>
					    <br><td align="center" colspan="3"><br><br><input type="submit" name="place_order" value="Place Order"></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
		<script src="js/placeorder.js"></script>
	</body>
</html>
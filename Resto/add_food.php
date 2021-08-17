<?php
    require_once 'Controllers/foodcontroller.php';
	require_once 'Controllers/categorycontroller.php';
	$categories =  getAllCategories();
	
?>
<html>
	<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="css/mystyle.css">
	</head>
	<body>
        
		<fieldset>
		    <legend align="center"><h1> Add Food items:</h1></legend>
            <h5><?php echo $err_db; ?></h5>
			<form action="" onsubmit="return validate()" method="post" enctype="multipart/form-data">
				<table align="center" >
					<tr>
					    <td><b><i>Name: <i><b></td>
						<td><input type="text" id="name" name="name" value="<?php echo $name; ?>"></td>
						<td><span id="err_name"><small><?php echo $err_name;?><small></span></td>
						
					</tr>
                    <tr>
						<td><b><i>Category:  <b><i></td>
						<td>
							<select id="c_id" name="c_id">
								<option selected disabled>--Choose--</option>
								<?php
								    foreach($categories as $c){
										echo'<option value="'.$c["id"].'">'.$c["name"].'</option>';
									}
								?>
							</select> 
						</td>
						<td><span id="err_c_id"><small><?php echo $err_c_id;?></small></span></td>
					</tr>
                    <tr>
					    <td><b><i>Price: <i><b></td>
						<td><input type="text"  id="price" name="price" value="<?php echo $price; ?>"></td>
						<td><span id="err_price"><small><?php echo $err_price;?><small></span></td>
						
					</tr>
                    <tr>
					    <td><b><i>Recipy: <i><b></td>
						<td><textarea  id="rec" name="recipy" value="<?php echo $rec; ?>"></textarea>
						<td><span id="err_rec"><small><?php echo $err_rec;?><small></span></td>
						
					</tr>
                    <tr>
					    <td><b><i>Image: <i><b></td>
						<td><input type="file"  name="image" value="<?php echo $img; ?>"></td>
						<td><span><small><?php echo $err_img;?><small></span></td>
						
					</tr>
                    
					
					<tr>
					    <br><td align="center" colspan="3"><br><br><input type="submit" name="add_food" value="Add Food"></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
		<script src="js/food.js"></script>
	</body>
</html>
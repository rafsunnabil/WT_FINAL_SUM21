<?php
	require_once "Controllers/reviewcontroller.php";
	require_once 'Controllers/foodcontroller.php';
	$foods = getAllFoods();
	
?>


<html>
	<head></head>
	<body>
		<fieldset>
		<center>
			<h1 style= "color:Red">Give a review of our food</h1>
			<form action="" method="post">
				<table >
					<tr>
						<td>Please select a food to review:</td>
						<td>
							<select name="food">
								<option selected disabled>--Select--</option>
								<?php
									foreach($foods as $f){
										echo'<option value="'.$f["id"].'">'.$f["name"].'</option>';
									}
								?>
							</select> 
						</td>
						<td><span><?php echo $err_food;?></span></td>
					</tr>
					
					<tr>
					    <td>Rate Food: </td>
						<td><input type="text" name="rate" value="<?php echo $rate; ?>"></td>
						<td><span><small><?php echo $err_rate;?><small></span></td>
						
					</tr>
					<tr>
					    <td>Review: </td>
						<td><input type="text" name="review" value="<?php echo $review; ?>"></td>
						<td><span><small><?php echo $err_review;?><small></span></td>
						
					</tr>
					<tr>
						<td align="right" colspan="2"><input type="submit" name="post_review" value="Submit Review"></td>
					</tr>
					</table>
			</form>
			</center>
		</fieldset>
	</body>
</html>
					
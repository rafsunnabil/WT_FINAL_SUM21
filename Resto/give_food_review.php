<?php
	require_once "Controllers/review_controllers.php";
	
?>


<html>
	<head></head>
	<body>
		<fieldset>
		<center>
			<h1 style= "color:Red">Give a review of our food</h1>
			<form action="other_review.php" method="post">
				<table >
					<tr>
						<td>Please select a food to review:</td>
						<td>
							<select name="Foodis">
								<option selected disabled>--Select--</option>
								<?php
									foreach($Foodis as $f){
										if($food == $f)
											echo "<option selected>$f</option>";
										else
											echo "<option>$f</option>";
									}
								?>
							</select> 
						</td>
						<td><span><?php echo $err_food;?></span></td>
					</tr>
					<tr>
						<td>Please give us your review:</td>
						<td>
							<textarea name="review"><?php echo $review;?></textarea>
						</td>
						<td><span><?php echo $err_review;?></span></td>
					</tr>
					<tr>
						<td>Please give this item a rating:</td>
						<td>
							<select name="Ratingis">
								<option selected disabled>--Select--</option>
								<?php
									foreach($Ratingis as $r){
										if($rating == $r)
											echo "<option selected>$r</option>";
										else
											echo "<option>$r</option>";
									}
								?>
							</select> 
						</td>
						<td><span><?php echo $err_rating;?></span></td>
					</tr>
					<tr>
						<td align="right" colspan="2"><input type="submit" value="Submit"></td>
					</tr>
					</table>
			</form>
			</center>
		</fieldset>
	</body>
</html>
					
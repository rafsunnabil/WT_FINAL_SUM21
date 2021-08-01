<?php
	$food="";
	$err_food="";
	$review="";
	$err_review="";
	$rating="";
	$err_rating="";
	
	$hasError=false;
	
	$Foodis =  array("Burger","Pizza","Sandwich","Juice","Sides");
	$Ratingis = array("01","02","03","04","05","06","07","08","09","10");
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["Foodis"])){
			$err_food = "*Please select a item";
			$hasError = true;
		}
		else{
			$food = $_POST["Foodis"];
		}
		if(empty($_POST["review"])){
			$err_review="*Please write a review";
			$hasError = true;
		}
		else{
			$review = $_POST["review"];
		}
		if(empty($_POST["Ratingis"])){
			$err_rating = "*Please rate this item";
			$hasError = true;
		}
		else{
			$rating = $_POST["Ratingis"];
		}
		
		// if(!$hasError){
			// echo $_POST["Foodis"]."<br>";
			// echo $_POST["review"]."<br>";
			// echo $_POST["Ratingis"]."<br>";
		// }
	}
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
					
<?php
    require_once 'Controllers/reviewcontrollers.php';	 
	$reviews = getAllReviews();
?>

<html>
	<body>
		<fieldset>
		    <legend align="center"><h1>Other Reviews</h1></legend>
				<table align="center">
					<tr>
					    <td align="left"><b><i>Food Name: <i><b></td>
					    <td align="center"><b><i>Review: <i><b></td>
						<td align="right"><b><i>Ratings: <i><b></td>
					</tr>
					
						<?php
							foreach($reviews as $r){		
							echo "<tr>";
							echo "<td>".$r["food_name"]."</td>";
							echo "<td>".$r["review"]."</td>";
							echo "<td>".$r["rate"]."</td>";
							echo "<tr>";
							}
						?>
				</table>
			</center>
		</fieldset>
	</body>
</html>
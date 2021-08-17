<?php
    require_once 'Controllers/review_controllers.php';	 
	$review = getReview();
?>

<html>
	<body>
		<fieldset>
		    <legend align="center"><h1>Other Reviews</h1></legend>
				<table align="center">
					<tr>
					    
						
					    <td align="left"><b><i>Customer Name: <i><b></td>
					    <td align="left"><b><i>Food Name: <i><b></td>
					    <td align="center"><b><i>Review: <i><b></td>
						<td align="right"><b><i>Ratings: <i><b></td>
					</tr>
					
						<?php
							foreach($review as $r){		
							echo "<tr>";
							echo "<td>".$r["food"]."</td>";
							echo "<td>".$r["review"]."</td>";
							echo "<td>".$r["rating"]."</td>";
							echo "<tr>";
							}
						?>
				</table>
			</center>
		</fieldset>
	</body>
</html>
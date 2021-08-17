<?php
	require_once 'Controllers/reviewcontroller.php';
	$reviews = getAllReviews();
?>
<!--All Products starts -->


<div class="center">
	<h3 class="text">All Reviews</h3>
	
</div>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th>Food</th>
            <th>Rate</th>
			<th>Review </th>
			
			
		</thead>
		<tbody>
		
			<?php
				$i=1;
				foreach($reviews as $r){
					echo "<tr>";
						
						echo "<td>$i</td>";
						echo "<td>".$r["f_name"]."</td>";
						echo "<td>".$r["rate"]."</td>";
						echo "<td>".$r["review"]."</td>";
                        echo '<td><a href="delete_review.php?id='.$r["id"].'" class="btn btn-success">Edit</a></td>';
						
					echo "</tr>";
					$i++;
				}
			?>
		</tbody>
	</table>
</div>
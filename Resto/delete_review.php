<?php
    require_once 'Controllers/reviewcontroller.php';
	$id= $_GET["id"];
    $rv= getReviews($id);
?>
<html>
	<head></head>
	<body>
        
		<fieldset>
		    <legend align="center"><h1> Delete Review:</h1></legend>
			<h5><?php echo $err_db; ?></h5>
			
			<form action="" method="post">
				<table align="center" >
					<tr>
					    <td><input type="hidden" value="<?php echo $id?>"name="id"></td>
						<td><input type="text" name="food" value="<?php echo $r["food"]; ?>"></td>
						
					</tr>
					
					<tr>
					    <td><input type="submit" name="delete_review" value="Delete Review"></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
		
	</body>
</html>
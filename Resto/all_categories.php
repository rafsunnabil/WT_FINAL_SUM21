<?php
    require_once 'Controllers/categorycontroller.php';
    $categories = getAllCategories();
?>
<html>
	<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="css/mystyle.css">
	</head>
	<body>
        
		<fieldset>
		    <legend align="center"><h1> All Categories:</h1></legend>
            <h5><?php echo $err_db; ?></h5>
			<form action="" method="post">
				<table align="center" >
					<tr>
					    <td><b><i>Sl#: <i><b></td>
					    <td><b><i>Name: <i><b></td>
						
						
						
					</tr>

                    <?php
                        $i=1;
					    foreach($categories as $c){
                            echo "<tr>";
                                echo"<td>$i</td>";
                                echo"<td>".$c["name"]."</td>";
                                echo'<td ><a href="edit_category.php?id='.$c["id"].'"class="btn-btn-success">Edit</a></td>';
                                echo'<td ><a href="delete_category.php?id='.$c["id"].'"class="btn-btn-success">Delete</a></td>';
                            echo "<tr>";
                            $i++;
                        }
					?>
					<td ><a href="add_food.php?"class="btn-btn-success">Proceed</a></td>
				</table>
			</form>
		</fieldset>
		
	</body>
</html>
<html>


	
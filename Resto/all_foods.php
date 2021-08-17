<?php
    require_once 'Controllers/foodcontroller.php';
    $foods= getAllFoods();
?>
<html>
	<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="css/mystyle.css"></head>
	<body>
    <script src="ajax/food.js"></script>
		<fieldset>
		    <legend align="center"><h1> All Foods items:</h1></legend>
            <h5><?php echo $err_db; ?></h5>
            <input type="text" class="form-control" onkeyup="search(this)" placeholder="Search..." >
            <div id="suggestions">
            </div>
			<form action="" method="post">
				<table align="center" >
					<tr>
					    <td><b><i>Sl#:    <i><b></td>
					    <td><b><i>Name:   <i><b></td>
                        <td><b><i>Category:<i><b></td>
                        <td><b><i>Price: <i><b></td>
                        <td><b><i>Image: <i><b></td>
                        
            
						
						
					</tr>

                    <?php
                        $i=1;
					    foreach($foods as $f){
                            echo "<tr>";
                                echo"<td>$i</td>";
                                echo"<td>".$f["name"]."</td>";
                                echo"<td>".$f["c_name"]."</td>";
                                echo"<td>".$f["price"]."</td>";
                                echo"<td><img src='".$f["image"]."' width='100px' height='100px'></td>";
                                echo'<td ><a href="edit_food.php?id='.$f["id"].'"class="btn-btn-success">Edit</a></td>';
                                echo'<td ><a href="delete_food.php?id='.$f["id"].'"class="btn-btn-success">Delete</a></td>';
                            echo "<tr>";
                            $i++;
                        }
					?>
                    
				</table>
			</form>
		</fieldset>
        <a href="dashboard.php?"class="btn-btn-success">Back</a>
		
	</body>
</html>

<?php
    include 'Controllers/categorycontroller.php';
    $categories = getAllCategories();
?>
<html>
	<head></head>
	<body>
        
		<fieldset>
		    <legend align="center"><h1> All Student:</h1></legend>
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
                                echo'<td ><a href="edit_students.php?id='.$c["id"].'"class="btn-btn-success">Edit</a></td>';
                                echo'<td ><a href="delete_students.php?id='.$c["id"].'"class="btn-btn-success">Delete</a></td>';
                            echo "<tr>";
                            $i++;
                        }
					?>
				</table>
			</form>
		</fieldset>
		
	</body>
</html>
<?php
    require_once 'Controllers/productcontroller.php';
    $products= getAllProducts();
?>
<html>
	<head></head>
	<body>
        
		<fieldset>
		    <legend align="center"><h1> All Categories:</h1></legend>
            <h5><?php echo $err_db; ?></h5>
			<form action="" method="post">
				<table align="center" >
					<tr>
					    <td><b><i>Sl#: <i><b></td>
					    <td><b><i>Name: <i><b></td>
                        <td><b><i>Category: <i><b></td>
                        <td><b><i>Price: <i><b></td>
                        <td><b><i>Quantity: <i><b></td>
						
						
					</tr>

                    <?php
                        $i=1;
					    foreach($products as $p){
                            echo "<tr>";
                                echo"<td>$i</td>";
                                echo"<td><img src='".$p["image"]."' width='100px' height='100px'></td>";
                                echo"<td>".$p["name"]."</td>";
                                echo"<td>".$p["c_id"]."</td>";
                                echo"<td>".$p["price"]."</td>";
                                echo"<td>".$p["quantity"]."</td>";
                                echo'<td ><a href="edit_product.php?id='.$p["id"].'"class="btn-btn-success">Edit</a></td>';
                                echo'<td ><a href="delete_product.php?id='.$c["id"].'"class="btn-btn-success">Delete</a></td>';
                            echo "<tr>";
                            $i++;
                        }
					?>
				</table>
			</form>
		</fieldset>
		
	</body>
</html>
<?php
	require_once 'Controllers/ordercontroller.php';
	$orders = getAllOrders();
?>

<html>
	<head></head>
	<body>
        <script src="ajax/order.js"></script>
		<fieldset>
		    <p style="text-align:center"><b> See All Orders: </b></p>
			<input type="text" class="form-control" onkeyup="search(this)" placeholder="Search..." >
			<div id="suggestions">
            </div>
            <h5><?php echo $err_db; ?></h5>
			<form action="" method="post">
				<table align="center" >
					<tr>
					    <td><b><i>Sl#:    <i><b></td>
					    <td><b><i>Name:   <i><b></td>
                        <td><b><i>Foods:<i><b></td>
                        <td><b><i>Quantity: <i><b></td>
                        
            
						
						
					</tr>

                    <?php
				        $i=1;
				        foreach($orders as $o){
					        echo "<tr>";
						
						        echo "<td>$i</td>";
					            echo "<td>".$o["name"]."</td>";
						        echo "<td>".$o["f_name"]."</td>";
						        echo "<td>".$o["quantity"]."</td>";
						       
						
					        echo "</tr>";
					        $i++;
				        }
			        ?>
				</table>
			</form>
		</fieldset>
		
	</body>
</html>

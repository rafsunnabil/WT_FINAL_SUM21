<?php
    require_once 'Controllers/trackcontroller.php';
    $track = getAllStatus();
?>
<html>
	<head></head>
	<body>
        
		<fieldset>
		    <legend align="center"><h1> All Status:</h1></legend>
            <h5><?php echo $err_db; ?></h5>
			<form action="" method="post">
				<table align="center" >
					<tr>
					    <td><b><i>Sl#: <i><b></td>
					    <td><b><i>Status: <i><b></td>
						
						
					</tr>

                    <?php
                        $i=1;
					    foreach($track as $t){
                            echo "<tr>";
                                echo"<td>$i</td>";
                                echo"<td>".$t["status"]."</td>";
                                echo'<td ><a href="edit_status.php?id='.$t["id"].'"class="btn-btn-success">Edit</a></td>';
                                echo'<td ><a href="delete_status.php?id='.$t["id"].'"class="btn-btn-success">Delete</a></td>';
                            echo "<tr>";
                            $i++;
                        }
					?>
				</table>
			</form>
		</fieldset>
		
	</body>
</html>
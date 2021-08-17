<?php
    require_once 'Controllers/paymentcontroller.php';
    $pay= seeAllPayment();
?>
<html>
	<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="css/mystyle.css"></head></head>
	<body>
        
		<fieldset>
		    <legend align="center"><h1> All Payment:</h1></legend>
            <h5><?php echo $err_db; ?></h5>
			<form action="" method="post">
				<table align="center" >
					<tr>
					    <td><b><i>Sl#:    <i><b></td>
					    <td><b><i>Username:   <i><b></td>
                        <td><b><i>Pass:<i><b></td>
                        <td><b><i>Card: <i><b></td>
                        <td><b><i>Pin: <i><b></td>
                        <td><b><i>Amount: <i><b></td>
            
						
						
					</tr>

                    <?php
                        $i=1;
					    foreach($pay as $p){
                            echo "<tr>";
                                echo"<td>$i</td>";
                                echo"<td>".$p["uname"]."</td>";
                                echo"<td>".$p["pass"]."</td>";
                                echo"<td>".$p["card"]."</td>";
                                echo"<td>".$p["pin"]."</td>";
                                echo"<td>".$p["amount"]."</td>";
                                
                                echo'<td ><a href="deletepayment.php?uname='.$p["uname"].'"class="btn-btn-success">Edit</a></td>';
                            echo "<tr>";
                            $i++;
                        }
					?>
                    <a href="dashboard.php?"class="btn-btn-success">Back</a>
				</table>
			</form>
		</fieldset>
		
	</body>
</html>
<?php
    require_once 'Controllers/paymentcontroller.php';
	
	$pay = seeAllPayment();
	
?>
<html>
	<head></head>
	<body>
        
		<fieldset>
		    <legend align="center"><h1> Payment:</h1></legend>
            <h5><?php echo $err_db; ?></h5>
			<form action="" onsubmit="return validate()" method="post" >
				<table align="center" >
					<tr>
					    <td><b><i>Username: <i><b></td>
						<td><input type="text" id="name" name="uname" value="<?php echo $uname; ?>"></td>
						<td><span id="err_uname"><small><?php echo $err_uname;?><small></span></td>
						
					</tr>
					<tr>
					    <td><b><i>Password: <i><b></td>
						<td><input type="text" id="pass" name="pass" value="<?php echo $pass; ?>"></td>
						<td><span id="err_pass"><small><?php echo $err_pass;?><small></span></td>
						
					</tr>
					<tr>
					    <td><b><i>Card: <i><b></td>
						<td><input type="text" id="card" name="card" value="<?php echo $card; ?>"></td>
						<td><span id="err_card"><small><?php echo $err_card;?><small></span></td>
						
					</tr>
					<tr>
					    <td><b><i>Pin: <i><b></td>
						<td><input type="text" id="pin" name="pin" value="<?php echo $pin; ?>"></td>
						<td><span id="err_pin"><small><?php echo $err_pin;?><small></span></td>
						
					</tr>
                    
                    <tr>
					    <td><b><i>Amount: <i><b></td>
						<td><input type="text" id="amount" name="amount" value="<?php echo $amount; ?>"></td>
						<td><span id="err_amount"><small><?php echo $err_amount;?><small></span></td>
						
					</tr>
                    
                    
					
					<tr>
					    <br><td align="center" colspan="3"><br><br><input type="submit" name="payment" value="PAY"></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
		<script src="js/payment.js"></script>
	</body>
</html>
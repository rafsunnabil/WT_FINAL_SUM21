<?php
    
	require_once 'mainheader.php';
	require_once 'Controllers/foodcontroller.php';
	require 'Controllers/paymentcontroller.php';
	require 'Controllers/customercontroller.php';
	$pay = seeAllPayment();
?>
<html>
	<head>
	<style> 
		body {
		border: 1px solid black;
		background: url('Storage/images/c.jpg');
		background-size: 1920px 850px;
		background-repeat: no-repeat;
		opacity: 0.95;
		padding: 15px;}
	</style>
		<script>
			function checkSubmission(){
	alert("Please press the button again to confirm your payment")
}
			var hasError=false;
			function get(id){
				return document.getElementById(id);
			}
			function validate(){
				
				refresh();
				if(get("uname").value == ""){
					hasError = true;
					get("err_uname").innerHTML = "*Username Required";
				}
				else if(get("uname").value.length <= 2){
					hasError = true;
					get("err_uname").innerHTML = "*Userame must be > 2 characters";
				}
				if(get("pass").value == ""){
					hasError = true;
					get("err_pass").innerHTML = "*pass Required";
				}
				if(get("card").value == ""){
					hasError = true;
					get("err_card").innerHTML = "*card number Required";
				}
				if(get("pin").value == ""){
					hasError = true;
					get("err_pin").innerHTML = "*pin Required";
				}
				if(get("amount").value == ""){
					hasError = true;
					get("err_amount").innerHTML = "*amount Required";
				}
			return !hasError;
			}
			function refresh(){
				hasError=false;
				get("err_uname").innerHTML="";
				get("err_pass").innerHTML = "";
				get("err_card").innerHTML = "";
				get("err_pin").innerHTML = "";
				get("err_amount").innerHTML = "";

				
		
				
				
			}
		</script>
	</head>
	<body>
		<fieldset>
		    <legend style="color:red" align="center"><h1> Payment</h1></legend>
            <h5><?php echo $err_db; ?></h5>
			<form action="" onsubmit="return validate()" method="post">
				<table align="center" >
					<tr>
					    <td style="color:blue"><b><i>Username: <i><b></td>
						<td><input type="text" id="uname" name="uname" value="<?php echo $_SESSION ["uname"]; ?>"></td>
						<td><span id="err_uname"><small><?php echo $err_uname;?><small></span></td>
						
					</tr>
					<tr>
					    <td style="color:blue"><b><i>Password: <i><b></td>
						<td><input type="text" id="pass" name="pass" value="<?php echo $pass; ?>"></td>
						<td><span id="err_pass"><small><?php echo $err_pass;?><small></span></td>
						
					</tr>
					<tr>
					    <td style="color:blue"><b><i>Card: <i><b></td>
						<td><input type="text" id="card" name="card" value="<?php echo $card; ?>"></td>
						<td><span id="err_card"><small><?php echo $err_card;?><small></span></td>
						
					</tr>
					<tr>
					    <td style="color:blue"><b><i>Pin: <i><b></td>
						<td><input type="text" id="pin" name="pin" value="<?php echo $pin; ?>"></td>
						<td><span id="err_pin"><small><?php echo $err_pin;?><small></span></td>
						
					</tr>
                    
                    <tr>
					    <td style="color:blue"><b><i>Amount: <i><b></td>
						<td><input type="text" onfocusout="checkSubmission()" id="amount" name="amount" value="<?php echo $amount; ?>"></td>
						<td><span id="err_amount"><small><?php echo $err_amount;?><small></span></td>
						
					</tr>
                    
                    
					
					<tr>
					    <br><td align="center" colspan="3"><br><br><input type="submit" name="payment" value="payment"></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
		
	</body>
</html>
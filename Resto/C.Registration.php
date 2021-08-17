
<?php
	require'Controllers/customercontroller.php';		
?>

<html>
	<head><title>Customer Registration</title>
	<link rel="stylesheet" href="css/resto.css">
	<script>
	 var hasError=false;
		function get(id){
		  return document.getElementById(id);
		}
	function validate(){
				
		refresh();
		if(get("name").value == ""){
			hasError = true;
			get("err_name").innerHTML = "*Name Req";
		}
		else if(get("name").value.length <= 2){
			hasError = true;
			get("err_name").innerHTML = "*Name must be > 2 characters";
		}
		if(get("uname").value == ""){
			hasError = true;
			get("err_uname").innerHTML = "*Username Req";
		}
		else if(get("uname").value.length <= 2){
			hasError = true;
			get("err_uname").innerHTML = "*UserName must be > 2 characters";
		}
		if(get("pass").value==""){
			hasError=true;
			get("err_pass").innerHTML="*Password Req";
		}
		else if (get("pass").value.length <=4){
			hasError=true;
			get("err_pass").innerHTML="*Password must be > 4 digits";
		}
		
		
		
		if(get("phone").value == ""){
			hasError = true;
			get("err_phone").innerHTML = "*Phone Number Req";
		}
		else if(get("phone").value.length ==10 ){
			hasError = true;
			get("err_phone").innerHTML = "*Phone Number must be in 11 characters";
		}
		if(get("address").value == ""){
			hasError = true;
			get("err_address").innerHTML = "*Address Req";
		}
		if(get("email").value == ""){
			hasError = true;
			get("err_email").innerHTML = "*Email Req";
		}
		
		
				
				
		return !hasError;
	}
		function refresh(){
			hasError=false;
			get("err_name").innerHTML="";
			get("err_uname").innerHTML="";
			get("err_pass").innerHTML="";
			get("err_phone").innerHTML="";
			get("err_address").innerHTML="";
		}
	 </script>
	</head>
	<body class="text ; body">
	
		
		    
			<div class="center-login">
			<center>
			
			<?php include'customerheader.php';?>
			<h3><?php echo $err_db;?></h3>
			<h1>Customer Registration</h1>
		
			<form action="" onsubmit="return validate()" method="POST">
				<table >
					<tr>
					
						<td><input type="text" id="name"  name="name" value="<?php echo $name;?>" placeholder="Name" class="text my-text-field"></td>
						<td><span id="err_name"><?php echo $err_name;?></span></td>
						
					</tr>
					<tr>
						
						<td><input type="text" id="uname"  name="uname" value="<?php echo $uname;?>" placeholder="Username" class="text my-text-field"></td>
						<td><span id="err_uname"> <?php echo $err_uname;?></span></td>
					</tr>
					<tr>
						
						<td><input type="text" id="email" name="email" value="<?php echo $email;?>" placeholder="Email id" class="text my-text-field"></td>
						<td><span id="err_email"><?php echo $err_email;?></span></td>
					</tr>
					<tr>
						
						<td><input type="password" id="pass" name="pass" value="<?php echo $pass;?>" placeholder="Password" class="text my-text-field"></td>
						<td><span id="err_pass"><?php echo $err_pass;?></span></td>
					</tr>
					
					<tr>
						
						<td><input type="text" id="phone"name="phone" value="<?php echo $phone;?>" placeholder="Phone number" class="text my-text-field"></td>
						<td><span id="err_phone"><?php echo $err_phone;?></span></td>
					</tr>
					<tr>
						<td><textarea value="<?php echo $address;?>" id="address"name="address" placeholder="Address" class="text my-text-field"></textarea></td>
						<td><span id="err_address"><?php echo $err_address;?></span></td>
					</tr>
					 
					
				</table>
				<br>
				<a align="right"colspan="2"><input type="submit" name="sign_up" value="sign_up" class="btn-mine" 
				style="width:185px;font-family:consolas;margin-top:5px;"></a>
				<tr>
					    <td align= "center" colspan="3" rowspan="3"><br><br><b>Already Have an account?</b> <a href ="CustomerLogin.php" >Login</a></td>
				</tr>		
						
						
			</form>
			</div>
			</center>
		
		
<?php include'customerfooter.php';?>

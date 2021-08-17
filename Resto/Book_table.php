<?php 
      require_once 'mainheader.php';
      require 'Controllers/table_controllers.php';
      require 'Controllers/customercontroller.php';
	//session_start();
	//include_once 'header.php';
?>

<html>
	<head>
	<style> 
		body {
		border: 1px solid black;
		background: url('Storage/images/t.jpg');
		background-size: 1920px 720px;
		background-repeat: no-repeat;
		opacity: 0.95;
		padding: 15px;}
	</style>
	
		<script>
			function checkSubmission(){
				alert("Please press the button again to confirm your Reservation")
			}
			function get(id){
		return	 document.getElementById(id);
	}
	function loadDoc(){
		var xhr = new XMLHttpRequest();
		xhr.open("GET","my_profile.php",true);
		xhr.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				get("demo").innerHTML = this.responseText;
			}
		};
		xhr.send();
		
	}
			var hasError=false;
			function get(id){
				return document.getElementById(id);
			}
			function validate(){
				
				refresh();
				if(get("name").value == ""){
					hasError = true;
					get("err_name").innerHTML = "*Name Required";
				}
				else if(get("name").value.length <= 2){
					hasError = true;
					get("err_name").innerHTML = "*Name must be > 2 characters";
				}
				if(get("day").selectedIndex==0){
					hasError = true;
					get("err_ddate").innerHTML = "*Day Required";
				}
				if(get("month").selectedIndex==0){
					hasError = true;
					get("err_mdate").innerHTML = "*Month Required";
				}	
				if(get("Timeis").selectedIndex==0){
					hasError = true;
					get("err_time").innerHTML = "*Time Required";
				}
				if(get("phone").value == ""){
					hasError = true;
					get("err_phone").innerHTML = "*Phone Required";
				}
				else if(get("phone").value.length <= 11){
					hasError = true;
					get("err_phone").innerHTML = "*Phone number must be > 10 characters";
				}
				if(get("sizeis").selectedIndex==0){
					hasError = true;
					get("err_size").innerHTML = "*Size Required";
				}
			return !hasError;
			}
			function refresh(){
				hasError=false;
				get("err_name").innerHTML="";
				get("err_ddate").innerHTML = "";
				get("err_mdate").innerHTML = "";
				get("err_time").innerHTML = "";
				get("err_phone").innerHTML = "";
				get("err_size").innerHTML = "";
				
		
				
				
			}
		</script>
	</head>
	<body>
	<marquee directon="left" class="word">
<p style="font-size:25px;">** Welcome to ABC Restaurant**</p>
</marquee>
	
		<fieldset>
		<legend style="color:red" align="center" ><h2 style="font-size:25px;">Table Reservation</h2></legend>
			<form action="" onsubmit="return validate()" method="post">
			<center>
				<table >
					
					
					
					<tr>
						<td><b>Name: </td>
						<td><input type="text" id="name" name="name" value="<?php echo $_SESSION ["uname"]/*$name;*/?>" placeholder="Name"></td>
						<td><span id="err_name"><?php echo $err_name;?></span></td>
						
					</tr>
					
					<tr>
						<td><b>Date:</td>
						<td>
							<select id="day" name="day">
								<option selected disabled>--Day--</option>
								<?php
									foreach($day as $pf){
										if($ddate == $pf)
											echo "<option selected>$pf</option>";
										else
											echo "<option>$pf</option>";
									}
								?>
							</select>
							<select id="month" name="month">
								<option selected disabled>--Month--</option>
								<?php
									foreach($month as $pf){
										if($mdate == $pf)
											echo "<option selected>$pf</option>";
										else
											echo "<option>$pf</option>";
									}
								?>
							</select>
						</td>
						<td><span id="err_ddate"><?php echo $err_ddate;?></span></td>
						<td><span id="err_mdate"><?php echo $err_mdate;?></span></td>
					</tr>
					<tr>
						<td><b>Time:  </td>
						<td>
							<select id="Timeis" name="Timeis">
								<option selected disabled>--Select--</option>
								<?php
									foreach($Timeis as $pf){
										if($time == $pf)
											echo "<option selected>$pf</option>";
										else
											echo "<option>$pf</option>";
									}
								?>
							</select> 
						</td>
						<td><span id="err_time"><?php echo $err_time;?></span></td>
					</tr>
					<tr>
						<td><b>Phone: </td>
						<td><input type="text" id="phone" name="phone" value="<?php echo $phone;?>" placeholder="Phone"></td>
						<td><span id="err_phone"><?php echo $err_phone;?></span></td>
						
					</tr>
					<tr>
						<td><b>Party Size:  </td>
						<td>
							<select onfocusout="checkSubmission()" id="sizeis" name="sizeis">
								<option selected disabled>--Select--</option>
								<?php
									foreach($sizeis as $pf){
										if($size == $pf)
											echo "<option selected>$pf</option>";
										else
											echo "<option>$pf</option>";
									}
								?>
							</select> 
						</td>
						<td><span id="err_size"><?php echo $err_size;?></span></td>
					</tr>
					<tr>
						<td align="right" colspan="2"><input type="submit"  value="Book now"></td>
	
					</tr>
				</table>
				</center>
			</form>
		</fieldset>
	</body>
</html>
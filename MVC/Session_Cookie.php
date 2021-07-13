<?php
	session_start();
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$hasError=false;
	
	$users=array("nabil"=>"1234","rafsun"=>"1234");
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["uname"])){
			$err_uname = " Username Required";
			$hasError = true;
		}
		else{
			$uname=$_POST["uname"];
		}
		if(empty($_POST["pass"])){
			$err_pass="Password Required";
			$hasError=true;
		}
		else{
			$pass=$_POST["pass"];
		}
		
		if(!$hasError){
			foreach($users as $u=>$p){
				if($uname == $u && $pass==$p){
					$_SESSION["loggeduser"] = $uname;
					header("Location: dashboard.php");
				}
			}
			echo "Invalid user";
		}
	} 
?>
<html>
	<body>
		<form action="" method="post">
			Username: <input type="text" placeholder="Username" value="<?php echo $uname;?>" name="uname"><span><?php echo $err_uname;?></span><br>
			Password: <input type="password" placeholder="Password" value="<?php echo $pass;?>" name="pass"><span><?php echo $err_pass;?></span><br>
			<input type="submit" name="login" value="Login">
		</form>
	</body>
<html>
<?php
	include 'models/db_config.php';
    $name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$email="";
	$err_email="";
	$pass="";
	$err_pass="";
	$err_db="";
	$hasError=false;
	
	if(isset($_POST["sign_up"])){
		
		if(empty($_POST["name"])){
			$err_name="*Name Required";
			$hasError = true;
		}
		else{
			$name=$_POST["name"];
		}
		if(empty($_POST["uname"])){
			$err_uname="*Username Required";
			$hasError = true;
		}
		else{
			$uname=$_POST["uname"];
		}
		if(empty($_POST["email"])){
			$err_email="*email Required";
			$hasError = true;
		}
		else{
			$email=$_POST["email"];
		}
		if(empty($_POST["pass"])){
			$err_pass="*pass Required";
			$hasError = true;
		}
		else{
			$pass=$_POST["pass"];
		}
		
		if(!$hasError){
		  $rs= insertUser($name,$uname,$_POST["email"],$_POST["pass"]);	
		  //var_dump($rs);
		  if($rs===true){
			  header("Location: CustomerLogin.php");
		  }
		  $err_db= $rs;
		  
		}
      
	}
	function insertUser($name,$uname,$email,$pass){
		  $query =  "insert into users values (NULL,'$name','$uname','$email','$pass')";
		  return execute($query);
		  
	}
	function authenticateUser($uname,$pass){
		  $query =  "select * from users where username='uname' and password=''";
	}
	  

?>
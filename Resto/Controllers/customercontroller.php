<?php
 require_once 'Models/db_config.php';
 session_start();
    $name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$email="";
	$err_email="";
	$pass="";
	$err_pass="";
	$phone="";
	$err_phone="";
	$address="";
	$err_address="";
	
	
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
			$err_email="*Email Required";
			$hasError = true;
		}
		else{
			$email=$_POST["email"];
		}
		if(empty($_POST["pass"])){
			$err_pass="*Password Required";
			$hasError = true;
		}
		else{
			$pass=$_POST["pass"];
		}
		if(empty($_POST["phone"])){
			$err_phone="*Phone Number Required";
			$hasError = true;
		}
		else{
			$phone=$_POST["phone"];
		}
		if(empty($_POST["address"])){
			$err_address="*Address Required";
			$hasError = true;
		}
		else{
			$address=$_POST["address"];
		}
		if(!$hasError){
		  $rs= insertUser($name,$uname,$email,$pass,$phone,$address);	
		  //var_dump($rs);
		  if($rs===true){
			  /*$_SESSION["name"]=$name;
			  $_SESSION["email"]=$email;
			  $_SESSION["phone"]=$phone;
			  $_SESSION["address"]=$address;*/
			  header("Location: CustomerLogin.php");
		  }
		  
		  $err_db= $rs;
		  
		}
      
	}
	else if(isset($_POST["Login"])){
		if(empty($_POST["uname"])){
			$err_uname="*Username Required";
			$hasError = true;
		}
		else{
			$uname=$_POST["uname"];
		}
		if(empty($_POST["pass"])){
			$err_pass="*Password Required";
			$hasError = true;
			
		}
		else{
			$pass=$_POST["pass"];
		}
		 
		if(!$hasError){
		    if(authenticateUser($_POST["uname"],$_POST["pass"])){
			//session_start();
			//$_SESSION["name"]=$_POST["name"];
			//$_SESSION["uname"]=$name;
			$_SESSION["uname"]=$uname;
			
			
		
			header("Location: C.Dashboard.php");
		
		}
		
		
		
		 $err_db= "Username & Password Invalid!";
	}
	
}

else if(isset($_POST["edit_profile"])){
	 if(empty($_POST["name"])){
			$err_name="*Name Required";
			$hasError = true;
		}
		else{
			$name=$_POST["name"];
		}
		if(!$hasError){	
		 
		 $rs=updateProfile($_POST["id"],$_POST["name"],$_POST["username"],$_POST["email"],$_POST["phonenumber"],$_POST["address"]);
		 if($rs===true){
			 //$_SESSION["name"]=$_POST["name"];
			   header("Location: allusers.php");
		   }
		   $err_db= $rs;
		}
	}	
	
	

    
	function insertUser($name,$uname,$email,$pass,$phone,$address)	{
		  $query =  "insert into cusers values (NULL,'$name','$uname','$email','$pass','$phone','$address')";
		  return execute($query);
		  
	  }
	  //User authentication function for login
	  function authenticateUser($uname,$pass){
		  $query ="select * from cusers where username='$uname' and password='$pass'";
          $rs= get($query);
         if(count($rs)>0){
			 return true; 
		 }
          return false;		 
	  }
	
	  
	 function getAlluser(){
	 $query="select id,name,username,email,phonenumber,address from cusers";
	 $rs= get($query);
	 return $rs;
 } 
 function getUser($id){
	 $query="select * from cusers where id=$id";
	 $rs= get($query);
	 return $rs[0]; 
 }
	  

	function updateProfile($id,$name,$uname,$email,$phone,$address)
	{
		$query="update cusers set name='$name',username='$uname',email='$email',phonenumber='$phone',address='$address' where id=$id";
		return execute($query);
    }
	
	  

?>
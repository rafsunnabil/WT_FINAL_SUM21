<?php
	require_once 'Models/db_config.php';

    
    
    $uname="";
    $err_uname="";
    $pass="";
    $err_pass="";
	$card="";
    $err_card="";
    $pin="";
    $err_pin="";
    $amount="";
    $err_amount="";

	$err_db="";

	if(isset($_POST["payment"])){
        if(empty($_POST["uname"])){
			$err_uname="Valid Username Required";
			$hasError = true;
		}
		else{
			$uname=$_POST["uname"];
        }
        
		if(empty($_POST["pass"])){
			$err_pass="Insert Valid Password";
			$hasError = true;
		}
		else{
			$pass=$_POST["pass"];
        }
		if(empty($_POST["card"])){
			$err_card="Valid Card Required";
			$hasError = true;
		}
        elseif(!is_numeric($_POST["card"])){
			$err_card="[Card Number should contain Numeric values only]";
            $hasError = true;
        }
        elseif (strlen($_POST["card"]) <= 16) 
		{
            $err_card = "Card number must be contain 16 digits";
			$hasError = true;
		}	
		else{
			$card=$_POST["card"];
		}
        if(empty($_POST["pin"])){
			$err_pin="Valid pin Required";
			$hasError = true;
		}
        elseif(!is_numeric($_POST["pin"])){
			$err_pin="[Pin Number should contain Numeric values only]";
            $hasError = true;
        }
        elseif (strlen($_POST["pin"]) <= 4) 
		{
            $err_pin = "Pin number must be contain 4 digits";
			$hasError = true;
		}	
		else{
			$pin=$_POST["pin"];
		}
        if(empty($_POST["amount"])){
			$err_amount="Insert Amount";
			$hasError = true;
		}
		else{
			$amount=$_POST["amount"];
        }
		
        if(!$hasError){
			$rs=insertPayment($_POST["uname"],$_POST["pass"],$_POST["card"],$_POST["pin"],$_POST["amount"]);
			if($rs===true){
				header("Location: allpayment.php");
			}
			$err_db= $rs;
        }
    }
	else if (isset($_POST["delete_payment"])){
        if(empty($_POST["uname"])){
			$err_uname="Valid Username Required";
			$hasError = true;
		}
		else{
			$uname=$_POST["uname"];
        }
        
		if(empty($_POST["pass"])){
			$err_="Insert Valid Password";
			$hasError = true;
		}
		else{
			$pass=$_POST["pass"];
        }
		if(empty($_POST["card"])){
			$err_card="Valid Card Required";
			$hasError = true;
		}
        elseif(!is_numeric($_POST["card"])){
			$err_card="[Card Number should contain Numeric values only]";
            $hasError = true;
        }
        elseif (strlen($_POST["card"]) <= 16) 
		{
            $err_card = "Card number must be contain 16 digits";
			$hasError = true;
		}	
		else{
			$card=$_POST["card"];
		}
        if(empty($_POST["pin"])){
			$err_pin="Valid pin Required";
			$hasError = true;
		}
        elseif(!is_numeric($_POST["pin"])){
			$err_pin="[Pin Number should contain Numeric values only]";
            $hasError = true;
        }
        elseif (strlen($_POST["pin"]) <= 4) 
		{
            $err_pin = "Pin number must be contain 4 digits";
			$hasError = true;
		}	
		else{
			$pin=$_POST["pin"];
		}
        if(empty($_POST["amount"])){
			$err_amount="Insert Amount";
			$hasError = true;
		}
		else{
			$amount=$_POST["amount"];
        }
		
        if(!$hasError){
			
            $rs = deletePayment($_POST["id"]);
		    if($rs === true){
			header("Location: allpayment.php");
			}
		}
		$db_err = $rs;
		
	}
	
	function insertPayment($uname,$pass,$card,$pin,$amount){
		$query = "insert into payment values (NULL,'$uname','$pass','$card','$pin','$amount')";
		return execute($query);
	}
	function seeAllPayment(){
		$query = "select * from payment";
		$rs = get($query);
		return $rs;
	}
	function getPayment($id){
		$query = "select * from payment where username='$id'";
		$rs = get($query);
		return $rs[0];
	}
	function deletePayment($uname){
		$query = "DELETE FROM payment WHERE username='$uname'";
		return execute($query);
	}
	function checkUsername($uname){
		$query = "select username from payment where username='$uname'";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		else return false;
	}
    
?>
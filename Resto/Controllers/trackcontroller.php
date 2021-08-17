<?php
    require_once 'Models/db_config.php';
	$status="";
	$err_status="";
	$err_db="";
    

	$hasError=false;
	

	if(isset($_POST["status"])){

        if(empty($_POST["status"])){
			$err_status="status Required";
			$hasError = true;
		}
		else{
			$status=$_POST["status"];
        }
        if(!$hasError){
			
			$rs=insertStatus($_POST["status"]);
			if($rs===true){
				header("Location: dashboard.php");
			}
			$err_db= $rs;
			
		}
    

    }
	else if (isset ($_POST["update_status"])){
		if(empty($_POST["status"])){
			$err_status="status Required";
			$hasError = true;
		}
		else{
			$status=$_POST["status"];
        }
        if(!$hasError){
			
			$rs=updateStatus($_POST["status"],$_POST["id"]);
			if($rs===true){
				header("Location: dashboard.php");
			}
			$err_db= $rs;
		}
		

	}
	else if (isset ($_POST["delete_status"])){
		if(empty($_POST["status"])){
			$err_status="status Required";
			$hasError = true;
		}
		else{
			$status=$_POST["status"];
        }
        if(!$hasError){
			
			$rs=deleteStatus($_POST["id"]);
			if($rs===true){
				header("Location: dashboard.php");
			}
			$err_db= $rs;
		}
		

	}

    function insertStatus($status){
		$query= "insert into track values (NULL,'$status')";
		return execute($query);	
	}
    
    function getAllStatus(){
		$query= "select * from track ";
        $rs = get($query);
		return $rs;	
	}

    function getStatus($id){
		$query= "select * from track where id=$id";
        $rs = get($query);
		return $rs[0];	
	}
	function updateStatus($status,$id){
		$query= "update track set status='$status' where id=$id";
		return execute($query);
	}
	function deleteStatus($id){
		$query= "delete from track where id=$id";
		return execute($query);
	}
?>
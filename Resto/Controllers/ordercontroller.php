<?php
    require_once 'Models/db_config.php';
	
	
    $name="";
	$err_name="";
    $qty="";
    $err_qty="";
	$f_id="";
    $err_f_id="";
	$err_db="";

    $hasError=false;
	

	if(isset($_POST["place_order"])){
        if(empty($_POST["name"])){
			$err_name="name Required";
			$hasError = true;
		}
		else{
			$name=$_POST["name"];
        }
        
		if(empty($_POST["quantity"])){
			$err_qty="Insert quantity";
			$hasError = true;
		}
		elseif(!is_numeric($_POST["quantity"])){
			$err_qty="[Quantity should contain Numeric values only]";
			$hasError = true;
		}
		
		else{
			$qty=$_POST["quantity"];
        }
		if(empty($_POST["f_id"])){
			$err_f_id="Valid Id Required";
			$hasError = true;
		}
		else{
			$f_id=$_POST["f_id"];
		}
		
        if(!$hasError){
			$rs=placeOrders($_POST["name"],$_POST["quantity"],$_POST["f_id"]);
			if($rs===true){
				header("Location: all_orders.php");
			}
			$err_db= $rs;
			
		}
		else if (isset ($_POST["customize_order"])){
			if(empty($_POST["name"])){
				$err_name="name Required";
				$hasError = true;
			}
			else{
				$name=$_POST["name"];
			}
			
			if(empty($_POST["quantity"])){
				$err_qty="Insert quantity";
				$hasError = true;
			}
			elseif(!is_numeric($_POST["quantity"])){
				$err_qty="[Quantity should contain Numeric values only]";
				$hasError = true;
			}
			else{
				$qty=$_POST["quantity"];
			}
			if(empty($_POST["f_id"])){
				$err_f_id="Valid Id Required";
				$hasError = true;
			}
			else{
				$f_id=$_POST["f_id"];
			}
			if(!$hasError){
				
				$rs=updateOrders($_POST["name"],$id,$_POST["f_id"],$_POST["quantity"]);
				if($rs===true){
					header("Location: all_orders.php");
				}
				$err_db= $rs;
			}
			
	
		}
		else if (isset ($_POST["delete_orders"])){
			if(empty($_POST["name"])){
				$err_name="name Required";
				$hasError = true;
			}
			else{
				$name=$_POST["name"];
			}
			if(!$hasError){
				
				$rs=deleteOrders($_POST["id"]);
				if($rs===true){
					header("Location: all_orders.php");
				}
				$err_db= $rs;
			}
		}
	}

    function placeOrders($name,$qty,$f_id){
		$query= "insert into orders values (NULL,$f_id,'$name',$qty)";
		echo $query;
		return execute($query);	
	}
    function getAllOrders(){
		$query= "select o.*,f.name as 'f_name' from orders o left join foods f on f.id = o.f_id ";
        $rs = get($query);
		return $rs;	
	}

    function getOrders($id){
		$query= "select * from orders where id=$id";
        $rs = get($query);
		return $rs[0];	
	}
	function updateOrders($name,$qty,$f_id,$id){
		$query= "update orders set name='$name', f_id=$f_id, qty=$qty where id=$id";
		return execute($query);
	}
	function deleteOrders($id){
		$query= "delete from orders where id=$id";
		return execute($query);
	}
	function search($key){
		$query= "select o.id,o.name from orders o left join foods f on f.id = o.f_id where o.name like '%$key%' or f.name like '%$key%'";
		$rs = get($query);
		return $rs;
	}
?>
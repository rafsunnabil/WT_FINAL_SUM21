<?php
    require_once 'Models/db_config.php';
	
	$id="";
    $name="";
	$err_name="";
    $c_id="";
    $err_c_id="";
    $price="";
    $err_price="";
    $rec="";
    $err_rec="";
    $img="";
    $err_img="";
	$err_db="";

    $hasError=false;
	

	if(isset($_POST["add_food"])){
        if(empty($_POST["name"])){
			$err_name="Name Required";
			$hasError = true;
		}
		else{
			$name=$_POST["name"];
        }
        if(empty($_POST["c_id"])){
			$err_c_id="Valid Id Required";
			$hasError = true;
		}
		else{
			$c_id=$_POST["c_id"];
        }
		if(empty($_POST["price"])){
			$err_price="Insert Price";
			$hasError = true;
		}
		else{
			$price=$_POST["price"];
        }
		if(empty($_POST["recipy"])){
			$err_rec="Insert Recipy";
			$hasError = true;
		}
		else{
			$rec=$_POST["recipy"];
        }
		
		
        if(!$hasError){

			$fileType=strtolower(pathinfo(basename($_FILES["image"]["name"]), PATHINFO_EXTENSION));
			    $file = "storage/food_images/".uniqid()."$fileType";
				move_uploaded_file($_FILES["image"]["tmp_name"],$file);
			
			$rs=insertFood($_POST["name"],$_POST["c_id"],$_POST["price"],$_POST["recipy"],$file);
			if($rs===true){
				header("Location: all_foods.php");
			}
			$err_db= $rs;
			
			

			
		}
		else if (isset ($_POST["edit_food"])){
			if(empty($_POST["name"])){
				$err_name="Name Required";
				$hasError = true;
			}
			else{
				$name=$_POST["name"];
			}
			if(empty($_POST["c_id"])){
				$err_c_id="Valid Id Required";
				$hasError = true;
			}
			else{
				$c_id=$_POST["c_id"];
			}
			if(empty($_POST["price"])){
				$err_price="Insert Price";
				$hasError = true;
			}
			else{
				$price=$_POST["price"];
			}
			if(empty($_POST["recipy"])){
				$err_rec="Insert Recipy";
				$hasError = true;
			}
			else{
				$rec=$_POST["recipy"];
			}
			}
			if(!$hasError){
				
				$rs=updateFoods($_POST["name"],$_POST["c_id"],$_POST["price"],$_POST["recipy"],$file,$id);
				if($rs===true){
					header("Location: all_foods.php");
				}
				$err_db= $rs;
			}
			
	
		}
		else if (isset ($_POST["delete_food"])){
			if(empty($_POST["name"])){
				$err_name="Name Required";
				$hasError = true;
			}
			else{
				$name=$_POST["name"];
			}
			if(!$hasError){
				
				$rs=deleteFoods($_POST["id"]);
				if($rs===true){
					header("Location: all_foods.php");
				}
				$err_db= $rs;
		}

    }
	else if (isset ($_POST["Conform_Order"])){
		if(!$hasError){
		   
			{
				header("Location: payment.php");
			}
			$err_db= $rs;
	}
}

    function insertFood($name,$c_id,$price,$rec,$img){
		$query= "insert into foods values (NULL,'$name',$c_id,$price,'$rec','$img')";
		return execute($query);	
	}
    function getAllFoods(){
		$query= "select f.*,c.name as 'c_name' from foods f left join categories c on c.id = f.c_id ";
        $rs = get($query);
		return $rs;	
	}

    function getFoods($id){
		$query= "select * from foods where id=$id";
        $rs = get($query);
		return $rs[0];	
	}
	function updateFoods($name,$c_id,$price,$rec,$img,$id){
		$query= "update foods set name='$name', c_id=$c_id, price=$price, recipy='$rec', image='$img' where id=$id";
		return execute($query);
	}
	function deleteFoods($id){
		$query= "delete from foods where id=$id";
		return execute($query);
	}
	function search($key){
		$query= "select f.id,f.name from foods f left join categories c on c.id = f.c_id where f.name like '%$key%' or c.name like '%$key%'";
		$rs = get($query);
		return $rs;
	}
?>
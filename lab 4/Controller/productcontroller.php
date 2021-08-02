<?php
    require_once 'Models/db_config.php';
	
    $name="";
	$err_name="";
    $c_id="";
    $err_c_id="";
    $price="";
    $err_price="";
    $qty="";
	$err_qty="";
    $desc="";
    $err_desc="";
    $img="";
    $err_img="";
	$err_db="";

    $hasError=false;
	

	if(isset($_POST["add_products"])){
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
		if(empty($_POST["q"])){
			$err_price="Insert Price";
			$hasError = true;
		}
		else{
			$price=$_POST["price"];
        }
		if(empty($_POST["quantity"])){
			$err_qty="Insert product quantity";
			$hasError = true;
		}
		else{
			$qty=$_POST["quantity"];
        }
		if(empty($_POST["description"])){
			$err_desc="Insert description";
			$hasError = true;
		}
		else{
			$desc=$_POST["description"];
        }
		
		
        if(!$hasError){

			$fileType=strtolower(pathinfo(basename($_FILES["image"]["name"]), PATHINFO_EXTENSION));
			    $file = "storage/product_images/".uniqid()."$fileType";
				move_uploaded_file($_FILES["image"]["tmp_name"],$file);
			
			$rs=insertProduct($_POST["name"],$_POST["c_id"],$_POST["price"],$_POST["quantity"],$_POST["description"],$file);
			if($rs===true){
				header("Location: all_products.php");
			}
			$err_db= $rs;
			
			

			
		}

    }

    function insertProduct($name,$c_id,$price,$qty,$desc,$img){
		$query= "insert into products values (NULL,'$name',$c_id,$price,$qty,'$desc','$img')";
		return execute($query);	
	}
    function getAllProducts(){
		$query= "select p.*,c.name from products p left join categories c on c.id = p.c_id ";
        $rs = get($query);
		return $rs;	
	}

    function getProducts($id){
		$query= "select * from products where id=$id";
        $rs = get($query);
		return $rs[0];	
	}
	function updateProducts($name,$c_id,$price,$qty,$desc,$img,$id){
		$query= "update products set name='$name', c_id=$c_id, price=$price, quantity=$qty, description='$desc' where id=$id";
		return execute($query);
	}
	function deleteProducts($id){
		$query= "delete from products where id=$id";
		return execute($query);
	}
	function search($key){
		$query= "select id,name from products where name like '%$key%'";
		$rs = get($query);
		return $rs;
	}
?>
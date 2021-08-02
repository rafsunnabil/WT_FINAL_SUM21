<?php
    include 'Models/db_config.php';
    $name="";
	$err_name="";
	$err_db="";

	$hasError=false;
	

	if(isset($_POST["add_students"])){

        if(empty($_POST["name"])){
			$err_name="Name Required";
			$hasError = true;
		}
		else{
			$name=$_POST["name"];
        }
        if(!$hasError){
			
			$rs=insertCategory($_POST["name"]);
			if($rs===true){
				header("Location: all_students.php");
			}
			$err_db= $rs;
			
		}
    

    }
	else if (isset ($_POST["edit_students"])){
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$hasError = true;
		}
		else{
			$name=$_POST["name"];
        }
        if(!$hasError){
			
			$rs=updateCategory($_POST["name"],$_POST["id"]);
			if($rs===true){
				header("Location: all_students.php");
			}
			$err_db= $rs;
		}
		

	}
	else if (isset ($_POST["delete_students"])){
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$hasError = true;
		}
		else{
			$name=$_POST["name"];
        }
        if(!$hasError){
			
			$rs=deleteCategory($_POST["id"]);
			if($rs===true){
				header("Location: all_students.php");
			}
			$err_db= $rs;
		}
		

	}

    function insertCategory($name){
		$query= "insert into student values (NULL,'$name')";
		return execute($query);	
	}
    function getAllCategories(){
		$query= "select * from student ";
        $rs = get($query);
		return $rs;	
	}

    function getCategory($id){
		$query= "select * from student where id=$id";
        $rs = get($query);
		return $rs[0];	
	}
	function updateCategory($name,$id){
		$query= "update student set name='$name' where id=$id";
		return execute($query);
	}
	function deleteCategory($id){
		$query= "delete from student where id=$id";
		return execute($query);
	}
?>
<?php
	require_once 'Models/db_config.php';
	
	$name="";
	$err_name="";
	$ddate="";
	$err_ddate="";
	$mdate="";
	$err_mdate="";
	$time="";
	$err_time="";
	$phone="";
	$err_phone="";
	$size="";
	$err_size="";
	
	$hasError=false;
	
	$day = array("01","02","03","04","05","06","07","08","09","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31");
	$month = array("January","February","March","April","May","June","July","August","September","October","November","December",);
	$Timeis = array("01:00","02:00","03:00","04:00","05:00","06:00","07:00","08:00","09:00","10:00","11:00","12:00");
	$sizeis = array("01","02","03","04","05","06");
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"])){
			$err_name="*Name Required";
			$hasError = true;
		}
		else if(strlen($_POST["name"]) <=3){
			$err_name="*Name Must be greater than 3 character";
			$hasError = true;
		}
		else{
			$name=$_POST["name"];
		}
		if(empty($_POST["day"])){
			$err_ddate = "*Date Required";
			$hasError = true;
		}
		else{
			$ddate = $_POST["day"];
		}
		if(empty($_POST["month"])){
			$err_mdate = "";
			$hasError = true;
		}
		else{
			$mdate = $_POST["month"];
		}
		if(empty($_POST["Timeis"])){
			$err_time = "*Time Required";
			$hasError = true;
		}
		else{
			$time = $_POST["Timeis"];
		}
		if(empty($_POST["phone"])){
			$err_phone="*Phone Required";
			$hasError = true;
		}
		else if(strlen($_POST["phone"]) <=11){
			$err_phone="*Must be a valid phone number";
			$hasError = true;
		}
		else{
			$phone = $_POST["phone"];
		}
		if(empty($_POST["sizeis"])){
			$err_size = "*Size Required";
			$hasError = true;
		}
		else{
			$size = $_POST["sizeis"];
		}
		
		// if(!$hasError){
			// echo $_POST["name"]."<br>";
			// echo $_POST["day"]."<br>";
			// echo $_POST["month"]."<br>";
			// echo $_POST["Timeis"]."<br>";
			// echo $_POST["phone"]."<br>";
			// echo $_POST["sizeis"]."<br>";
		// }
		if(!$hasError){
			$query = "insert into book_table values('$name','$ddate','$mdate','$time','$phone','$size')";
			execute($query);							  
		}
	}
	function insertBook_table($name,$ddate,$mdate,$time,$phone,$size){
		$query = "insert into book_table values ('$name','$ddate','$mdate','$time','$phone','$size')";
		return execute($query);
	}
	function getBook_table(){
		$query = "select * from Book_table";
		$rs = get($query);
		return $rs;
	}
?>
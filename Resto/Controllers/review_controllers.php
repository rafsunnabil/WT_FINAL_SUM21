<?php
	require_once 'Models/db_config.php';
	
	$food="";
	$err_food="";
	$review="";
	$err_review="";
	$rating="";
	$err_rating="";
	$hasError=false;
	$err_message="";
	
	
	$Foodis =  array("Burger","Pizza","Sandwich","Juice","Sides");
	$Ratingis = array("01","02","03","04","05","06","07","08","09","10");
	 	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty($_POST["Foodis"])){
			$err_food = "*Please select a item";
			$hasError = true;
		}
		else{
			$food = $_POST["Foodis"];
		}
		if(empty($_POST["review"])){
			$err_review="*Please write a review";
			$hasError = true;
		}
		else{
			$review = $_POST["review"];
		}
		if(empty($_POST["Ratingis"])){
			$err_rating = "*Please rate this item";
			$hasError = true;
		}
		else{
			$rating = $_POST["Ratingis"];
		}
		
		if(!$hasError){
			echo $_POST["Foodis"]."<br>";
			echo $_POST["review"]."<br>";
			echo $_POST["Ratingis"]."<br>";
		}
		
		if(!$hasError){
			$query = "insert into review values('$food','$review','$rating')";
			execute($query);							  
		}
	}
	
	function insertReview($food,$review,$rating){
		$query = "insert into food_review values('$food','$review','$rating')";		
		execute($query);
		//header("Location: other_review.php");
	}
	function getReview(){
		$query = "select * from review";
		$rs = get($query);
		return $rs;
	}
?>
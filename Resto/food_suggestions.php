<?php
	include 'Controllers/foodcontroller.php';
	$key = $_GET["key"];
	$foods = search($key);
	
	if(count($foods) > 0){
		foreach($foods as $f){
			echo "<a href='edit_foods.php?id=".$f["id"]."'>".$f["name"]."</a><br>";
		}
	}
?>
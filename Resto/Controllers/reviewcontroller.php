<?php
    require_once 'Models/db_config.php';


	
	
	$id="";
	
    $food="";
    $err_food="";
    $rate="";
    $err_rate="";
	$review="";
	$err_review="";
	
	$err_db="";

    $hasError=false;
	
	

	if(isset($_POST["post_review"])){
        if(empty($_POST["food"])){
			$err_food="Insert food";
			$hasError = true;
		}
		else{
			$food=$_POST["food"];
		}
        
		if(empty($_POST["rate"])){
			$err_rate="Insert ratings";
			$hasError = true;
		}
		elseif(!is_numeric($_POST["rate"])){
			$err_rate="[Quantity should contain Numeric values only]";
			$hasError = true;
		}
		
		else{
			$rate=$_POST["rate"];
        }
		if(empty($_POST["review"])){
			$err_review="Insert review";
			$hasError = true;
		}
		else{
			$review=$_POST["review"];
		}
		
        if(!$hasError){
			$rs=postReview($_POST["food"],$_POST["rate"],$_POST["review"]);
			if($rs===true){
				header("Location: allreviews.php");
			}
			$err_db= $rs;
			
		}
		
		else if (isset ($_POST["delete_reviews"])){
			if(empty($_POST["food"])){
				$err_food="Insert food";
				$hasError = true;
			}
			else{
				$food=$_POST["food"];
			}
			
			if(empty($_POST["rate"])){
				$err_rate="Insert ratings";
				$hasError = true;
			}
			elseif(!is_numeric($_POST["rate"])){
				$err_rate="[Quantity should contain Numeric values only]";
				$hasError = true;
			}
			
			else{
				$rate=$_POST["rate"];
			}
			if(empty($_POST["review"])){
				$err_review="Insert review";
				$hasError = true;
			}
			else{
				$review=$_POST["review"];
			}
			if(!$hasError){
				
				$rs=deleteReviews($_POST["id"]);
				if($rs===true){
					header("Location: allreviews.php");
				}
				$err_db= $rs;
			}
		}
	}

    function postReview($food,$rate,$review){
		$query= "insert into review values (NULL,'$food','$rate','$review')";
		echo $query;
		return execute($query);	
	}
    function getAllReviews(){
		$query= "select r.*,f.name as 'f_name' from review r left join foods f on f.id = r.f_id ";
        $rs = get($query);
		return $rs;	
	}

    function getReviews($id){
		$query= "select * from review where id=$id";
        $rs = get($query);
		return $rs[0];	
	}
	
	function deleteReviews($id){
		$query= "delete from review where id=$id";
		return execute($query);
	}
	
?>
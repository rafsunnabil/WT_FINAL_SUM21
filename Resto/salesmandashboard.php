
<!DOCTYPE html>
<html lang="en">
<head>
<style>
.container{
    margin-top:5%;
}
.nav-bar {
    height: 15px;
    display: flex;
    gap: 40px;
    
}
.nav-bar a {
    /* text-decoration: none; */
    color: rgba(54, 57, 88, 1);
    height: 40px;
    width: auto;
    border-radius: 5px;
    padding: 5px 3px 4px 3px;
}
.nav-bar a:hover{
    background-color: rgba(218,112,214, 1);
    color: white;
    text-decoration: none;
}


.head-section {
    margin: 50px 100px 0 200px;
    display: flex;
    gap: 800px;
}
</style>
  <title>Salesman Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<section class="head-section">

<div class="nav-bar">
                
                <a href="index.php">Home</a>
                <a href="salesmanlogin.php">Login</a>
                <a href="profile.php">Profile</a>
                <a href="allpayment.php">Manage Payment</a>
                <a href="seeAllOrder.php">See All Order</a>
                <a href="add_food.php">Food Manage</a>
                <a href="seeAllOrder.php">Edit Order</a>
                <a href="logout.php">logout</a>


           </div>
           </section>
		   
</body>
</html>
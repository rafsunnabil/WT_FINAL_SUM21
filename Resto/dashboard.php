
<?php
  
  require_once "Controllers/admincontroller.php";
  


?>
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
    background-color: rgba(220,20,60);
    color: white;
    text-decoration: none;
}


.head-section {
    margin: 50px 100px 0 200px;
    display: flex;
    gap: 800px;
}
</style>
  <title>Admin Dashboard</title>
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
                <a href="adminLogin.php">Login</a>
                <a href="profile.php">Profile</a>
                <a href="add_category.php">Manage Food</a>
                <a href="all_orders.php">Manage Order</a>
                <a href="allpayment.php">Sales Report</a>
                <a href="trackorder.php">track Order</a>
                <a href="all_table.php">Reservation</a>
                <a href="logout.php">logout</a>


           </div>
           </section>

<div class="container">
  <h2> Current Admin</h2>         
  <table class="table table-hover">
    <thead>
      
    <p><h3>Welcome, <?php echo $_SESSION["uname"]; ?></p>
     
    </thead>
    <tbody>
    <?php
				
			?>
    </tbody>
  </table>
</div>

</body>
</html>



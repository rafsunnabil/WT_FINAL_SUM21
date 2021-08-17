<?php
    
	session_start();
?>
<html>
    <head>
	    
	</head>
    <body>
	    <form action="" method="post">
			<table>
			    
				<?php
				echo"<b> Admin Profile: </b><br><br>";

	            echo "Username:".$_SESSION['uname']."<br>";
		        echo "Password:".$_SESSION['pass']."<br>";
				
				?>
			</table>
		</form>
	</body>
</html>
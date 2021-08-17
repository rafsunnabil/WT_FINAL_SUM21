<?php
    require_once 'Controllers/salesmanController.php';
?>
<html>
    <head></head>
    <body>
        <script src="ajax/registration.js"></script>
        <fieldset>
	
            <legend align="center"><h1> Login</h1></legend>
            <h2><?php echo $err_db; ?></h2>
            <form action="" method="post">
                <table align="center">
                    <tr>
                        <td><b>Username: <b></td>
                        <td><input type="text"  onfocusout ="checkUsername(this)" name="uname" value="<?php echo $uname;?>" placeholder="Username"></td>
                        <td><span id="err_uname"><small><?php echo $err_uname;?><small></span></td>
                    </tr>
                    <tr>
                        <td><b>Password: <b></td>
                        <td><input type="password" name="pass" value="<?php echo $pass;?>" placeholder="Password"></td>
                        <td><span><small><?php echo $err_pass;?><small></span></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="3" ><br><br><input type="submit" name="login" value="Login"></td>
                        <td><span><br><br><a href ="registration.php" > Don't Have an Account Yet? Register Now.</a></span></td>
                    </tr>
                    
                </table>
            </form>
        </fieldset>
    </body>
</html>
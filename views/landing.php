<?php
    require_once '../controllers/landing_controller.php';
    require_once '../controllers/lawyer_controller.php';
?>
<html>
    <head>
        <title>Justice - for Managing Cases</title>
        <link rel="stylesheet" type="text/css" href="../styles/lawyer_styles.css">
    </head>
    <body>
        <center>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td><img src="../assets/justicelogo.png"; width="380" height="480"></td>
                        <div>
                            <td align="center" class="dropshadow">
                            <h4>Login</h4>
                            <table>
                                <tr>
                                    <td><input type="text" name="login_email" placeholder="Email" value="<?php echo $login_email;?>"><span style="color:red;">*<?php echo $err_login_email;?></span></td>
                                </tr>
                                <tr>
                                    <td><input type="password" name="login_pass" placeholder="Password" value="<?php echo $login_pass;?>"><span style="color:red;">*<?php echo $err_login_pass;?></span></td>
                                </tr>
                            </table>
                            <a href="forgot_pass.php">Forgot password?</a><br><br>
                            <input type="submit" style="color:Green;" name="login_button" value="Login">
                            </td>
                        </div>
                        <div>
                            <td align="center" class="dropshadow">
                            <h4>Signup</h4>
                            <input type="submit" style="color:green;" name="signup_lawyer_button" value="As Lawyer"><br><br>
                            <input type="submit" style="color:green;" name="signup_complainant_button" value="As Complainant"><br><br>
                            <input type="submit" style="color:green;" name="signup_judge_button" value="As Judge"><br>
                            </td>
                        </div>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>

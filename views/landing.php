<?php
    require_once '../controllers/landing_controller.php';
    require_once '../controllers/lawyer_controller.php';
?>
<html>
    <head>
        <title>Justice - for Managing Cases</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../styles/lawyer_styles.css">
    </head>
    <body>
        <center>
            <form action="" method="POST" style="padding:20px;">
                <table>
                    <tr>
                        <td style="padding:20px;"><img src="../assets/justicelogo.png"; width="380" height="480"></td>
                        <td align="center" class="dropshadow">
                            <h4 style="color:green;">Login</h4><br><br>
                            <table>
                                <tr>
                                    <td style="padding-bottom:20px;"><input type="text" name="login_email" placeholder="Email" value="<?php echo $login_email;?>"><span style="color:red;">*<?php echo $err_login_email;?></span></td>
                                </tr>
                                <tr>
                                    <td style="padding-bottom:20px;"><input type="password" name="login_pass" placeholder="Password" value="<?php echo $login_pass;?>"><span style="color:red;">*<?php echo $err_login_pass;?></span></td>
                                </tr>
                            </table>
                            <a href="lawyer_forgot_pass.php">Forgot password?</a><br><br>
                            <input type="submit" style="color:Green;" name="login_button" value="Login">
                        </td>
                        <td align="center" class="dropshadow">
                            <h4 style="color:green;">Signup</h4><br>
                            <a class="btn btn-info" href="lawyer_registration.php">As Lawyer</a><br><br>
                            <a class="btn btn-info" href="">As Complainant</a><br><br><!--ADD YOUR HYPERLINK-->
                            <a class="btn btn-info" href="">As Judge</a><br><br><!--ADD YOUR HYPERLINK-->
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>

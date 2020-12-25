<?php
    require_once '../controllers/landing_controller.php';
    require_once '../controllers/lawyer_controller.php';
?>
<html>
    <head>
        <title>Justice - for Managing Cases</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../styles/lawyer_styles.css">
        <link rel="icon" href="../assets/favicon_all_logo.png">
    </head>
    <body>
        <center>
            <form action="" method="POST" onsubmit="return landingValidation()" style="padding:20px;">
                <table>
                    <tr>
                        <td style="padding:20px;"><img src="../assets/justicelogo.png"; width="300" height="400"></td>
                        <td align="center" style="padding:20px;">
                            <div class="panel panel-success dropshadow" style="height:300px;width:250px">
                                <div class="panel-heading">Login</div>
                                <div class="panel-body">
                                    <table>
                                        <tr>
                                            <td style="padding-bottom:10px;"><input class="form-control" type="text" name="login_email" id="login_email" placeholder="Email" value="<?php echo $login_email;?>"><span id="err_login_email" style="color:red;"><?php echo $err_login_email;?></span></td>
                                        </tr>
                                        <tr>
                                            <td style="padding-bottom:20px;"><input class="form-control" type="password" name="login_pass" id="login_pass" placeholder="Password" value="<?php echo $login_pass;?>"><span id="err_login_pass" style="color:red;"><?php echo $err_login_pass;?></span></td>
                                        </tr>
                                    </table>
                                    <a href="lawyer_forgot_pass.php">Forgot password?</a><br><br>
                                    <input class="btn btn-success" type="submit" name="login_button" value="Login">
                                </div>
                            </div>
                        </td>
                        <td align="center" style="padding:20px;">
                            <div class="panel panel-success dropshadow" style="height:300px;width:250px">
                                <div class="panel-heading">Signup</div>
                                <div class="panel-body">
                                    <div class="btn-group-vertical">
                                        <a class="btn btn-info" href="lawyer_registration.php">As Lawyer</a>
                                        <a class="btn btn-info" href="">As Complainant</a><!--ADD YOUR HYPERLINK-->
                                        <a class="btn btn-info" href="">As Judge</a><!--ADD YOUR HYPERLINK-->
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
        <script src="../scripts/landing_validation.js"></script>
    </body>
</html>

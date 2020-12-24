<?php
    require_once '../controllers/lawyer_controller.php';
?>

<html>
    <head>
        <title>Justice - Registration</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../styles/lawyer_styles.css">
    </head>
    <body>
        <center>
            <form action="" method="POST" enctype="multipart/form-data" onsubmit="return registrationValidation()" style="padding:20px;">
                <table>
                    <tr>
                        <td style="padding:20px;"><img src="../assets/justicelogo.png"; width="380" height="480"></td>
                        <td align="right" class="dropshadow">
                            <h4 style="color:Green;" align="center">Register as Lawyer</h4><br><br>
                            <table>
                                <tr>
                                    <td align="left" style="padding-bottom:10px;">Profile Picture: </td>
                                    <td align="left" style="padding-bottom:10px;"><input type="file" name="pp" accept="image/*"><span style="color:red;">*<?php echo $err_pp;?></span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="padding-bottom:10px;">Full Name: </td>
                                    <td align="left" style="padding-bottom:10px;"><input type="text" name="fullname" placeholder="Full Name" value="<?php echo $fullname; ?>"><span style="color:red;">*<?php echo $err_fullname;?></span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="padding-bottom:10px;">User Name: </td>
                                    <td align="left" style="padding-bottom:10px;"><input type="text" name="username" placeholder="User Name" value="<?php echo $username; ?>"><span style="color:red;">*<?php echo $err_username;?></span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="padding-bottom:10px;">Email: </td>
                                    <td align="left" style="padding-bottom:10px;"><input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>"><span style="color:red;">*<?php echo $err_email;?></span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="padding-bottom:10px;">Phone: </td>
                                    <td align="left" style="padding-bottom:10px;"><input type="number" name="phone" placeholder="Phone Number" value="<?php echo $phone; ?>"><span style="color:red;">*<?php echo $err_phone;?></span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="padding-bottom:10px;">Password: </td>
                                    <td align="left" style="padding-bottom:10px;"><input type="password" name="pass" placeholder="Password"><span style="color:red;">*<?php echo $err_pass;?></span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="padding-bottom:10px;">Confirm Password: </td>
                                    <td align="left" style="padding-bottom:10px;"><input type="password" name="cpass" placeholder="Confirm Password"><span style="color:red;">*<?php echo $err_cpass;?></span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="padding-bottom:10px;">NID: </td>
                                    <td align="left" style="padding-bottom:10px;"><input type="number" name="nid" placeholder="NID" value="<?php echo $nid; ?>"><span style="color:red;">*<?php echo $err_nid;?></span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="padding-bottom:10px;">Birthday: </td>
                                    <td align="left" style="padding-bottom:10px;"><input type="date" name="dob"><span style="color:red;">*<?php echo $err_dob;?></span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="padding-bottom:10px;">Gender: </td>
                                    <td align="left" style="padding-bottom:10px;">
                                        <input type="radio" name="gender" value="Male"> Male
                                        <input type="radio" name="gender" value="Female"> Female
                                        <span style="color:red;">*<?php echo $err_gender;?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" style="padding-bottom:10px;">Address: </td>
                                    <td align="left" style="padding-bottom:10px;"><input type="text" name="address" placeholder="Address"><span style="color:red;">*<?php echo $err_address;?></span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="padding-bottom:10px;">City: </td>
                                    <td align="left" style="padding-bottom:10px;"><input type="text" name="city" placeholder="City"><span style="color:red;">*<?php echo $err_city;?></span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="padding-bottom:10px;">State: </td>
                                    <td align="left" style="padding-bottom:10px;"><input type="text" name="state" placeholder="State"><span style="color:red;">*<?php echo $err_state;?></span></td>
                                </tr>
                                <tr>
                                    <td align="left" style="padding-bottom:10px;">Zip/Postal: </td>
                                    <td align="left" style="padding-bottom:10px;"><input type="text" name="zip" placeholder="postal/Zip-Code"><span style="color:red;">*<?php echo $err_zip;?></span></td>
                                </tr>
                                <tr>
                                    <td style="padding-bottom:20px;" colspan="2" align="center"><a href="landing.php"><U>Already registered!go to login</U></a></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center"><input type="submit" name="reg_button" class="button" value="Register"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
    <script src="../scripts/lawyer_validation.js"></script>
    <script src="../scripts/lawyer_registration.js"></script>
</html>
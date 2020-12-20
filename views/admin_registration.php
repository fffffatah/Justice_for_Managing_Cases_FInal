<?php
    require_once '../controllers/lawyer_controller.php';
?>

<html>
    <head>
        <title>Justice - Registration</title>
        <link rel="stylesheet" type="text/css" href="../styles/lawyer_styles.css">
    </head>
    <body>
        <center>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td><img src="../assets/justicelogo.png"; width="380" height="480"></td>
                        <td align="right" class="dropshadow">
                            <h4 style="color:Green;" align="center">Register as Lawyer</h4>
                            <table>
                                <tr>
                                    <td>Profile Picture:</td>
                                    <td><input type="file" name="reg_pp" accept="image/*"><span style="color:red;">*<?php echo $err_reg_pp;?></span></td>
                                </tr>
                                <tr>
                                    <td>Full Name:</td>
                                    <td><input type="text" name="reg_fullname" placeholder="Full Name" value="<?php echo $reg_fullname; ?>"><span style="color:red;">*<?php echo $err_reg_fullname;?></span></td>
                                </tr>
                                <tr>
                                    <td>User Name:</td>
                                    <td><input type="text" name="reg_username" placeholder="User Name" value="<?php echo $reg_username; ?>"><span style="color:red;">*<?php echo $err_reg_username;?></span></td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td><input type="text" name="reg_email" placeholder="Email" value="<?php echo $reg_email; ?>"><span style="color:red;">*<?php echo $err_reg_email;?></span></td>
                                </tr>
                                <tr>
                                    <td>Phone:</td>
                                    <td><input type="number" name="reg_phone" placeholder="Phone Number" value="<?php echo $reg_phone; ?>"><span style="color:red;">*<?php echo $err_reg_phone;?></span></td>
                                </tr>
                                <tr>
                                    <td>Password:</td>
                                    <td><input type="password" name="reg_pass" placeholder="Password"><span style="color:red;">*<?php echo $err_reg_pass;?></span></td>
                                </tr>
                                <tr>
                                    <td>Confirm Password:</td>
                                    <td><input type="password" name="reg_cpass" placeholder="Confirm Password"><span style="color:red;">*<?php echo $err_reg_cpass;?></span></td>
                                </tr>
                                <tr>
                                    <td>NID:</td>
                                    <td><input type="number" name="reg_nid" placeholder="NID" value="<?php echo $reg_nid; ?>"><span style="color:red;">*<?php echo $err_reg_nid;?></span></td>
                                </tr>
                                <tr>
                                    <td>Birthday:</td>
                                    <td><input type="date" name="reg_dob"><span style="color:red;">*<?php echo $err_reg_dob;?></span></td>
                                </tr>
                                <tr>
                                    <td>Gender:</td>
                                    <td>
                                        <input type="radio" name="reg_gender" value="Male"> Male
                                        <input type="radio" name="reg_gender" value="Female"> Female
                                        <span style="color:red;">*<?php echo $err_reg_gender;?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>City:</td>
                                    <td><input type="text" name="city" placeholder="City"><span style="color:red;">*<?php echo $err_reg_city;?></span></td>
                                </tr>
                                <tr>
                                    <td>State:</td>
                                    <td><input type="text" name="state" placeholder="State"><span style="color:red;">*<?php echo $err_reg_state;?></span></td>
                                </tr>
                                <tr>
                                    <td>Zip/Postal:</td>
                                    <td><input type="text" name="zip" placeholder="postal/Zip-Code"><span style="color:red;">*<?php echo $err_reg_zip;?></span></td>
                                </tr>
                                <tr>
                                    <td><a href="../views/landing.php"><U>Already registered!go to login</U></a></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="reg_button" class="button" value="Register"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>
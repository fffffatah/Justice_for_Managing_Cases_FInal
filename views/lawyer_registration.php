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
                                    <td><input type="file" name="pp" accept="image/*"><span style="color:red;">*<?php echo $err_pp;?></span></td>
                                </tr>
                                <tr>
                                    <td>Full Name:</td>
                                    <td><input type="text" name="fullname" placeholder="Full Name" value="<?php echo $fullname; ?>"><span style="color:red;">*<?php echo $err_fullname;?></span></td>
                                </tr>
                                <tr>
                                    <td>User Name:</td>
                                    <td><input type="text" name="username" placeholder="User Name" value="<?php echo $username; ?>"><span style="color:red;">*<?php echo $err_username;?></span></td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td><input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>"><span style="color:red;">*<?php echo $err_email;?></span></td>
                                </tr>
                                <tr>
                                    <td>Phone:</td>
                                    <td><input type="number" name="phone" placeholder="Phone Number" value="<?php echo $phone; ?>"><span style="color:red;">*<?php echo $err_phone;?></span></td>
                                </tr>
                                <tr>
                                    <td>Password:</td>
                                    <td><input type="password" name="pass" placeholder="Password"><span style="color:red;">*<?php echo $err_pass;?></span></td>
                                </tr>
                                <tr>
                                    <td>Confirm Password:</td>
                                    <td><input type="password" name="cpass" placeholder="Confirm Password"><span style="color:red;">*<?php echo $err_cpass;?></span></td>
                                </tr>
                                <tr>
                                    <td>NID:</td>
                                    <td><input type="number" name="nid" placeholder="NID" value="<?php echo $nid; ?>"><span style="color:red;">*<?php echo $err_nid;?></span></td>
                                </tr>
                                <tr>
                                    <td>Birthday:</td>
                                    <td><input type="date" name="dob"><span style="color:red;">*<?php echo $err_dob;?></span></td>
                                </tr>
                                <tr>
                                    <td>Gender:</td>
                                    <td>
                                        <input type="radio" name="gender" value="Male"> Male
                                        <input type="radio" name="gender" value="Female"> Female
                                        <span style="color:red;">*<?php echo $err_gender;?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>City:</td>
                                    <td><input type="text" name="city" placeholder="City"><span style="color:red;">*<?php echo $err_city;?></span></td>
                                </tr>
                                <tr>
                                    <td>State:</td>
                                    <td><input type="text" name="state" placeholder="State"><span style="color:red;">*<?php echo $err_state;?></span></td>
                                </tr>
                                <tr>
                                    <td>Zip/Postal:</td>
                                    <td><input type="text" name="zip" placeholder="postal/Zip-Code"><span style="color:red;">*<?php echo $err_zip;?></span></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center"><a href="../views/landing.php"><U>Already registered!go to login</U></a></td>
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
</html>
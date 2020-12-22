<?php
    require_once '../models/db_conn.php';
    require_once '../models/mail_sender.php';
    require_once '../models/generate_pdf.php';
?>

<?php
    $pp="";
    $err_pp="";
    $fullname="";
    $err_fullname="";
    $username="";
    $err_username="";
    $email="";
    $err_email="";
    $phone="";
    $err_phone="";
    $pass="";
    $err_pass="";
    $cpass="";
    $err_cpass="";
    $pass="";
    $err_pass="";
    $cpass="";
    $err_cpass="";
    $nid="";
    $err_nid="";
    $dob="";
    $err_dob="";
    $gender="";
    $err_gender="";
    $address="";
    $city="";
    $err_city="";
    $state="";
    $err_state="";
    $zip="";
    $err_zip="";
    $hasError=false;
    if(isset($_POST["reg_button"])){
        //PROFILE PIC VALIDATION
        if(!isset($_POST["pp"])){
            $err_pp="Select a Profile Picture";
            $hasError=true;
        }
        else{
            $pp=htmlspecialchars($_POST["pp"]);
        }
        //FULLNAME VALIDATION
        if(empty($_POST["fullname"])){
            $err_fullname="Full Name Required";
            $hasError=true;
        }
        else{
            $fullname=htmlspecialchars($_POST["fullname"]);
        }
        //USERNAME VALIDATION
        if(empty($_POST["username"])){
            $err_username="User Name Required";
            $hasError=true;
        }
        elseif(strpos($_POST["username"]," ")!=false && strlen($_POST["username"])<8){
            $err_username="Username Cannot Contain Spaces and Must Be >8 Characters";
            $hasError=true;
        }
        else{
            $username=htmlspecialchars($_POST["username"]);
        }
        //EMAIL VALIDATION
        if(empty($_POST["email"])){
            $err_email="Email Required";
            $hasError=true;
        }
        elseif(strpos($_POST["email"],"@") && strpos($_POST["email"],".")){
            if(strpos($_POST["email"],"@") < strpos($_POST["email"],".")){
                $email=htmlspecialchars($_POST["email"]);
            }
            else{
                $err_email="'@' Must be before '.'.";
                $hasError=true;
            }
        }
        else{
            $err_email="Email must contain '@' and '.'.";
            $hasError=true;
        }
        //PHONE VALIDATION
        if(empty($_POST["phone"])){
            $err_phone="Phone Number Required";
            $hasError=true;
        }
        elseif(strlen($_POST["phone"])!=11){
            $err_phone="Phone Number Must be 11 Digits";
            $hasError=true;
        }
        else{
            $phone=$_POST["phone"];
        }
        //PASSWORD VALIDATION
        if(empty($_POST["pass"])){
            $err_pass="Password Required";
            $hasError=true;
        }
        elseif(strlen($_POST["pass"])<8){
            $err_pass="Password must be 8 characters long.";
            $hasError=true;
        }
        elseif(!strpos($_POST['pass'], "1") && !strpos($_POST['pass'], "2") && !strpos($_POST['pass'], "3") && !strpos($_POST['pass'], "4")
            && !strpos($_POST['pass'], "5") && !strpos($_POST['pass'], "6") && !strpos($_POST['pass'], "7") && !strpos($_POST['pass'], "8")
            && !strpos($_POST['pass'], "9") && !strpos($_POST['pass'], "0")) {
            $err_pass="Password must have 1 numeric";
            $hasError=true;
        }
        elseif(strcmp(strtoupper($_POST["pass"]),$_POST["pass"])==0 && strcmp(strtolower($_POST["pass"]),$_POST["pass"])==0){
            $err_pass="Password must contain 1 Upper and Lowercase letter.";
            $hasError=true;
        }
        elseif(strpos($_POST["pass"],"#")==false && strpos($_POST["pass"],"?")==false){
            $err_pass="Password must contain '#' or '?'.";
            $hasError=true;
        }
        elseif(empty($_POST["cpass"])){
            $err_cpass="Confirmed Password Required";
            $hasError=true;
        }
        elseif(strcmp($_POST["cpass"],$_POST["pass"])!=0){
            $err_cpass="Password and Confirm Password must be same";
            $hasError=true;
        }
        else{
            $pass=htmlspecialchars($_POST["pass"]);
        }
        //NID VALIDATION
        if(empty($_POST["nid"])){
            $err_nid="NID Required";
            $hasError=true;
        }
        else{
            $nid=htmlspecialchars($_POST["nid"]);
        }
        //DATE OF BIRTH VALIDATION
        if(!isset($_POST["dob"])){
            $err_dob="Birthday Required";
            $hasError=true;
        }
        else{
            $dob=$_POST["dob"];
        }
        //GENDER VALIDATION
        if(isset($_POST["gender"])){
            $gender=$_POST["gender"];
        }
        else{
            $err_gender="Gender Required";
            $hasError=true;
        }
        //ADDRESS VALIDATION
        if(empty($_POST["city"])){
            $err_city="City Required";
            $hasError=true;
        }
        else{
            $city=htmlspecialchars($_POST["city"]);
        }
        if(empty($_POST["state"])){
            $err_state="state Required";
            $hasError=true;
        }
        else{
            $state=htmlspecialchars($_POST["state"]);
        }
        if(empty($_POST["zip"])){
            $err_zip="Zip/Postal Code Required";
            $hasError=true;
        }
        else{
            $zip=htmlspecialchars($_POST["zip"]);
        }

        if(!$hasError){
            
            if(isset($_POST["reg_button"])){
                header("Location: ../../pages/confirm_reg.php");
            }
        }
    }

    //LAWYER DATA ACCESS FUNCTIONS
    function addLawyer(){

    }
    function updateLawyer(){

    }
    function deleteLawyer(){
        
    }
    function getLawyer(){

    }
    function getLawyers(){
        
    }
?>
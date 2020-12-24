<?php
    require_once '../models/db_conn.php';
?>

<?php
    $login_email="";
	$err_login_email="";
	$login_pass="";
	$err_login_pass="";
	$hasError=false;
	$flag=false;
	if(isset($_POST["login_button"])){
		if(empty($_POST["login_email"])){
			$err_login_email="* Email Required";
			$hasError =true;
		}
		else{
			$login_email = htmlspecialchars($_POST["login_email"]);
		}
		if(empty($_POST["login_pass"])){
			$err_login_pass="* Password Required";
			$hasError = true;
		}
		else{
			$login_pass=htmlspecialchars($_POST["login_pass"]);
        }

		if(!$hasError){
            $login_email=htmlspecialchars($_POST["login_email"]);
            $login_pass=md5(htmlspecialchars($_POST["login_pass"]));
            $user_id=getUser($login_email,$login_pass);
            $flag=false;
            if($user_id!=false){
                $flag=true;
            }
			if(!$flag){
				echo "Invalid Credentials!";
			}
			else{
                if(strcmp($user_id[0]["type"],"admin")==0){
                    //REDIRECT TO ADMIN DASHBOARD
                }
                elseif(strcmp($user_id[0]["type"],"lawyer")==0){
                    header("Location: lawyer_dashboard.php?id=".$user_id[0]["id"]);
                }
                elseif(strcmp($user_id[0]["type"],"judge")==0){
                    //REDIRECT TO JUDGE DASHBOARD
                }
                else{
                    //REDIRECT TO COMPLAINANT DASHBOARD
                }
			}
        }
    }
    
	if(isset($_POST["signup_lawyer_button"])){
		header("Location: lawyer_registration.php");
	}
	if(isset($_POST["signup_complainant_button"])){
		//REDIRECT TO COMPLAINANT REGISTRATION PAGE
    }
    if(isset($_POST["signup_judge_button"])){
		//REDIRECT TO JUDGE REGISTRATION PAGE
    }
    
    //DATA ACCESS FUNCTIONS
    function getUser($email,$pass){
        $query="SELECT * FROM users WHERE username='$email' AND password='$pass'";
        $result=doQuery($query);
        return (count($result)>0 ? $result : false);
    }
?>
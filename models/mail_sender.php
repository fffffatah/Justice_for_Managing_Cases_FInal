<?php
    require_once '../dependencies/sendgrid-php/sendgrid-php.php';
?>
<?php
    function sendOtp($username, $address, $otp){
        $email=new \SendGrid\Mail\Mail();
        $email->setFrom("no-reply@justicecms.com", "Justice - OTP");
        $email->setSubject("Your Justice OTP");
        $email->addTo($address, $username);
        $email->addContent("text/plain", "Your OTP for Password Reset/Account Creation: ");
        $email->addContent("text/html", "<strong>OTP: ".$otp."</strong>");

        $sendgrid=new \SendGrid(getenv('SENDGRID_API_KEY'));
        try{
            $response=$sendgrid->send($email);
        }
        catch (Exception $e){
            //DO NOTHING
        }
    }
    function sendAttachment($id, $username, $address, $filepath, $filetype){
        $email=new \SendGrid\Mail\Mail();
        $email->setFrom("no-reply@justicecms.com", "Justice - Attachments");
        $email->setSubject("Your Payment Receipt");
        $email->addTo($address, $username);
        $email->addContent("text/html", "Your Justice Payment Receipt");
        $file_encoded = base64_encode($filepath);
        $email->addAttachment($file_encoded, "application/pdf", $id."_".$username."_".date()."_".$filetype.".pdf", "attachment");

        $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
        try{
            $response=$sendgrid->send($email);
        }
        catch(Exception $e){
            //DO NOTHING
        }
    }
?>
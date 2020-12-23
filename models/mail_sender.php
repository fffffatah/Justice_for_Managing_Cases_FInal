<?php
    require_once '../dependencies/sendgrid-php/sendgrid-php.php';
?>
<?php
    function sendConfEmail($username, $address, $confLink){
        $email=new \SendGrid\Mail\Mail();
        $email->setFrom("no-reply@justicecms.com", "Justice - Confirmation");
        $email->setSubject("Your Justice Confirmation Email");
        $email->addTo($address, $username);
        $email->addContent("text/plain", "Confirmation Email for Account Creation: ");
        $email->addContent("text/html", "<strong>Confirmation Email for Account Creation: ".$confLink."</strong>");

        $sendgrid=new \SendGrid(getenv('SENDGRID_API_KEY'));
        try{
            $response=$sendgrid->send($email);
        }
        catch (Exception $e){
            //DO NOTHING
        }
    }
    function sendAttachment($id, $username, $address, $filename, $filepath, $subject){
        $email=new \SendGrid\Mail\Mail();
        $email->setFrom("no-reply@justicecms.com", "Justice - Attachments");
        $email->setSubject("Your ".$subject);
        $email->addTo($address, $username);
        $email->addContent("text/html", "Your Justice ".$subject);
        $file_encoded = base64_encode(file_get_contents($filepath.$filename));
        $email->addAttachment($file_encoded, "application/pdf", $filename, "attachment");

        $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
        try{
            $response=$sendgrid->send($email);
        }
        catch(Exception $e){
            //DO NOTHING
        }
    }
?>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//PHPMailer Classes Autoload File
require_once("../phpmailer/vendor/autoload.php");

if(!defined("SMTP_HOST"))
    define("SMTP_HOST",'mail.rapidrsg.com');

if(!defined("SMTP_USERNAME"))
    define("SMTP_USERNAME",'info@rapidrsg.com');

if(!defined("SMTP_PASSWORD"))
    define("SMTP_PASSWORD",'INfo@2021'); //k2fmGYzn9E 

if(!defined("SMTP_SECURE"))
    define("SMTP_SECURE",'ssl');

if(!defined("SMTP_PORT"))
    define("SMTP_PORT", 465);

if(!defined("DEFAULT_EMAIL"))
    define("DEFAULT_EMAIL", "info@rapidrsg.com");


if(isset($_POST['action']) && $_POST['action'] == 'get_enquiry') {

    $full_name = (isset($_POST['name']) ? $_POST['name'] : '');
    $email     = (isset($_POST['email']) ? $_POST['email'] : '');
    $phone     = (isset($_POST['phone']) ? $_POST['phone'] : '');
    $messages  = (isset($_POST['message']) ? $_POST['message'] : '');
   
    
    $Html = '<html><body>';
    $Html .= 'Hello, <br/><br/>';
    $Html .= 'Please find the below contact form inquiry details:'.'<br/><br/>';
    $Html .= '<table cellspacing="0" cellpadding="10" border="1">';
    $Html .= "<tr><td><strong>Full Name:</strong> </td><td>" . htmlentities($full_name) . "</td></tr>";
    $Html .= "<tr><td><strong>Email:</strong> </td><td>" . htmlentities($email) . "</td></tr>";
    $Html .= "<tr><td><strong>Phone:</strong> </td><td>" . htmlentities($phone) . "</td></tr>";
    $Html .= "<tr><td><strong>Message:</strong></td><td>".htmlentities($messages)."</td></tr>";
    $Html .= "</table>";
    $Html .= '<br/><br/>Thank You,<br/>';
    $Html .= 'Beyond Team';
    $Html .= "</body></html>";

    $to = 'info@beyondfinancialsolutions.com';
    
    $subject   = 'Contact form Inquiry - Beyond';
    
    //Send the mail Using SMTP.
    $mailResponse = sendmail($to, DEFAULT_EMAIL, $subject, $Html, 'Beyond');
    
    //$mailResponse = false;

    //Send the mail.
    if($mailResponse) {
        $status  = true;
        $message = 'You have successfully send mail';
    } else {
        $status  = false;
        $message = 'There was a problem sending the email, Please try again.';
    }

    echo json_encode(['status' => $status, 'message' => $message]);
    exit;
}


function sendmail($toemail, $fromemail, $subject, $message, $fromname = '', $toname = '')
{
    $mail = new PHPMailer;

    //Enable SMTP debugging. 
    $mail->SMTPDebug = 0;
    
    //Set PHPMailer to use SMTP.
    $mail->isSMTP();

    //Set SMTP host name                          
    $mail->Host = SMTP_HOST;
    
    //Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;                          
    
    //Provide username and password     
    $mail->Username = SMTP_USERNAME;                 
    $mail->Password = SMTP_PASSWORD;                           
    
    //If SMTP requires TLS encryption then set it
    $mail->SMTPSecure = SMTP_SECURE;//"tls";                           
    
    //Set TCP port to connect to 
    $mail->Port = SMTP_PORT;//587;

    $mail->From = $fromemail;
    $mail->FromName = $fromname;
    
    $mail->addAddress($toemail,$toname); //info@innevit.net

    $mail->isHTML(true);

    $mail->Subject = $subject;

    $mail->Body = "".$message."";
    $mail->AltBody = '';

    if(!$mail->send()) {
        return false;
    } else {
        return true;
    }
}

?>

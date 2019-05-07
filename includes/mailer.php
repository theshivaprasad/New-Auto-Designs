<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require './vendor/autoload.php';
function main_form_data($maker,
$model,
$part,
$year,
$body_style,
$engine_liter,
$engine_size,
$turbo_charge,
$transmission_type,
$fuel_type,
$vin_number,
$message,
$name,
$phone,
$email,
$zip){
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    ));

    if($vin_number == ''){
        $vin_number = "Not Available";
    }

    if($message == ''){
        $message = "Not Available";
    }
    //Server settings
   /* $mail->SMTPDebug = 2;  */                                     // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'admin@autopartswolf.com';              // SMTP username
    $mail->Password   = 'SunRise@1818';                    // SMTP password
    $mail->SMTPSecure = 'tls';                             
         // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('admin@autopartswolf.com', 'WebApp Part Request');
    // $mail->addAddress('rumanpasha.ruman@gmail.com', 'WebApp Enquiry');    
     $mail->addAddress('stanyjude@gmail.com', 'WebApp Part Request'); // Add a recipient
     $mail->addAddress('enquiry@autopartswolf.com', 'WebApp Part Request');
    /*$mail->addAddress('rumanpasha.ruman@gmail.com', 'WebApp Enquiry 2');*/               // Name is optional
    /*$mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');*/

    // Attachments
   /* $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
*/
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'APW New Web Lead';
    $mail->Body    = 'Year : '.$year.'<br>Make : '.$maker.'<br>Body-Style : '.$body_style.'<br>
Engine Liter : '.$engine_liter.' Liter<br>
Engine Size : '.$engine_size.'<br>
Turbo Charge : '.$turbo_charge.'<br>
Transmission Type : '.$transmission_type.'<br>
Fuel Type : '.$fuel_type.'<br>
VIN Number : '.$vin_number.'<br>
Message : '.$message.'<br>--------------------------------------------<br>Part Name : '.$part.'<br>--------------------------------------------<br>
Name : '.$name.'<br>
Email : '.$email.'<br>
Phone : '.$phone.'<br>
ZIP : '.$zip.'<br><br>Thank you for using our service!<br>Team Autoparts Wolf';
    $mail->AltBody = 'APW New Web Lead';

    $mail->send();
/*    echo 'Message has been sent';

*/ return 1;
} catch (Exception $e) {
/*    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
*/  return 0;
}
}

function customer_service_form(
$message,
$name,
$email,
$subject){
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
    //Server settings
   /* $mail->SMTPDebug = 2;  */                                     // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'admin@autopartswolf.com';              // SMTP username
    $mail->Password   = 'SunRise@1818';                         // SMTP password
    $mail->SMTPSecure = 'tls';                             
         // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('admin@autopartswolf.com', 'WebApp Contact Form');
     $mail->addAddress('stanyjude@gmail.com', 'WebApp Contact Form');    
     $mail->addAddress('enquiry@autopartswolf.com', 'WebApp Contact Form'); // Add a recipient
   /* $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');
*/
    // Attachments
   /* $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
*/
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'New APW Contact Form';
    $mail->Body    = '
    <b>Name</b><br>'.$name.'<br><br>
    <b>Email</b><br>'.$email.'<br><br>
    <b>Subject</b><br>'.$subject.'<br><br>
    <b>Message</b><br>'.$message.'<br><br>';
    $mail->AltBody = 'New APW Contact Form Request';

    $mail->send();
/*    echo 'Message has been sent';

*/ return 1;
} catch (Exception $e) {
/*    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
*/  return 0;
}
}
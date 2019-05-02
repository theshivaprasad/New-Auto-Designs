<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require './vendor/autoload.php';
function main_form_data($make,
$model,
$part_name,
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
    )
);
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'admin@autopartswolf.com';              // SMTP username
    $mail->Password   = 'SunRise@1818';                     // SMTP password
    $mail->SMTPSecure = 'tls';                             
         // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('admin@autopartswolf.com', 'WebApp Query');
    // $mail->addAddress('enquiry@autopartswolf.com', 'WebApp Enquiry');    
     $mail->addAddress('manju97.m@gmail.com', 'WebApp Enquiry'); // Add a recipient
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
    $mail->Subject = 'Car make Forms';
    $mail->Body    = 'Make \t: $make\nModel \t:$model\n Part-Name \t: $part_name\n
Year \t:$year\n
Body-Style \t:$body_style\n
Engine-Liter \t:$engine_liter\n
Engine-Size \t:$engine_size\n
Turbo-Charge \t:$turbo_charge\n
Transmission_Type \t:$transmission_type\n
Fuel-Type \t:$fuel_type\n
Vin-Number \t:$vin_number\n
Message \t:$message\n
Name \t:$name\n
Email \t:$email\n
Phone \t:$phone\n
Zip \t:$zip\n<b>in bold!</b>';
    $mail->AltBody = 'Make \t: $make\nModel \t:$model\n This is the body in plain text for non-HTML mail clients';

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
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'admin@autopartswolf.com';              // SMTP username
    $mail->Password   = 'SunRise@1818';                     // SMTP password
    $mail->SMTPSecure = 'tls';                             
         // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('admin@autopartswolf.com', 'WebApp Query');
    // $mail->addAddress('enquiry@autopartswolf.com', 'WebApp Enquiry');    
     $mail->addAddress('manju97.m@gmail.com', 'WebApp Enquiry'); // Add a recipient
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
    $mail->Subject = 'Car make Forms';
    $mail->Body    = '
Message \t:$message\n
Name \t:$name\n
Email \t:$email\n
subject \t:$subject\n';
    $mail->AltBody = 'Make \t: $make\nModel \t:$model\n This is the body in plain text for non-HTML mail clients';

    $mail->send();
/*    echo 'Message has been sent';

*/ return 1;
} catch (Exception $e) {
/*    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
*/  return 0;
}
}
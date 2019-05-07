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
    $mail->setFrom('admin@autopartswolf.com', 'Autoparts Wolf');
     $mail->addAddress('enquiry@autopartswolf.com', 'Autoparts Wolf | Enquiry');

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
   include_once "database.php";
    
    $sql = "SELECT ref_id FROM tbl_customer_entry";
    $result=$conn->query($sql);
    while ($row=$result->fetch_assoc()) {
        $count = $row['ref_id'] + 1;
    }

    $sql = "UPDATE tbl_customer_entry SET ref_id=".$count." WHERE id=1";
    $result=$conn->query($sql);

    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'admin@autopartswolf.com';              // SMTP username
    $mail->Password   = 'SunRise@1818';                    // SMTP password
    $mail->SMTPSecure = 'tls';                             
         // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('admin@autopartswolf.com', 'Autoparts Wolf');
    $mail->addAddress($email, 'Autoparts Wolf');

    // Attachments
   /* $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
*/
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Autoparts Wolf | Part Request Reference '.$count;
    $mail->Body    = 'Hi There!<br><br>Greetings from Autoparts Wolf!<br><br>We have received the request for the part and your reference number is '.$count.'. We will now get in touch with our OEM part sellers and junkyards situated all over America to help you find the <b>Right Part at the Right Price</b>.<br><br>Feel free to reach out to us with the reference number '.$count.' at +1-888-892-9092 between 09:00 AM to 06:00 PM, Monday to Saturday.<br><br>The following are the details that were submitted on our website and are mentioned here for your reference.<br><br>Year : '.$year.'<br>Make : '.$maker.'<br>Body-Style : '.$body_style.'<br>
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
    $mail->AltBody = 'APW New Part Request';

    $mail->send();

return 1;
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
    $mail->addAddress('enquiry@autopartswolf.com', 'WebApp Contact Form'); // Add a recipient

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

    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'admin@autopartswolf.com';              // SMTP username
    $mail->Password   = 'SunRise@1818';                         // SMTP password
    $mail->SMTPSecure = 'tls';                             
         // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('admin@autopartswolf.com', 'Autoparts Wolf');
    $mail->addAddress($email, 'Autoparts Wolf'); // Add a recipient

    // Attachments
   /* $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
*/
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Autoparts Wolf | Enquiry';
    $mail->Body    = 'Hi There!<br><br>Greetings from Autoparts Wolf!<br><br>Thanks for writing to us. One of our team member will be in touch with you soon.<br><br>Feel free to reach out to us at +1-888-892-9092 between 09:00 AM to 06:00 PM, Monday to Saturday for any immediate assistance.<br><br>The following are the details that were submitted on our website and are mentioned here for your reference.<br><br>
    <b>Name</b> : '.$name.'<br>
    <b>Email</b> : '.$email.'<br>
    <b>Subject</b> : '.$subject.'<br>
    <b>Message</b> : '.$message.'<br><br>Thanks!<br>Team Autoparts Wolf';
    $mail->AltBody = 'New APW Contact Form Request';

    $mail->send();
/*    echo 'Message has been sent';

*/ return 1;
} catch (Exception $e) {
/*    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
*/  return 0;
}
}
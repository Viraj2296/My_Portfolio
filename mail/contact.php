// <?php
// if(empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
//   http_response_code(500);
//   exit();
// }

// $name = strip_tags(htmlspecialchars($_POST['name']));
// $email = strip_tags(htmlspecialchars($_POST['email']));
// $m_subject = strip_tags(htmlspecialchars($_POST['subject']));
// $message = strip_tags(htmlspecialchars($_POST['message']));

// $to = "virajmadusanka2296@gmail.com"; // Change this email to your //
// $subject = "$m_subject:  $name";
// $body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\n\nEmail: $email\n\nSubject: $m_subject\n\nMessage: $message";
// $header = "From: $email";
// $header .= "Reply-To: $email";	

// if(!mail($to, $subject, $body, $header))
//   http_response_code(500);
// ?>















use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Include PHPMailer library

$mail = new PHPMailer(true); // Create a new PHPMailer instance

try {
    // Server settings
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'smtp.mail.yahoo.com';
    $mail->SMTPAuth = true;
    $mail->Username = '‎virajmadusanka2296@​gmail.com'; // Your Yahoo Mail address
    $mail->Password = 'Viraj_Mad1996'; // Your Yahoo Mail password
    $mail->SMTPSecure = 'ssl'; // Enable SSL encryption
    $mail->Port = 465; // TCP port to connect to

    // Recipients, content, and sending email...

    $mail->send(); // Send the email
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


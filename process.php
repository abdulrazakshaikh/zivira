<?
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // SMTP settings
    $smtp_host = 'smtpout.secureserver.net'; // Your SMTP server hostname
    $smtp_port = 465; // Port (typically 587 for TLS/STARTTLS, or 465 for SSL)
    $smtp_username = 'contact@blinkyoureyes.com'; // Your SMTP username
    $smtp_password = 'Abdul@zivira'; // Your SMTP password

    // Sender and recipient
    //
    $from = 'contact@blinkyoureyes.com';
    $to = 'shoaib.khan@zivira.co.in , 89abdul@gmail.com, 24shahuljob@gmail.com';
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $htmlData1 =$_POST['htmlData'];
    $htmlData2=$_POST['htmlData1'];
    $htmlData2= str_replace("===========","",$htmlData2);
    echo $htmlData2;
    echo "\n================1111\n";
    // Email content
    $subject = 'New Request Received';
    $message = 'New client requested'; 
    $message .= "Client Name : $name\n";
    $message .= "Client Phone: $phone\n";
    $message .= "Client Email: $email\n";
//    $message .="Selected Result \n $content";
    // Headers
    $headers = "From: $from\r\n";
    $headers .= "Reply-To: $from\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $message = "
        <html>
        <head>
            <title>$subject</title>
        </head>
        <body>
           $htmlData1
           $htmlData2
        </body>
        </html>
    ";

    // SMTP configuration
    ini_set('SMTP', $smtp_host);
    ini_set('smtp_port', $smtp_port);
    ini_set('sendmail_from', $from);

    // SMTP authentication
    ini_set('smtp_auth', true);
    ini_set('username', $smtp_username);
    ini_set('password', $smtp_password);
     echo $message;
    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. Please check your server configuration.";
    }
}
?>
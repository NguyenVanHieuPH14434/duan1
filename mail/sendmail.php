<?php

include 'PHPMailer/src/PHPMailer.php';
include 'PHPMailer/src/Exception.php';
include 'PHPMailer/src/OAuth.php';
include 'PHPMailer/src/POP3.php';
include 'PHPMailer/src/SMTP.php';
// include 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class Mailer{
    function dathang($tieude, $noidung, $maildh){
 $mail = new PHPMailer(true);
 $mail->CharSet="UTF-8";
//  print_r($mail);
try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'nguyenvanhieugl2001@gmail.com';                     //SMTP username
    $mail->Password   = 'claauudvyzcufvnd';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('nguyenvanhieugl2001@gmail.com', 'Mailer');
    $mail->addAddress($maildh,'');     //Add a recipient
    // $mail->addAddress('lienphamthi1810@gmail.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('nguyenvanhieugl2001@gmail.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $tieude;
    $mail->Body    = $noidung;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Đã gửi đến gmail';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
}
?>
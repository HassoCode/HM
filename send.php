<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST['send']))
{
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username='hassan.411320015@uor.edu.krd';
    $mail->Password = 'owba zoez awon eijq';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('hassan.411320015@uor.edu.krd');
    $mail->addAddress($_POST['email']);
    $mail->isHTML(true);
    $mail->Subject = $_POST['subject'];
    $mail->Body = $_POST['message'];
    $mail->send();

    echo
    "
    <script>
    alert('sent successfully');
    document.loation.href = 'index.php';
    </script>

    ";
}
echo "halaw";



?>
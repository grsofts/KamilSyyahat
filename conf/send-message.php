<?php

require str_replace('conf', '', __DIR__) . 'vendor\autoload.php'; // PHPMailer через Composer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $secretKey = '6Ldji_YrAAAAAOHWP6MJSeGQo4tfKS-AuOKUnb8F'; // reCAPTCHA secret key
    $responseKey = $_POST['g-recaptcha-response'];
    $userIP = $_SERVER['REMOTE_ADDR'];

    // Проверяем reCAPTCHA
     $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$responseKey}&remoteip={$userIP}");
     $captchaSuccess = json_decode($verify);
    $ok = $captchaSuccess->success ?? false;
    if ($ok === true) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Настройки SMTP
        $mail = new PHPMailer(true);

        try {
            // Сервер
            $mail->isSMTP();
            $mail->Host       = 'smtp.hostinger.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'no-reply@kamilsyyahat.com'; // ваш Gmail
            $mail->Password   = '9Cc?5xRb?'; // пароль приложения
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;

            // От кого и кому
            $mail->setFrom('no-reply@kamilsyyahat.com', 'Kamil Syyahat Contact Form');
            $mail->addAddress('guvanch.grsofts@gmail.com', 'Guvanch');

            // Контент письма
            $mail->isHTML(true);
            $mail->Subject = "New message from {$name}";
            $mail->Body    = "
                <h3>New message from website:</h3>
                <p><b>Name:</b> {$name}</p>
                <p><b>Email:</b> {$email}</p>
                <p><b>Message:</b><br>{$message}</p>
            ";
            $mail->AltBody = "Name: {$name}\nEmail: {$email}\nMessage:\n{$message}";

            $mail->send();
            $ok = true;
        } catch (Exception $e) {
            $ok = false;
        }
    } else {
        $ok = false;
    }

    session_start();
    $_SESSION['allow_thanks'] = true;
    $ok_str = $ok ? 'true' : 'false';
    header("Location: /thanks?success={$ok_str}");
    exit;
}
?>

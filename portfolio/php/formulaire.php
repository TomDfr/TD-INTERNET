<?php
include_once '../composer/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
 
function sendMail(string $to, string $from, string $from_name, string $subject, string $body) {
    $mail = new PHPMailer(true);  // Crée un nouvel objet PHPMailer
    $mail->IsSMTP(); // active <span class="search_hit">SMTP</span>
    $mail->SMTPDebug = 0;  // debogage: 1 = Erreurs et messages, 2 = messages seulement
    $mail->SMTPSecure = 'tls'; //or ssl
    $mail->Host = '<span class="search_hit">smtp</span>.gmail.com';
    $mail->Port = 587;
 
    //Pour autoriser un envoi depuis 127.0.0.1
    $mail->SMTPOptions = [
            "ssl"=>[
                    "verify_peer"=>false,
                    "verify_peer_name"=>false,
                    "allow_self_signed"=>true
                    ]
            ];
 
    $mail->SMTPAuth = true;  // Authentification <span class="search_hit">SMTP</span> active
    $mail->Username = "tom.dufour@sts-sio-caen.info";
    $mail->Password = 'lebatteur';
 
    $mail->isHTML(true);
    $mail->SetFrom($from, $from_name);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AddAddress($to);
    $mail->Send();
}
try{
    sendMail($to, 'me@gmail.com', 'myName', 'Test', '<h1>Test</h1><p>Message</p>');
    echo 'Message envoyé';
}catch (\Exception $e){
    echo 'Erreur lors de l'envoi de votre message!';
}
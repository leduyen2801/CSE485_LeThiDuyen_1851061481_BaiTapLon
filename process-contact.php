<?php
//Bắt giá trị đk gửi đến từ form
$title = $POST['txtTitle'];
$body = $POST['txtBody'];
$email = $POST['txtEmail'];

require_once "mail/class.phpmailer.php";
require_once "mail/class.smtp.php"; 
$mail = new PHPMailer();

$mail -> SMTPDebug = 3;
$mail-> issSMTP();
$mail->Host = 'smtp.gamil.com;';
$mail->SMTPAuth = true;
$mail->Username = 'leduyen280100@gmail.com';
$mail->Password = 'duyen2k.';
$mail->SMTPSecure ='tls';
$mail->Post = 587;
$mail->setFrom('web2code2vn@gamil.com', 'web2code2vn');
$mail->addAddress('web2code2vn@gamil.com');
$mail->addReplyTo('web2code2vn@gamil.com', 'Information');
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = 'Cảm ơn'.$email.'đã gửi thông tin góp ý với nội dung'.$body.'Chúng tôi sẽ chuyển tới';
if($mail->send()){
    echo 'Message has been sent';
}else{
    echo 'Message could not be sent';
}

?><?php
//Bắt giá trị đk gửi đến từ form
$title = $POST['txtTitle'];
$body = $POST['txtBody'];
$email = $POST['txtEmail'];

require_once "mail/class.phpmailer.php";
require_once "mail/class.smtp.php"; 
$mail = new PHPMailer();

$mail -> SMTPDebug = 3;
$mail-> issSMTP();
$mail->Host = 'smtp.gamil.com;';
$mail->SMTPAuth = true;
$mail->Username = 'leduyen280100@gmail.com';
$mail->Password = 'rwiqhymcwxbrxwpe';
$mail->SMTPSecure ='tls';
$mail->Post = 587;
$mail->setFrom('web2code2vn@gamil.com', 'web2code2vn');
$mail->addAddress('web2code2vn@gamil.com');
$mail->addReplyTo('web2code2vn@gamil.com', 'Information');
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = 'Cảm ơn'.$email.'đã gửi thông tin góp ý với nội dung'.$body.'Chúng tôi sẽ chuyển tới';
if($mail->send()){
    echo 'Message has been sent';
}else{
    echo 'Message could not be sent';
}

?>
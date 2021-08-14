<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if(isset($_POST['name']) && isset($_POST['email'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    require_once 'vendor/autoload.php';
    $mail = new PHPMailer();
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;    
    $mail->Username   = 'hasnaasbat@gmail.com';                   
    $mail->Password   = 'sh194071';                         
    $mail->Port       = 465;       
    $mail->SMTPSecure = 'ssl';           
    $mail->isHTML(true);  
    $mail->setFrom($email,$name);                 
    $mail->addAddress('hasnaasbat@gmail.com'); 
    $mail->Subject=("$email($name)");  
    $mail->Body=$name ."<br>". $email ."<br>". $message;  
    $mail->send();
}
// use PHPMailer\PHPMailer\Exception;
// $mail->SMTPDebug = 2;                     
// $mail->From       = 'hasnaasbat@gmail.com';
// $mail->FromName   = 'hasna asbat';
// $mail->addReplyTo('emailpc062@gmail.com', 'hasna asbat');
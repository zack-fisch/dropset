<?php
    $to = 'zack@zfisch.com';
    $subject ='Dropset Work Request';

    $name = $_POST['Name'];
    $company = $_POST['Company'];
    $email = $_POST['Email_Address'];
    $message = $_POST['Description'];
    $message = <<<EMAIL

 From: $name
 
 $message

 Email: $email   

EMAIL;


if($_POST) {
    mail($to, $subject, $message, $subject);
    header("Location: http://dropset.co");
    die();
}

?>
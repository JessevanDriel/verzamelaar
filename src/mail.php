<?php
    $name = $_POST['name'];
    $email= $_POST['email'];
    $street= $_POST['street'];
    $to = "Contact@jessevandriel.nl";
    $adress = $_POST['adress'];
    $txt = $name . "\r\n" . $email . "\r\n" . $message;
    $headers = "From: Contact@jessevandriel.nl" ;
    $txt2 = "Bedankt voor je bestelling, we komen zo snel mogelijk met een lever datum." . "\r\n" . "\r\n" . $name . "\r\n" . $email . "\r\n" . "\r\n" . $street . "\r\n" . $adress;
    if($email!=NULL){
        mail($to,$adress,$txt,$headers);
        mail($email,$adress,$txt2,$headers);
    }

header("Location:index.php");
?>
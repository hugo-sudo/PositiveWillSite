<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $subject = $_POST['assunto'];
    $cv = $_POST['cv'];
    $message = $_POST['message'];

    $mailTo = "positivewill2020@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "Recebeu uma candidatura de ".$name.".\n\n".$message;


    mail($mailTo,$subject,$txt,$headers,$cv);
}
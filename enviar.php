<?php
// Get data from form 
$name = $_POST['nome'];
$email= $_POST['email'];
$message= $_POST['telefone'];
 
$to = "oseiasc2@gmail.com";
$subject = "Pedro Stramari Advocacia";
 

$txt ="Contato Site Pedro Stramari Advocacia \r\n Nome = ". $name . " \r\n Email = "
    . $email . " \r\n Telefone =" . $message;
 
$headers = "From: nao-responda@pedrostramari.com.br" . "\r\n" .
            "CC: somebodyelse@example.com";
if($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
 
// Redirect to
header("Location:obrigado.html");
?>
<meta charset="UTF-8" />
<!-- Начался блок PHP -->
<?php
// Получаем значения переменных из пришедших данных
$name = $_POST['name'];
$email = $_POST['email'];
$header = $_POST['header'];
$message = $_POST['message'];
$mes = "Name: $name \nE-mail: $email \nSubject: $header \nMessage: $message";
$send = mail($email, $header, $mes, "Content-type:text/plain; charset = UTF-8\r\nFrom:sample@email.com");
if ($send == 'true') {echo "Email sent";}
else {echo "Something went wrong";}
?>
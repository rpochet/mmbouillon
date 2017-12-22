<?php
$config = require 'config.php';

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $personne = $personnes[$id];
    $to = $personne->email;
} else {
    $to = $config['email'];
}

if (isset($_REQUEST['name'])) {
    $name = $_REQUEST['name'];
}
if (isset($_REQUEST['email'])) {
    $from = $_REQUEST['email'];
}
if (isset($_REQUEST['message'])) {
    $message = $_REQUEST['message'];
}

$subject = 'Demande de '.$name;

$headers = 'From: '.$from. '\r\n' .
 'Reply-To: '.$from.' \r\n' .
 'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

 ?>
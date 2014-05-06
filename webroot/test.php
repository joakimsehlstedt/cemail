<?php
// Include CEmail
include('../autoloader.php');

// Use the form and check it status.
$email = new \Jox\Email\CEmail();

// Send email and recieve send status string
$content = $email->sendEmail('whatever@example.com', 'j.sehlstedt@me.com', 'Test email', 'Just a quick test to verify functionality!');

?>

<!doctype html>
<meta charset=utf8>
<title>CEmail Example: Test send a simple email</title>
<h1>CEmail Example: Test send a simple email</h1>
<p><?=$content?></p>
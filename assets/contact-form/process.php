<?php
$toemail = 'example@gmail.com';
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['email'];
if(mail($toemail, 'Newsletter Signup', $message, 'From: ' . $email)) {
echo '<div class="email-success"><i class="icon-smile"></i><br>Thanks for signing up!</div>';
} else {
echo 'There was a problem sending your email.';
}
?>
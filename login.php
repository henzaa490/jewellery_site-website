<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check against saved users
    $users = file('users.txt');
    $valid = false;

    foreach ($users as $user) {
        list($name, $saved_email, $saved_pass) = explode('|', trim($user));
        if ($email == $saved_email && $password == $saved_pass) {
            $valid = true;
            break;
        }
    }

    if ($valid) {
        require 'send.php';
        sendLoginEmail($email);
        echo "Login successful. Email sent!";
    } else {
        echo "Invalid credentials.";
    }
}
?>

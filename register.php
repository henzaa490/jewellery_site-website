<?php
// Save user to DB or file (for demo, we'll skip DB)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password']; // You should hash this in production

    // Save to file just for demo
    $data = "$name|$email|$password\n";
    file_put_contents('users.txt', $data, FILE_APPEND);

    echo "Registration successful. <a href='index.html'>Login now</a>";
}
?>

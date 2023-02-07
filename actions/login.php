<?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if ($email == 'admin@example.com' && $pass == 'admin') {
        session_start();
        $_SESSION['login'] = true;
        header('Location: /index.php');
    } else {
        echo 'Invalid crendentials';
    }
}

<?php

if (isset($_POST['action'])) {
    // die(json_encode($_POST));
    $name = $_POST['name'];
    $password = $_POST['password'];

    if ($name == 'admin' && $password == 'adminadmin') {
        session_start();
        $_SESSION['name'] = $name;
        $_SESSION['password'] = $password;
        header('Location: /index.php');
    } else {
        echo 'wrong username or password';
    }
} else {
    die('Dont be chicky');
}

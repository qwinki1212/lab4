<?php
ob_start();
session_start();

if (isset($_POST['username'])) {
    $name = trim($_POST['username']);

    setcookie('username', $name, time() + 3600);
    $_SESSION['username'] = $name;
}

header('Location: page2.php');
exit;
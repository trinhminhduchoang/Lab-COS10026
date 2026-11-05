<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.html?error=invalid');
    exit;
}

$username = isset($_POST['username']) && is_string($_POST['username'])
    ? trim($_POST['username'])
    : '';
$password = isset($_POST['password']) && is_string($_POST['password'])
    ? $_POST['password']
    : '';

if ($username === 'admin' && $password === 'password123') {
    session_regenerate_id(true);
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
    exit;
}

header('Location: login.html?error=invalid');
exit;

<?php
session_start();

if (!isset($_SESSION['user']) || !is_string($_SESSION['user'])) {
    header('Location: login.html');
    exit;
}

$username = htmlspecialchars($_SESSION['user'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$pageTitle = 'Welcome';
include __DIR__ . '/header.inc';
?>
    <h1>Welcome, <?= $username ?>!</h1>
<?php include __DIR__ . '/footer.inc'; ?>

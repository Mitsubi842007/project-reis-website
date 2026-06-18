<?php
session_start();
session_unset();
session_destroy();
header("Location: loginpage.php");
exit();
?>

$_SESSION = [];
session_destroy();

header('Location: login.php');
exit;
?>
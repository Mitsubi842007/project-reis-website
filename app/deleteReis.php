<?php
include 'pdo.php';
$id = $_GET['id'];
$sql = "DELETE FROM reizen WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
header("Location: admin.php");
exit();
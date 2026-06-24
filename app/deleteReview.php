<?php
include 'pdo.php';
$id = $_GET['id'];
$sql = "DELETE FROM reviews WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
header("Location: admin.php");
exit();
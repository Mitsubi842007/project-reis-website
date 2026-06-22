<?php
session_start();
require_once("pdo.php");
 
// Check if user is logged in
if (!isset($_SESSION["email"])) {
    header("Location: login.php");
    exit();
}
 
// Check if user is an admin
$sql = "SELECT * FROM Account WHERE email = :email";
$stmt = $pdo->prepare($sql);
$stmt->execute([":email" => $_SESSION["email"]]);
$user = $stmt->fetch();
 
if (!$user || $user["usertype"] !== "admin") {
    header("Location: login.php");
    exit();
}
 
// Fetch reizen
$sql = "SELECT * FROM reizen"; 
$stmt = $pdo->query($sql);
$reizen = $stmt->fetchAll();           
?>
 


<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="reisbureau.css">
</head>

<body>

  <nav class="navbar">
    <div class="brandName">
      <img src="afbeeldingen/palm boom logo.png" alt="Logo">
      <h2>TungSahara Admin</h2>
    </div>
    <div class="nav-menu">
      <a href="index.php">Home</a>
      <a href="informatie.php">Information</a>
      <a href="boeking.php">Booking</a>
      <a href="login.php" class="login-btn">Login</a>
    </div>
  </nav>

  <div class="whiteBackground">
    <h1>Admin pagina</h1>
    <p>Beheer hier je inhoud en controleer het systeem.</p>
  </div>

  <footer>
    <p>© 2026 TungSahara. Ontdek de magie van de Sahara.</p>
    <a href="algemeneVoorwaarden.php">algemene voorwaarden</a>
  </footer>

  <script src="script.js"></script>
  
</body>

</html>

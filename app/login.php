<?php
session_start();
require 'pdo.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);

  if (!empty($email) && !empty($password)) {

    $stmt = $pdo->prepare('SELECT id, email, password FROM account WHERE email = ?');
    $stmt->execute([$email]);
    $user = $stmt->fetch();


    if ($user && password_verify($password, $user['password'])) {

      $_SESSION['user_id'] = $user['id'];
      $_SESSION['user_email'] = $user['email'];


      header('Location: index.php');
      exit;
    } else {
      $error = 'Onjuist e-mailadres of wachtwoord.';
    }
  } else {
    $error = 'Vul alstublieft alle velden in.';
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>log in</title>
  <link rel="stylesheet" href="reisbureau.css">
</head>

<body>
  <!-- navigatie -->
  <nav class="navbar">
    <div class="brandName">
      <img src="afbeeldingen/palm boom logo.png">
      <h2>TungSahara</h2>
    </div>
    <div class="nav-menu">
      <a href="index.php">Home</a>
      <a href="informatie.php">Information</a>
      <a href="boeking.php">Booking</a>
      <a href="login.php" class="login-btn active">Login</a>
    </div>
  </nav>

  <!-- login -->
  <div class="login-wrapper">
    <div class="login-card">
      <h1>Welkom Terug</h1>
      <p>Log in om je boekingen te beheren</p>

      <?php if (!empty($error)): ?>
        <div class="error-message"><?= htmlspecialchars($error) ?></div>
      <?php endif; ?>

      <form method="post" action="login.php">
        <label for="email">E-mailadres</label>
        <input type="email" id="email" name="email" placeholder="jouw@email.nl" required />

        <label for="password">Wachtwoord</label>
        <input type="password" id="password" name="password" required />

        <button type="submit">Inloggen</button>
      </form>

      <p class="onderaan">Login met admin <a href="#">Klik hier</a></p>
    </div>
  </div>

  <!-- footer -->
  <footer>
    <p>© 2026 TungSahara. Ontdek de magie van de Sahara.</p>
    <a href="algemeneVoorwaarden.php">algemene voorwaarden</a>
  </footer>
  <script src="script.js"></script>
  

</body>

</html>
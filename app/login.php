<?php

session_start();

if (isset($_SESSION['ingelogd'])) {
    header("Location: index.php");
    exit;
}

include 'pdo.php';

$foutmelding = "";

if (isset($_POST['email']) && isset($_POST['wachtwoord'])) {

    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];

    $sql = "SELECT * FROM Account WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);

    $gebruiker = $stmt->fetch();

    if ($gebruiker) {

        if (password_verify($wachtwoord, $gebruiker['password'])) {

            $_SESSION['ingelogd'] = true;
            $_SESSION['email'] = $gebruiker['email'];

            header("Location: index.php");
            exit;
        } else {
            $foutmelding = "Gebruikersnaam of wachtwoord is onjuist.";
        }

    } else {
        $foutmelding = "Gebruikersnaam of wachtwoord is onjuist.";
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
      <img src="afbeeldingen/palm boom logo.png" alt="Logo">
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

      
      

      
      <form action="login.php" method="POST">

          <label for="email">E-mailadres</label>
          
          <input type="email" id="email" name="email" placeholder="jouw@email.nl" required />

          <label for="wachtwoord">Wachtwoord</label>
          
          <input type="password" id="wachtwoord" name="wachtwoord" required />
          
          
          <button type="submit">Inloggen</button>
          

      </form>

      <p class="onderaan">Login met admin <a href="#">Klik hier</a></p>
      
    </div>
  </div>

  <!-- footer -->
  <footer>
    <a href="logout.php">Uitloggen</a>
    <a href="algemeneVoorwaarden.php">Algemene voorwaarden</a>
    <p>© 2026 TungSahara. Ontdek de magie van de Sahara.</p>
  </footer>
  <script src="script.js"></script>
  

</body>
</html> 

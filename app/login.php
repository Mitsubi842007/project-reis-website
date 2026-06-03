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

      <label for="email">E-mailadres</label>
      <input type="email" id="email" placeholder="jouw@email.nl" />

      <label for="wachtwoord">Wachtwoord</label>
      <input type="password" id="wachtwoord" />



      <button>Inloggen</button>
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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>booking</title>
  <link rel="stylesheet" href="reisbureau.css">
</head>

<body>


  <!--navigation menu-->
  <nav class="navbar">
    <div class="brandName">
      <img src="afbeeldingen/palm boom logo.png">
      <h2>TungSahara</h2>
    </div>
    <div class="nav-menu">
      <a href="index.php">Home</a>
      <a href="informatie.php">Information</a>
      <a href="boeking.php" class="active">Booking</a>
      <a href="login.php" class="login-btn ">Login</a>
    </div>
  </nav>
  <!--achtergrond -->
  <div class="darkBackground">
    <h1>
      Boek Je Avontuur</h1>
  </div>
  <!--searchBar-->
  <!--reserveringsformulier -->
  <section class="booking-section">
    <div class="booking-header">
      <h1>kies je activiteiten</h1>
      <p>Selecteer één of meerdere reizen die je wilt boeken. Je kunt meerdere activiteiten combineren.</p>
    </div>

    <div class="booking-grid">
      <article class="activity-card">
        <div class="card-image">
          <img src="afbeeldingen/placeholder.png" alt="Classic Sahara Experience">
        </div>
        <div class="card-content">
          <!--checkbox -->
          <label class="checkbox-container">
            <input type="checkbox" class="activity-checkbox">
            <div class="checkbox-text">
              <!--beschrijving -->
              <h2>Classic Sahara Experience</h2>
              <p>5-daagse tour door de highlights van de tungSahara.</p>
            </div>
          </label>
          <div class="reisInfo">
            <!--reisinformatie-->
            <span><strong>Duurt:</strong> 5 dagen / 4 nachten</span>
            <span><strong>Locatie:</strong> Marrakech - Merzouga</span>
          </div>
          <div class="price">€799 per persoon</div>
        </div>
      </article>

    </div>

    <!--footer -->
    <footer>
      <p>© 2026 TungSahara. Ontdek de magie van de Sahara.</p>
      <a href="algemeneVoorwaarden.php">algemene voorwaarden</a>
    </footer>
    <script src="script.js"></script>
   

</body>

</html>
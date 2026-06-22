<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>booking</title>
  <link rel="stylesheet" href="reisbureau.css">
</head>
 
<body>
  <?php
  include 'pdo.php';
  $sql = "SELECT * FROM reisInformatie";
  $statement = $pdo->prepare($sql);
  $statement->execute();
  $reisInformatie = $statement->fetchAll();
  ?>
 
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
<form>
<label>test        </label>
 
 
 
</form>
 
  <!--reserveringsformulier -->
  <section class="booking-section">
    <div class="booking-header">
      <h1>kies je activiteiten</h1>
      <p>Selecteer één of meerdere reizen die je wilt boeken. Je kunt meerdere activiteiten combineren.</p>
    </div>
<!--search bar-->
 
 
 
    </div>
    <?php
 
    if (count($reisInformatie) === 0) {
      echo '<p>Er zijn geen reizen gevonden.</p>';
    } else {
      echo '<div class="booking-grid">';
 
      foreach ($reisInformatie as $info) {
        $titel = htmlspecialchars($info["titel"]);
        $beschrijving = htmlspecialchars($info["beschrijving"]);
        $prijs = htmlspecialchars($info["prijs"]);
        $afbeelding = $info["afbeelding"] ?: "placeholder.png";
        $locatie = htmlspecialchars($info["locatie"]);
 
        echo '<article class="activity-card">';
        echo '  <div class="card-image">';
        echo '    <img src="afbeeldingen/' . htmlspecialchars($afbeelding) . '" alt="' . $titel . '">';
        echo '  </div>';
        echo '  <div class="card-content">';
        echo '    <label class="checkbox-container">';
        echo '      <input type="checkbox" class="activity-checkbox">';
        echo '      <div class="checkbox-text">';
        echo '        <h2>' . $titel . '</h2>';
        echo '        <p>' . $beschrijving . '</p>';
        echo '      </div>';
        echo '    </label>';
        echo '    <div class="reisInfo">';
        echo '      <span><strong>Locatie:</strong> ' . $locatie . '</span>';
        echo '    </div>';
        echo '    <div class="price">€' . $prijs . ' per persoon</div>';
        echo '  </div>';
        echo '</article>';
      }
 
      echo '</div>';
    }
    ?>
 
 
    <!--footer -->
    <footer>
      <p>© 2026 TungSahara. Ontdek de magie van de Sahara.</p>
      <a href="algemeneVoorwaarden.php">algemene voorwaarden</a>
    </footer>
    <script src="script.js"></script>
 
 
</body>
 
</html>
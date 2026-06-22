<?php
session_start();
require_once("pdo.php");
 
// Check if user is logged in
if (!isset($_SESSION["usertype"]) || $_SESSION["usertype"] !== "admin") {
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

      <table class="admin-table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>titel</th>
                    <th>Beschrijving</th>
                    <th>Prijs</th>
                    <th>Afbeelding</th>
                    <th>locatie</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($items): ?>
                    <?php foreach ($items as $item): ?>
                        <tr>
                            <td><?= htmlspecialchars($item["id"]) ?></td>
                            <td><?= htmlspecialchars($item["titel"]) ?></td>
                            <td><?= htmlspecialchars($item["beschrijving"]) ?></td>
                            <td>€<?= htmlspecialchars($item["prijs"]) ?></td>
                            <td>€<?= htmlspecialchars($item["locatie"]) ?></td>
                            <td>
                                <img src="afbeeldingen/<?= htmlspecialchars($item["afbeelding"]) ?>"
                      
                            
                            <td>
                                <a href="editItem.php?id=<?= $item["id"] ?>" class="edit-btn">Bewerk</a>
                                <a href="deleteItem.php?id=<?= $item["id"] ?>"
                                   class="delete-btn"
                                   onclick="return confirm('Weet je zeker dat je dit item wilt verwijderen?');">
                                   Verwijder
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6">Geen items gevonden.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

  <footer>
    <p>© 2026 TungSahara. Ontdek de magie van de Sahara.</p>
    <a href="algemeneVoorwaarden.php">algemene voorwaarden</a>
  </footer>

  <script src="script.js"></script>
  
</body>

</html>

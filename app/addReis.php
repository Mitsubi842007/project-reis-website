<?php
include 'pdo.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $sql = "INSERT INTO reizen
    (titel,beschrijving,prijs,locatie,afbeelding)
    VALUES (?,?,?,?,?)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        $_POST['titel'],
        $_POST['beschrijving'],
        $_POST['prijs'],
        $_POST['locatie'],
        $_POST['afbeelding']
    ]);

    header("Location: admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Nieuwe Reis</title>
</head>
<body>

<h1>Nieuwe reis toevoegen</h1>

<form method="POST">

    <input type="text" name="titel" placeholder="Titel"><br><br>

    <textarea name="beschrijving" placeholder="Beschrijving"></textarea><br><br>

    <input type="number" name="prijs" placeholder="Prijs"><br><br>

    <input type="text" name="locatie" placeholder="Locatie"><br><br>

    <input type="text" name="afbeelding" placeholder="Afbeelding.jpg"><br><br>

    <button type="submit">
        Opslaan
    </button>

</form>

</body>
</html>
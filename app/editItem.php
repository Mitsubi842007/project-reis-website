<?php
include 'pdo.php';

$id = $_GET['id'];

$sql = "SELECT * FROM reizen WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
$reis = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $sql = "UPDATE reizen
            SET titel = ?,
                beschrijving = ?,
                prijs = ?,
                locatie = ?,
                afbeelding = ?
            WHERE id = ?";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        $_POST['titel'],
        $_POST['beschrijving'],
        $_POST['prijs'],
        $_POST['locatie'],
        $_POST['afbeelding'],
        $id
    ]);

    header("Location: admin.php");
    exit();
}
?>

<form method="POST">

    <input
        type="text"
        name="titel"
        value="<?php echo $reis['titel']; ?>">

    <br><br>

    <textarea name="beschrijving"><?php echo $reis['beschrijving']; ?></textarea>

    <br><br>

    <input
        type="number"
        name="prijs"
        value="<?php echo $reis['prijs']; ?>">

    <br><br>

    <input
        type="text"
        name="locatie"
        value="<?php echo $reis['locatie']; ?>">

    <br><br>

    <input
        type="text"
        name="afbeelding"
        value="<?php echo $reis['afbeelding']; ?>">

    <br><br>

    <button type="submit">
        Opslaan
    </button>

</form>
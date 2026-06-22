<?php
include 'pdo.php';
$id = $_GET['id'];
$sql = "SELECT * FROM reizen WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
$reis = $stmt->fetch();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $sql = "UPDATE reizen
           SET titel = ?, beschrijving = ?, prijs = ?
           WHERE id = ?";
   $stmt = $pdo->prepare($sql);
   $stmt->execute([
       $_POST['titel'],
       $_POST['beschrijving'],
       $_POST['prijs'],
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
<textarea name="beschrijving"><?php echo $reis['beschrijving']; ?></textarea>
<input
       type="number"
       name="prijs"
       value="<?php echo $reis['prijs']; ?>">
<button type="submit">Opslaan</button>
</form>
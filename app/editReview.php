<?php
include 'pdo.php';
$id = $_GET['id'];
$sql = "SELECT * FROM reviews WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
$review = $stmt->fetch();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $sql = "UPDATE reviews
           SET review = ?
           WHERE id = ?";
   $stmt = $pdo->prepare($sql);
   $stmt->execute([
       $_POST['review'],
       $id
   ]);
   header("Location: admin.php");
   exit();
}
?>
<form method="POST">
<textarea name="review"><?php echo $review['review']; ?></textarea>
<button type="submit">
       Opslaan
</button>
</form>
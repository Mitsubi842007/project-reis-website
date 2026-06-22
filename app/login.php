<?php

session_start();
include("pdo.php");

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$email=$_POST["email"];
	$password=$_POST["password"];

	$sql="SELECT * FROM login WHERE email=:email AND password=:password";
	
	$statement=$pdo->prepare($sql);
	$statement->execute([":email"=>$email, ":password"=>$password]);
	$row=$statement->fetch();

	if($row["usertype"]=="user")
	{	
		$_SESSION["username"]=$username;
		header("location:menupage.php");
	}
	elseif($row["usertype"]=="admin")
	{
		$_SESSION["email"]=$email;
		header("location:admin.php");
	}
	else
	{
		echo "email or password incorrect";
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
          
          <input type="text" id="email" name="email" placeholder="jouw@email.nl"  />

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

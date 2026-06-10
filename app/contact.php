<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - TungSahara</title>
    <link rel="stylesheet" href="reisbureau.css">

</head>

<body>
    <div class="titleContact">
        <h1>Contact us page!</h1>
    </div>
    <div class="wholeContact">
        <div class="contact-container">
            <div class="contact-form">
                <?php
                //verzenden is vals oftwel hij verzend het niet
                $sent = false;
                //controleert of de formalier is ingevuld
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $name = htmlspecialchars($_POST['name'] ?? '');
                    $email = htmlspecialchars($_POST['email'] ?? '');
                    $subject = htmlspecialchars($_POST['subject'] ?? '');
                    $message = htmlspecialchars($_POST['message'] ?? '');
                    $sent = true;
                }
                ?>
                <!--controleert of $sent is waar -->
                <?php if ($sent): ?>
                    <div class="contact-form-success">
                        <!--als alles is gelukt dan geeft die deze twee berichten aan-->
                        <h3>Bedankt, we hebben je bericht ontvangen.</h3>
                        <p>We nemen zo spoedig mogelijk contact met je op.</p>
                    </div>
                <?php else: ?>
                    <form method="post" action="contact.php">
                        <!--naam-->
                        <label for="name">Naam</label>
                        <input id="name" name="name" type="text" placeholder="Jouw naam" required>
                        <!--email-->
                        <label for="email">E-mail</label>
                        <input id="email" name="email" type="email" placeholder="naam@voorbeeld.com" required>
                        <!--onderwerp-->
                        <label for="subject">Onderwerp</label>
                        <input id="subject" name="subject" type="text" placeholder="Onderwerp" required>
                        <!--bericht-->
                        <label for="message">Bericht</label>
                        <textarea id="message" name="message" placeholder="Typ je bericht hier..." required></textarea>
                        <!--hier heeft het een verzend button-->
                        <button type="submit" class="send-message-btn">Send Message</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <a href="informatie.php" class="makeContactbackbtn">← terug naar informatie pagina</a>
    </div>
    </div>
    <footer>
        <p>© 2026 TungSahara. Ontdek de magie van de Sahara.</p>
    </footer>
</body>

</html>
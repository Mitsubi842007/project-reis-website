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
                $sent = false;
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $name = htmlspecialchars($_POST['name'] ?? '');
                    $email = htmlspecialchars($_POST['email'] ?? '');
                    $subject = htmlspecialchars($_POST['subject'] ?? '');
                    $message = htmlspecialchars($_POST['message'] ?? '');
                    $sent = true;
                }
                ?>

                <?php if ($sent): ?>
                    <div class="contact-form-success">
                        <h3>Bedankt, we hebben je bericht ontvangen.</h3>
                        <p>We nemen zo spoedig mogelijk contact met je op.</p>
                    </div>
                <?php else: ?>
                    <form method="post" action="contact.php">
                        <label for="name">Naam</label>
                        <input id="name" name="name" type="text" placeholder="Jouw naam" required>

                        <label for="email">E-mail</label>
                        <input id="email" name="email" type="email" placeholder="naam@voorbeeld.com" required>

                        <label for="subject">Onderwerp</label>
                        <input id="subject" name="subject" type="text" placeholder="Onderwerp" required>

                        <label for="message">Bericht</label>
                        <textarea id="message" name="message" placeholder="Typ je bericht hier..." required></textarea>

                        <button type="submit" class="send-message-btn">Send Message</button>
                    </form>
                <?php endif; ?>
            </div>


            <a href="informatie.php" class="makeContactbackbtn">← terug naar informatie pagina</a>
        </div>
    </div>
    <footer>
        <p>© 2026 TungSahara. Ontdek de magie van de Sahara.</p>
    </footer>
</body>

</html>
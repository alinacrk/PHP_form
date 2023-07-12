

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Hier können Sie den Code einfügen, um die Daten zu verarbeiten, z. B. speichern Sie sie in einer Datenbank oder senden Sie eine E-Mail.

    // Beispiel, um eine E-Mail zu senden
    $to = "lina.sereda.51@gmail.com";
    $subject = "Anmeldung zur kostenlosen Beratung";
    $body = "Name: " . $name . "\n\nE-Mail: " . $email . "\n\nNachricht: " . $message;
    $headers = "From: " . $email;

    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Danke für Ihre Anmeldung! Wir werden uns in Kürze mit Ihnen in Verbindung setzen.</p>";
    } else {
        echo "<p>Es gab ein Problem beim Versenden der E-Mail. Bitte versuchen Sie es später erneut.</p>";
    }
}
?>

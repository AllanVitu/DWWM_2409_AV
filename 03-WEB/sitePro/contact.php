<?php
include('includes/header.php');
include('config/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact (nom, email, message) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $pseudo, $email, $message);
    $stmt->execute();
    echo "<p>Message envoyé ! Merci de vous etre connecté(e).</p>";
}
?>

<h1 id="titreForm">Connecté(e)-vous</h1>
<form method="POST">
    Pseudo : <input type="text" name="password" required><br>
    Email : <input type="email" name="email" required><br>
    Mots de Passe : <input type="text" name="password" required><br>
    <input type="submit" value="Envoyer">
</form>

<style>
    body{
        background-image: url("assets/imgs/fondForm.jpg");
    }

    h1{
        text-align: center;
        color: white;
    }
</style>

<?php include('includes/footer.php'); ?> 








<?php
include('includes/header.php');
include('config/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact (nom, email, message) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nom, $email);
    $stmt->execute();
    echo "<p>Inscription Reussi ! Merci <3.</p>";
}
?>

<h1 id="titreForm">Inscrivez-vous</h1>
<form method="POST">
    Nom : <input type="text" name="nom" required><br>
    Prénom : <input type="text" name="prenom" required><br>
    Pseudo : <input type="text" name="pseudo" required><br>
    Email : <input type="email" name="email" required><br>
    Créez votre MDP : <input type="text" name="password" required><br>
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
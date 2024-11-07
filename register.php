<?php
// Inclure la connexion à la base de données
include 'db_connect.php';

// Initialiser les variables pour les messages d'erreur et de succès
$error_message = '';
$success_message = '';

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Valider les champs
    if (empty($username) || empty($password) || empty($email)) {
        $error_message = "Tous les champs sont obligatoires.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "Adresse e-mail invalide.";
    } else {
        // Hashage du mot de passe
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Préparer et exécuter la requête d'insertion
        $sql = "INSERT INTO utilisateurs (username, password, email) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $username, $hashed_password, $email);

        if ($stmt->execute()) {
            $success_message = "Inscription réussie ! Vous pouvez maintenant vous connecter.";
        } else {
            $error_message = "Erreur lors de l'inscription. Veuillez réessayer.";
        }

        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
</head>
<body>
    <h2>Créer un compte</h2>

    <?php if ($error_message) echo "<p style='color: red;'>$error_message</p>"; ?>
    <?php if ($success_message) echo "<p style='color: green;'>$success_message</p>"; ?>

    <form action="register.php" method="POST">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br>

        <button type="submit">S'inscrire</button>
    </form>
</body>
</html>

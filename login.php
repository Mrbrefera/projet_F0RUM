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

    // Vérifier que les champs ne sont pas vides
    if (empty($username) || empty($password)) {
        $error_message = "Veuillez remplir tous les champs.";
    } else {
        // Préparer la requête pour obtenir les informations de l'utilisateur
        $sql = "SELECT * FROM utilisateurs WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        // Vérifier si l'utilisateur existe
        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();

            // Vérifier le mot de passe
            if (password_verify($password, $user['password'])) {
                // Démarrer une session et sauvegarder les informations de l'utilisateur
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $success_message = "Connexion réussie !";

                // Redirection vers la page d'accueil ou tableau de bord
                header("Location: dashboard.php");
                exit();
            } else {
                $error_message = "Nom d'utilisateur ou mot de passe incorrect.";
            }
        } else {
            $error_message = "Nom d'utilisateur ou mot de passe incorrect.";
        }

        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <h2>Connexion</h2>

    <?php if ($error_message) echo "<p style='color: red;'>$error_message</p>"; ?>
    <?php if ($success_message) echo "<p style='color: green;'>$success_message</p>"; ?>

    <form action="login.php" method="POST">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required><br>

        <button type="submit">Se connecter</button>
    </form>
</body>
</html>

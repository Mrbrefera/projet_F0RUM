<?php
// Inclure le fichier de connexion à la base de données
require_once('db_connect.php');

// Démarrer la session pour gérer l'authentification
session_start();

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs envoyées par le formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sécuriser les entrées pour éviter les injections SQL
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Requête SQL pour récupérer les informations de l'utilisateur depuis la base de données
    $query = "SELECT * FROM utilisateurs WHERE username = '$username' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Vérifier si l'utilisateur existe
        $user = mysqli_fetch_assoc($result);

        if ($user) {
            // Vérifier si le mot de passe correspond
            if (password_verify($password, $user['password'])) {
                // Connexion réussie, stocker les informations de l'utilisateur dans la session
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role'];

                // Rediriger l'utilisateur vers la page d'accueil ou une page sécurisée
                header("Location: index.php");
                exit();
            } else {
                // Mot de passe incorrect
                $error_message = "Mot de passe incorrect.";
            }
        } else {
            // Utilisateur non trouvé
            $error_message = "Utilisateur non trouvé.";
        }
    } else {
        // Erreur dans la requête SQL
        $error_message = "Erreur dans la connexion à la base de données.";
    }

    // Fermer la connexion
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <h2>Connexion</h2>
    <form action="login_process.php" method="POST">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password" required>
        <br>
        <button type="submit">Se connecter</button>
    </form>

    <?php
    // Afficher les erreurs si elles existent
    if (isset($error_message)) {
        echo "<p style='color:red;'>$error_message</p>";
    }
    ?>
</body>
</html>

<?php
require '../db_connect.php'; // Inclure le fichier de connexion à la base de données

// Initialisation des variables pour les messages d'erreur et de succès
$error = '';
$success = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire et les échapper pour éviter les injections SQL
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);

    // Validation des données
    if (empty($username) || empty($password) || empty($email)) {
        $error = 'Tous les champs sont requis.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Adresse e-mail invalide.';
    } elseif (strlen($password) < 6) {
        $error = 'Le mot de passe doit contenir au moins 6 caractères.';
    } else {
        // Vérifier si le nom d'utilisateur ou l'email existent déjà
        $stmt = $conn->prepare("SELECT * FROM utilisateurs WHERE username = ? OR email = ?");
        $stmt->bind_param("ss", $username, $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $error = 'Le nom d\'utilisateur ou l\'email existe déjà.';
        } else {
            // Hachage du mot de passe
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insertion dans la base de données
            $stmt = $conn->prepare("INSERT INTO utilisateurs (username, password, email) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $hashed_password, $email);

            if ($stmt->execute()) {
                // Inscription réussie
                $success = 'Inscription réussie ! Vous pouvez maintenant vous connecter.';
                // Optionnel : redirection automatique après un certain temps
                header("refresh:3;url=login.php");
            } else {
                $error = 'Erreur lors de l\'inscription : ' . $stmt->error;
            }
        }
        $stmt->close();
    }
}

$conn->close(); // Fermer la connexion à la base de données
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css"> <!-- Lien vers votre fichier CSS -->
</head>
<body>
    <div class="container">
        <h2>Inscription</h2>

        <?php if ($error): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php elseif ($success): ?>
            <div class="success"><?php echo $success; ?></div>
        <?php endif; ?>

        <form action="register_process.php" method="POST">
            <input type="text" name="username" placeholder="Nom d'utilisateur" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Mot de passe" required>
            <button type="submit">S'inscrire</button>
        </form>
        <p>Déjà inscrit ? <a href="login.php">Connectez-vous ici</a>.</p>
    </div>
</body>
</html>

<?php
// Inclure la connexion à la base de données
include 'db_connect.php';

// Requête SQL pour récupérer toutes les catégories
$sql = "SELECT * FROM categories";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catégories du Forum</title>
</head>
<body>
    <h1>Catégories du Forum</h1>
    
    <?php
    // Vérifier si des catégories existent
    if ($result->num_rows > 0) {
        // Affichage des catégories
        while ($row = $result->fetch_assoc()) {
            echo "<div class='category'>";
            echo "<h2><a href='topics.php?id=" . $row['id'] . "'>" . htmlspecialchars($row['name']) . "</a></h2>";
            echo "<p>" . htmlspecialchars($row['description']) . "</p>";
            echo "</div><hr>";
        }
    } else {
        echo "<p>Aucune catégorie disponible.</p>";
    }

    // Fermer la connexion à la base de données
    $conn->close();
    ?>
</body>
</html>

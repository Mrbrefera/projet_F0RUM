<?php
// Inclure la connexion à la base de données
include 'db_connect.php';

// Requête SQL pour récupérer tous les sujets du forum
$sql = "SELECT topics.id, topics.title, topics.content, topics.created_at, utilisateurs.username 
        FROM topics 
        INNER JOIN utilisateurs ON topics.user_id = utilisateurs.id
        ORDER BY topics.created_at DESC";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sujets du Forum</title>
</head>
<body>
    <h1>Tous les sujets du forum</h1>
    
    <?php
    // Vérifier s'il y a des sujets
    if ($result->num_rows > 0) {
        // Affichage des sujets
        while ($row = $result->fetch_assoc()) {
            echo "<div class='topic'>";
            echo "<h2>" . htmlspecialchars($row['title']) . "</h2>";
            echo "<p><strong>Créé par : </strong>" . htmlspecialchars($row['username']) . "</p>";
            echo "<p><strong>Publié le : </strong>" . $row['created_at'] . "</p>";
            echo "<p>" . nl2br(htmlspecialchars($row['content'])) . "</p>";
            echo "<a href='view_topic.php?id=" . $row['id'] . "'>Voir le sujet</a>";
            echo "</div><hr>";
        }
    } else {
        echo "<p>Aucun sujet n'a été trouvé.</p>";
    }

    // Fermer la connexion à la base de données
    $conn->close();
    ?>
</body>
</html>

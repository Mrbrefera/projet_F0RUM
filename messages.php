<?php
// Inclure la connexion à la base de données
include 'db_connect.php';

// Vérifier si l'ID du sujet est passé dans l'URL
if (isset($_GET['id'])) {
    $topic_id = intval($_GET['id']); // Récupérer et sécuriser l'ID du sujet

    // Requête SQL pour récupérer tous les messages associés au sujet
    $sql = "SELECT messages.id, messages.content, messages.created_at, utilisateurs.username 
            FROM messages 
            INNER JOIN utilisateurs ON messages.user_id = utilisateurs.id 
            WHERE messages.topic_id = ?
            ORDER BY messages.created_at ASC";

    // Préparer la requête
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $topic_id); // Lier l'ID du sujet à la requête
    $stmt->execute();
    $result = $stmt->get_result();

    // Requête pour récupérer le titre du sujet
    $sql_topic = "SELECT title FROM topics WHERE id = ?";
    $stmt_topic = $conn->prepare($sql_topic);
    $stmt_topic->bind_param("i", $topic_id);
    $stmt_topic->execute();
    $topic_result = $stmt_topic->get_result();
    $topic = $topic_result->fetch_assoc();
} else {
    echo "Aucun sujet spécifié.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages de: <?php echo htmlspecialchars($topic['title']); ?></title>
</head>
<body>
    <h1>Messages de: <?php echo htmlspecialchars($topic['title']); ?></h1>
    
    <?php
    // Vérifier s'il y a des messages
    if ($result->num_rows > 0) {
        // Affichage des messages
        while ($row = $result->fetch_assoc()) {
            echo "<div class='message'>";
            echo "<p><strong>" . htmlspecialchars($row['username']) . "</strong> <em>" . $row['created_at'] . "</em></p>";
            echo "<p>" . nl2br(htmlspecialchars($row['content'])) . "</p>";
            echo "</div><hr>";
        }
    } else {
        echo "<p>Aucun message n'a été trouvé pour ce sujet.</p>";
    }

    // Fermer la connexion à la base de données
    $conn->close();
    ?>
</body>
</html>

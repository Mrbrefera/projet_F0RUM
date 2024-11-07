<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "forum"; // Remplace par ton nom de base de données

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupérer les catégories depuis la base de données
$sql = "SELECT * FROM categories";
$result = $conn->query($sql);

// Créer un tableau des catégories
$categories = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $categories[] = $row;
    }
}

$conn->close();
?>

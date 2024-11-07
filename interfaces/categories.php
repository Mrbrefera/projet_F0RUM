<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catégories - Forum</title>
    <link rel="stylesheet" href="styless.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <a href="index.php" class="navbar-brand">Le BricoForum</a>
        <div class="navbar-nav">
            <a href="create_topic.php" class="nav-link">Créer une Publication</a>
            <a href="categories.php" class="nav-link">Catégories</a>
        </div>
    </nav>

    <!-- Contenu principal de la page -->
    <div class="container mt-5">
        <h1 class="text-center mb-4">Catégories du Forum</h1>

        <!-- Liste des catégories -->
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="category1.jpg" class="card-img-top" alt="Catégorie 1">
                    <div class="card-body">
                        <h5 class="card-title">Catégorie 1</h5>
                        <p class="card-text">Description de la catégorie 1. Discutez de divers sujets dans cette catégorie.</p>
                        <a href="category-detail.php?category=1" class="btn btn-primary">Voir les publications</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="category2.jpg" class="card-img-top" alt="Catégorie 2">
                    <div class="card-body">
                        <h5 class="card-title">Catégorie 2</h5>
                        <p class="card-text">Explorez des discussions variées dans la catégorie 2.</p>
                        <a href="category-detail.php?category=2" class="btn btn-primary">Voir les publications</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="category3.jpg" class="card-img-top" alt="Catégorie 3">
                    <div class="card-body">
                        <h5 class="card-title">Catégorie 3</h5>
                        <p class="card-text">Une catégorie pour discuter de sujets variés dans ce domaine.</p>
                        <a href="category-detail.php?category=3" class="btn btn-primary">Voir les publications</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <footer>
        <p class="text-center">&copy; 2024 Forum - Tous droits réservés</p>
    </footer>

</body>
</html>

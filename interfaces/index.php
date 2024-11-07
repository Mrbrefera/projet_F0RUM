<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Forum</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar">
        <a href="index.php" class="navbar-brand">Le BricoForum</a>
        <div class="navbar-nav">
            <a href="register.php" class="nav-link">Inscription</a>
            <a href="login.php" class="nav-link">Connexion</a>
            <a href="categories.php" class="nav-link">Catégories</a>
            <a href="messages.php" class="nav-link">messages</a>
        </div>
    </nav>

    <!-- Carrousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/5.jpeg" class="d-block w-100" alt="Image 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Bienvenue sur notre Forum</h5>
                    <p>Participez aux discussions avec notre communauté !</p>
                    <a href="create_topic.php" class="btn btn-primary">Create new publish</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Suivant</span>
        </button>
    </div>

    <!-- Sections de catégories -->
    <!-- Sections de catégories -->
    <main class="card-container">
    <div class="card">
        <img src="imges/1.jpeg" class="card-img-top" alt="Catégorie 1">
        <div class="card-body">
            <h5 class="card-title">Catégorie 1</h5>
            <p class="card-text">Description de la catégorie 1.</p>
            <a href="category1.php" class="btn btn-primary">Voir plus</a>
        </div>
    </div>
    <div class="card">
        <img src="imges/2.jpeg" class="card-img-top" alt="Catégorie 2">
        <div class="card-body">
            <h5 class="card-title">Catégorie 1</h5>
            <p class="card-text">Description de la catégorie 1.</p>
            <a href="category1.php" class="btn btn-primary">Voir plus</a>
        </div>
    </div>
    <div class="card">
        <img src="imges/3.jpeg" class="card-img-top" alt="Catégorie 3">
        <div class="card-body">
            <h5 class="card-title">Catégorie 1</h5>
            <p class="card-text">Description de la catégorie 1.</p>
            <a href="category1.php" class="btn btn-primary">Voir plus</a>
        </div>
    </div>
    <!-- Répète pour chaque carte -->
</main>


    <!-- Footer -->
    <footer class="bg-light text-center py-3">
        <p>&copy; 2024 Forum</p>
    </footer>

    <!-- Bootstrap Bundle JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>

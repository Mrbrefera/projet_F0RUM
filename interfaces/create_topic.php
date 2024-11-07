<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une Nouvelle Publication - Forum</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Le BricoForum</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Connexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="categories.php">Catégories</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Title -->
    <div class="container mt-5">
        <h1 class="text-center mb-4">Créer une Nouvelle Publication</h1>

        <!-- Formulaire de création de publication -->
        <form action="process-create-topic.php" method="POST">
            <div class="mb-3">
                <label for="title" class="form-label">Titre de la publication</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Choisissez une catégorie</label>
                <select class="form-select" id="category" name="category" required>
                    <option value="" disabled selected>Sélectionnez une catégorie</option>
                    <option value="1">Catégorie 1</option>
                    <option value="2">Catégorie 2</option>
                    <option value="3">Catégorie 3</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Contenu de la publication</label>
                <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Publier</button>
        </form>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center py-3">
        <p>&copy; 2024 Forum</p>
    </footer>

    <!-- Bootstrap Bundle JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>

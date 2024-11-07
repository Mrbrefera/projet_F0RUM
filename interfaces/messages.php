<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages - Forum</title>
    <link rel="stylesheet" href="stylee.css"> <!-- Lien vers ton fichier CSS -->
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <a class="navbar-brand" href="index.php">Le BricoForum</a>
        <div class="navbar-nav">
            <a class="nav-link" href="create-topic.php">Créer une publication</a>
            <a class="nav-link" href="categories.php">Catégories</a>
            <a class="nav-link" href="profile.php">Profil</a>
        </div>
    </nav>

    <!-- Main content -->
    <div class="container mt-5">
        <h1 class="text-center mb-4">Toutes les Publications</h1>

        <div class="row">
            <!-- Example of a publication -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="path-to-image.jpg" class="card-img-top" alt="Image de la publication">
                    <div class="card-body">
                        <h5 class="card-title">Titre de la publication</h5>
                        <p class="card-text">Voici un extrait du contenu de la publication. Il peut s'agir des premières lignes ou d'une introduction à la discussion.</p>
                        <a href="view-post.php?id=1" class="btn btn-primary">Voir la publication</a>
                    </div>
                </div>
            </div>

            <!-- Another publication -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="path-to-image.jpg" class="card-img-top" alt="Image de la publication">
                    <div class="card-body">
                        <h5 class="card-title">Titre de la publication</h5>
                        <p class="card-text">Un autre extrait de contenu, pour une autre publication. L'extrait donne un aperçu du contenu de manière engageante.</p>
                        <a href="view-post.php?id=2" class="btn btn-primary">Voir la publication</a>
                    </div>
                </div>
            </div>

            <!-- More publications can be added similarly -->

        </div> <!-- /.row -->

    </div> <!-- /.container -->

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Forum - Tous droits réservés.</p>
    </footer>

</body>
</html>

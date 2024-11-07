<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion · Le BricoForum</title>
    
    <!-- Inclure Bootstrap via CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- CSS personnalisé -->
    <style>
      body {
        background-color: #f4f4f4;
      }
      .form-signin {
        max-width: 400px;
        margin: 100px auto;
        padding: 30px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      }
      .form-signin h1 {
        margin-bottom: 20px;
        text-align: center;
      }
      .form-floating {
        margin-bottom: 20px; /* Espacement supplémentaire entre les champs */
      }
      .form-check {
        margin-bottom: 20px;
      }
      .btn-primary {
        width: 100%;
        padding: 10px;
      }
      .text-center {
        margin-top: 10px;
      }
    </style>
  </head>
  
  <body>
    <div class="form-signin">
      <form action="login_process.php" method="POST">
        <h1 class="h3 mb-3 fw-normal">Connexion</h1>

        <!-- Champ Email -->
        <div class="form-floating">
          <input type="email" class="form-control" id="floatingEmail" name="email" placeholder="name@example.com" required>
          <label for="floatingEmail">Adresse e-mail</label>
        </div>

        <!-- Champ Mot de passe -->
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Mot de passe" required>
          <label for="floatingPassword">Mot de passe</label>
        </div>

        <!-- Case à cocher pour se souvenir de l'utilisateur -->
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            Se souvenir de moi
          </label>
        </div>

        <!-- Bouton de soumission -->
        <button class="btn btn-primary w-100 py-2" type="submit">Se connecter</button>
      </form>

      <!-- Lien vers la page d'inscription -->
      <div class="text-center">
        <p>Pas encore de compte ? <a href="register.php">Inscrivez-vous ici</a></p>
      </div>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

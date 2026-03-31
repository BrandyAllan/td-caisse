<?php

if (!function_exists('e')) {
  function e($v) {
    return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8');
  }
}

$user = $user ?? null;
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Accueil</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <span class="navbar-brand">Mon Application</span>

    <div class="ms-auto">
      <span class="text-white me-3">
        Connecté : <?= e($user['prenom'] ?? '') ?> <?= e($user['nom'] ?? '') ?>
      </span>
      <a href="/logout" class="btn btn-outline-light btn-sm">Déconnexion</a>
    </div>
  </div>
</nav>

<div class="container py-5">
  <div class="card shadow-sm">
    <div class="card-body">
      <h1 class="h4 mb-3">Bienvenue 👋</h1>

      <p class="mb-2">
        Tu es connecté avec l’email :
        <strong><?= e($user['email'] ?? '') ?></strong>
      </p>

      <hr>

      <p class="text-muted mb-0">
        Cette page est accessible uniquement après authentification.
      </p>
    </div>
  </div>
</div>

</body>
</html>

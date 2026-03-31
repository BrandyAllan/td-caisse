<?php
if (!function_exists('e')) {
  function e($v) {
    return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8');
  }
}

if (!function_exists('cls_invalid')) {
  function cls_invalid($field, $errors) {
    return (!empty($errors[$field])) ? 'is-invalid' : '';
  }
}

$values  = $values  ?? ['email' => ''];
$errors  = $errors  ?? ['email' => '', 'password' => '', '_global' => ''];
$success = $success ?? false;
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Connexion</title>
  <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body class="bg-light">
  <div class="container py-5" style="max-width: 520px;">
    <div class="card shadow-sm">
      <div class="card-body p-4">
        <h1 class="h4 mb-3">Connexion</h1>
        <p class="text-muted mb-4">Connecte-toi avec ton email et ton mot de passe.</p>

        <?php if (!empty($errors['_global'])): ?>
          <div class="alert alert-danger" role="alert">
            <?= e($errors['_global']) ?>
          </div>
        <?php endif; ?>

        <?php if ($success): ?>
          <div class="alert alert-success" role="alert">
            Inscription réussie, veuillez vous connecter.
          </div>
        <?php endif; ?>

        <form id="loginForm" method="post" action="/login" novalidate>
          <div id="formStatus" class="alert d-none"></div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input
              type="email"
              class="form-control <?= cls_invalid('email', $errors) ?>"
              id="email"
              name="email"
              value="<?= e($values['email'] ?? '') ?>"
              autocomplete="email"
              required
            >
            <?php if (!empty($errors['email'])): ?>
              <div class="invalid-feedback d-block" id="emailError">
                <?= e($errors['email']) ?>
              </div>
            <?php else: ?>
              <div class="invalid-feedback" id="emailError"></div>
            <?php endif; ?>
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input
              type="password"
              class="form-control <?= cls_invalid('password', $errors) ?>"
              id="password"
              name="password"
              autocomplete="current-password"
              required
            >
            <?php if (!empty($errors['password'])): ?>
              <div class="invalid-feedback d-block" id="passwordError">
                <?= e($errors['password']) ?>
              </div>
            <?php else: ?>
              <div class="invalid-feedback" id="passwordError"></div>
            <?php endif; ?>
          </div>

          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-success">Se connecter</button>
            <a href="/" class="btn btn-outline-primary">Créer un compte</a>
          </div>
        </form>

      </div>
    </div>
  </div>

  <script src="/js/login-ajax.js" defer></script>
</body>
</html>

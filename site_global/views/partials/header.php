<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($titre ?? NOM) ?></title>
  <link rel="icon" type="image/png" href="<?= BASE_URL ?>/assets/images/logo.png">
  <link rel="stylesheet" href="<?= BASE_URL ?>/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>/assets/bootstrap/css/bootstrap-icons.min.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">
</head>
<body>

<!-- ── Navbar ── -->
<nav class="navbar navbar-expand-lg navbar-dark tp-nav sticky-top">
  <div class="container">

    <a class="navbar-brand d-flex align-items-center gap-2" href="<?= BASE_URL ?>/index.php">
      <img src="<?= BASE_URL ?>/assets/images/logo.png" height="38" alt="Logo"
           onerror="this.style.display='none'">
      <span class="fw-bold fs-5"><?= NOM ?></span>
    </a>

    <button class="navbar-toggler border-0" type="button"
            data-bs-toggle="collapse" data-bs-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav ms-auto align-items-lg-center gap-1">
        <?php
        $liens = [
          'home'     => 'Accueil',
          'services' => 'Services',
          'apropos'  => 'À Propos',
        ];
        foreach ($liens as $p => $label):
          $href = ($p === 'home')
            ? BASE_URL . '/index.php'
            : BASE_URL . '/index.php?page=' . $p;
        ?>
        <li class="nav-item">
          <a class="nav-link <?= ($actif ?? '') === $p ? 'active' : '' ?>"
             href="<?= $href ?>"><?= $label ?></a>
        </li>
        <?php endforeach; ?>
        <li class="nav-item ms-lg-2">
          <a class="btn tp-btn-contact"
             href="<?= BASE_URL ?>/index.php?page=contact">
            <i class="bi bi-envelope-fill me-1"></i>Contact
          </a>
        </li>
      </ul>
    </div>

  </div>
</nav>

<!-- ── Contenu de la page (inséré ici par les vues) ── -->

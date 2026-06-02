<section class="tp-page-header">
  <div class="container text-center">
    <h1 class="text-white fw-bold mb-2">Nos Services</h1>
    <p class="text-white-50 mb-3">Solutions informatiques complètes pour entreprises, institutions et particuliers.</p>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb justify-content-center mb-0 small">
        <li class="breadcrumb-item">
          <a href="<?= BASE_URL ?>/index.php" class="text-info text-decoration-none">Accueil</a>
        </li>
        <li class="breadcrumb-item active text-white-50">Nos Services</li>
      </ol>
    </nav>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container">
    <div class="row g-4">
      <?php foreach ($services as $i => $s): ?>
      <div class="col-lg-4 col-md-6">
        <div class="card tp-card h-100 position-relative">
          <span class="tp-service-num">0<?= $i + 1 ?></span>
          <div class="card-body p-4 d-flex flex-column">
            <div class="tp-service-icon text-<?= $s['couleur'] ?> mb-3">
              <i class="bi <?= $s['icone'] ?>"></i>
            </div>
            <h5 class="fw-bold mb-2"><?= htmlspecialchars($s['titre']) ?></h5>
            <p class="text-muted small"><?= htmlspecialchars($s['desc']) ?></p>
            <ul class="list-unstyled small mb-3">
              <?php foreach ($s['details'] as $d): ?>
              <li class="py-1 border-bottom">
                <i class="bi bi-check2-circle text-primary me-2"></i><?= htmlspecialchars($d) ?>
              </li>
              <?php endforeach; ?>
            </ul>
            <a href="<?= BASE_URL ?>/index.php?page=contact"
               class="mt-auto text-primary text-decoration-none small fw-semibold">
              Demander un devis <i class="bi bi-arrow-right ms-1"></i>
            </a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="tp-cta py-5">
  <div class="container text-center">
    <h2 class="text-white fw-bold">Vous avez un besoin spécifique ?</h2>
    <p class="text-white-50 mt-2 mb-4">Nos experts vous proposent une solution adaptée.</p>
    <a href="<?= BASE_URL ?>/index.php?page=contact" class="btn btn-light btn-lg fw-bold">
      <i class="bi bi-envelope-fill me-2"></i>Contactez-nous
    </a>
  </div>
</section>

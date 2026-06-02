
<!-- ── Footer ────────────────────────────────────────────────────────────── -->
<footer class="bg-dark text-white pt-5 pb-3">
  <div class="container">
    <div class="row g-4">

      <div class="col-lg-4 col-md-6">
        <div class="d-flex align-items-center gap-2 mb-3">
          <img src="<?= BASE_URL ?>/assets/images/logo.png" height="32" alt=""
               onerror="this.style.display='none'">
          <strong><?= NOM ?></strong>
        </div>
        <p class="text-white-50 small"><?= SLOGAN ?>.</p>
        <div class="d-flex gap-2 mt-3">
          <a href="#" class="btn btn-sm btn-outline-secondary"><i class="bi bi-facebook"></i></a>
          <a href="#" class="btn btn-sm btn-outline-secondary"><i class="bi bi-linkedin"></i></a>
          <a href="https://wa.me/237600000000" target="_blank"
             class="btn btn-sm btn-outline-secondary"><i class="bi bi-whatsapp"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-md-6">
        <h6 class="text-white-50 text-uppercase small fw-bold mb-3">Navigation</h6>
        <ul class="list-unstyled small">
          <li class="mb-1"><a href="<?= BASE_URL ?>/index.php"              class="text-white-50 text-decoration-none">Accueil</a></li>
          <li class="mb-1"><a href="<?= BASE_URL ?>/index.php?page=services" class="text-white-50 text-decoration-none">Nos Services</a></li>
          <li class="mb-1"><a href="<?= BASE_URL ?>/index.php?page=apropos"  class="text-white-50 text-decoration-none">À Propos</a></li>
          <li class="mb-1"><a href="<?= BASE_URL ?>/index.php?page=contact"  class="text-white-50 text-decoration-none">Contact</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6">
        <h6 class="text-white-50 text-uppercase small fw-bold mb-3">Nos Services</h6>
        <ul class="list-unstyled small text-white-50">
          <li class="mb-1">Prestation & Conseil</li>
          <li class="mb-1">Vente d'Équipements</li>
          <li class="mb-1">Installation & Réseau</li>
          <li class="mb-1">Maintenance & Support</li>
          <li class="mb-1">Vidéosurveillance</li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6">
        <h6 class="text-white-50 text-uppercase small fw-bold mb-3">Contact</h6>
        <ul class="list-unstyled small text-white-50">
          <li class="mb-2"><i class="bi bi-geo-alt-fill me-2 text-info"></i><?= ADRESSE ?></li>
          <li class="mb-2">
            <i class="bi bi-telephone-fill me-2 text-info"></i>
            <a href="tel:<?= TEL ?>" class="text-white-50 text-decoration-none"><?= TEL ?></a>
          </li>
          <li>
            <i class="bi bi-envelope-fill me-2 text-info"></i>
            <a href="mailto:<?= EMAIL ?>" class="text-white-50 text-decoration-none"><?= EMAIL ?></a>
          </li>
        </ul>
      </div>

    </div>
    <hr class="border-secondary mt-4">
    <div class="d-flex flex-wrap justify-content-between small text-white-50">
      <span>&copy; <?= date('Y') ?> <?= NOM ?>. Tous droits réservés.</span>
      <span>Conçu au Cameroun par L.s.A <i class="bi bi-heart-fill text-danger"></i></span>
    </div>
  </div>
</footer>

<script src="<?= BASE_URL ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= BASE_URL ?>/assets/js/app.js"></script>
</body>
</html>

<!-- ── HERO ──────────────────────────────────────────────────────────────── -->
<section class="tp-hero d-flex align-items-center">
  <div class="container position-relative z-1">
    <div class="row align-items-center gy-5">

      <div class="col-lg-7">
        <span class="tp-badge mb-3">
          <i class="bi bi-lightning-charge-fill me-1"></i>Informatique . Solutions . Innovation
        </span>
        <h1 class="tp-hero-title">
          La technologie<br>
          <span class="tp-accent">au service</span><br>
          de votre succès
        </h1>
        <p class="text-white-50 mt-3 mb-4" style="font-size:1.05rem;max-width:520px">
          <?= NOM ?> vous accompagne dans tous vos projets informatiques :
          vente d'équipements, installation de réseaux, maintenance
          et développement de solutions sur mesure.
        </p>
        <div class="d-flex flex-wrap gap-3">
          <a href="<?= BASE_URL ?>/index.php?page=services" class="btn tp-btn-primary btn-lg">
            <i class="bi bi-grid-fill me-2"></i>Nos services
          </a>
          <a href="<?= BASE_URL ?>/index.php?page=contact" class="btn tp-btn-outline btn-lg">
            <i class="bi bi-chat-dots-fill me-2"></i>Nous contacter
          </a>
        </div>
      </div>

      <div class="col-lg-5 d-none d-lg-block">
        <div class="tp-icon-grid">
          <?php foreach (['bi-cpu-fill','bi-wifi','bi-shield-fill-check','bi-hdd-stack-fill','bi-pc-display','bi-code-slash','bi-camera-video-fill','bi-headset','bi-tools'] as $ic): ?>
            <span><i class="bi <?= $ic ?>"></i></span>
          <?php endforeach; ?>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ── STATS ─────────────────────────────────────────────────────────────── -->
<section class="bg-white border-bottom py-4">
  <div class="container">
    <div class="row text-center g-0">
      <?php
      $stats = ['5+'=>"Années d'expérience",'200+'=>'Clients satisfaits','500+'=>'Équipements installés','24/7'=>'Support disponible'];
      $i = 0;
      foreach ($stats as $val => $lib): ?>
        <div class="col-6 col-md-3 py-2 <?= $i < 3 ? 'border-end' : '' ?>">
          <div class="fs-2 fw-bold text-primary"><?= $val ?></div>
          <div class="small text-muted"><?= $lib ?></div>
        </div>
      <?php $i++; endforeach; ?>
    </div>
  </div>
</section>

<!-- ── SERVICES EN VEDETTE ───────────────────────────────────────────────── -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <p class="tp-section-label">Ce que nous faisons</p>
      <h2 class="tp-section-title">Nos principaux services</h2>
      <p class="text-muted">Des solutions complètes pour tous vos besoins informatiques professionnels.</p>
    </div>
    <div class="row g-4">
      <?php foreach ($services as $s): ?>
      <div class="col-lg-4 col-md-6">
        <div class="card tp-card h-100">
          <div class="card-body p-4">
            <div class="tp-service-icon text-<?= $s['couleur'] ?> mb-3">
              <i class="bi <?= $s['icone'] ?>"></i>
            </div>
            <h5 class="fw-bold mb-2"><?= htmlspecialchars($s['titre']) ?></h5>
            <p class="text-muted small"><?= htmlspecialchars($s['desc']) ?></p>
            <ul class="list-unstyled small mb-0">
              <?php foreach ($s['details'] as $d): ?>
              <li class="py-1 border-bottom">
                <i class="bi bi-check2-circle text-primary me-2"></i><?= htmlspecialchars($d) ?>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="text-center mt-4">
      <a href="<?= BASE_URL ?>/index.php?page=services" class="btn tp-btn-primary">
        <i class="bi bi-arrow-right-circle-fill me-2"></i>Voir tous les services
      </a>
    </div>
  </div>
</section>

<!-- ── POURQUOI NOUS ─────────────────────────────────────────────────────── -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <p class="tp-section-label">Pourquoi nous choisir</p>
        <h2 class="tp-section-title">Un partenaire fiable pour votre transformation digitale</h2>
        <p class="text-muted mt-3">
          Forts de plusieurs années d'expérience, nous avons bâti notre réputation sur la confiance,
          la compétence et la proximité avec nos clients dans la région du Grand Nord Cameroun.
        </p>
        <div class="row g-3 mt-1">
          <?php
          $atouts = [
            ['bi-people-fill','primary','Équipe expérimentée','Techniciens certifiés et formés en continu.'],
            ['bi-geo-alt-fill','success','Présence locale','Interventions rapides sur Ngaoundéré et environs.'],
            ['bi-currency-exchange','warning','Tarifs compétitifs','Solutions adaptées à tous les budgets.'],
            ['bi-headset','info','Support continu','Assistance disponible 7j/7 pour nos clients.'],
          ];
          foreach ($atouts as [$ic,$col,$lib,$txt]): ?>
          <div class="col-sm-6">
            <div class="d-flex align-items-start gap-3 p-3 rounded-3 bg-light border h-100">
              <i class="bi <?= $ic ?> fs-4 text-<?= $col ?> flex-shrink-0 mt-1"></i>
              <div>
                <strong class="d-block small"><?= $lib ?></strong>
                <span class="text-muted" style="font-size:.82rem"><?= $txt ?></span>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        <a href="<?= BASE_URL ?>/index.php?page=apropos" class="btn tp-btn-primary mt-4">
          <i class="bi bi-info-circle-fill me-2"></i>En savoir plus sur nous
        </a>
      </div>
      <div class="col-lg-6">
        <div class="row g-3">
          <?php foreach (['5+'=>"Années d'exp.",'200+'=>'Clients satisfaits','500+'=>'Équipements','10+'=>'Techniciens'] as $n=>$l): ?>
          <div class="col-6">
            <div class="p-4 rounded-3 border text-center bg-light">
              <div class="fs-2 fw-bold text-primary"><?= $n ?></div>
              <div class="small text-muted mt-1"><?= $l ?></div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── CTA ───────────────────────────────────────────────────────────────── -->
<section class="tp-cta py-5">
  <div class="container text-center">
    <h2 class="text-white fw-bold">Prêt à démarrer votre projet ?</h2>
    <p class="text-white-50 mt-2 mb-4">Contactez-nous pour un devis gratuit et personnalisé.</p>
    <div class="d-flex justify-content-center flex-wrap gap-3">
      <a href="<?= BASE_URL ?>/index.php?page=contact" class="btn btn-light btn-lg fw-bold">
        <i class="bi bi-envelope-fill me-2"></i>Demander un devis gratuit
      </a>
      <a href="tel:<?= TEL ?>" class="btn btn-outline-light btn-lg">
        <i class="bi bi-telephone-fill me-2"></i><?= TEL ?>
      </a>
    </div>
  </div>
</section>

<section class="tp-page-header">
  <div class="container text-center">
    <h1 class="text-white fw-bold mb-2">À Propos de Nous</h1>
    <p class="text-white-50 mb-3">Qui sommes-nous et pourquoi faire confiance à <?= NOM ?> ?</p>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb justify-content-center mb-0 small">
        <li class="breadcrumb-item">
          <a href="<?= BASE_URL ?>/index.php" class="text-info text-decoration-none">Accueil</a>
        </li>
        <li class="breadcrumb-item active text-white-50">À Propos</li>
      </ol>
    </nav>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center g-5">

      <div class="col-lg-6">
        <p class="tp-section-label">Notre histoire</p>
        <h2 class="tp-section-title">Née de la passion pour la technologie</h2>
        <p class="text-muted mt-3">
          <?= NOM ?> est une entreprise spécialisée dans les technologies de l'information,
          implantée dans la région Nord au Cameroun. Depuis notre création, nous nous sommes donnés pour
          mission de rendre les solutions informatiques accessibles et performantes pour toutes les organisations.
        </p>
        <p class="text-muted">
          Nous intervenons auprès d'entreprises, d'administrations, d'établissements scolaires et de particuliers
          avec un engagement fort : la satisfaction totale du client et la qualité irréprochable de nos prestations.
        </p>
        <div class="row g-3 mt-2">
          <div class="col-6">
            <div class="p-3 bg-white rounded-3 border text-center">
              <div class="fs-2 fw-bold text-primary">20**</div>
              <div class="small text-muted">Année de fondation</div>
            </div>
          </div>
          <div class="col-6">
            <div class="p-3 bg-white rounded-3 border text-center">
              <div class="fs-2 fw-bold text-primary">10+</div>
              <div class="small text-muted">Techniciens qualifiés</div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <?php
        $valeurs = [
          ['bi-bullseye','primary','Notre Mission',
           "Fournir des solutions informatiques fiables, innovantes et accessibles qui permettent à nos clients d'atteindre leurs objectifs."],
          ['bi-eye-fill','info','Notre Vision',
           'Être le partenaire technologique de référence dans la région Grand Nord Cameroun et au-delà.'],
          ['bi-gem','warning','Nos Valeurs',
           'Intégrité, excellence technique, proximité client et innovation continue guident chacune de nos interventions.'],
        ];
        foreach ($valeurs as [$ic,$col,$lib,$txt]): ?>
        <div class="d-flex align-items-start gap-3 p-3 bg-white rounded-3 border mb-3">
          <i class="bi <?= $ic ?> fs-3 text-<?= $col ?> flex-shrink-0"></i>
          <div>
            <strong class="d-block mb-1"><?= $lib ?></strong>
            <span class="text-muted small"><?= $txt ?></span>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- Équipe -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="text-center mb-5">
      <p class="tp-section-label">Les personnes derrière le projet</p>
      <h2 class="tp-section-title">Notre Équipe</h2>
    </div>
    <div class="row g-4 justify-content-center">
      <?php
      $equipe = [
        ['Nom1', 'Directeur Général & Expert Réseau', 'bi-person-workspace'],
        ['Nom2',  'Responsable Commercial & Support',  'bi-person-lines-fill'],
        ['Nom3',     'Ingénieur Systèmes & Développeur',  'bi-person-gear'],
      ];
      foreach ($equipe as [$nom,$poste,$ic]): ?>
      <div class="col-lg-4 col-md-6">
        <div class="card border text-center p-4">
          <div class="tp-avatar mx-auto mb-3">
            <i class="bi <?= $ic ?>"></i>
          </div>
          <h6 class="fw-bold mb-1"><?= $nom ?></h6>
          <p class="text-muted small mb-0"><?= $poste ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="tp-cta py-5">
  <div class="container text-center">
    <h2 class="text-white fw-bold">Travaillons ensemble !</h2>
    <p class="text-white-50 mt-2 mb-4">Discutons de votre projet sans engagement.</p>
    <a href="<?= BASE_URL ?>/index.php?page=contact" class="btn btn-light btn-lg fw-bold">
      <i class="bi bi-chat-dots-fill me-2"></i>Prendre contact
    </a>
  </div>
</section>

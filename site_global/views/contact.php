<section class="tp-page-header">
  <div class="container text-center">
    <h1 class="text-white fw-bold mb-2">Contactez-nous</h1>
    <p class="text-white-50 mb-3">Notre équipe est disponible pour répondre à toutes vos questions.</p>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb justify-content-center mb-0 small">
        <li class="breadcrumb-item">
          <a href="<?= BASE_URL ?>/index.php" class="text-info text-decoration-none">Accueil</a>
        </li>
        <li class="breadcrumb-item active text-white-50">Contact</li>
      </ol>
    </nav>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container">
    <div class="row g-5">

      <!-- Formulaire -->
      <div class="col-lg-7">
        <div class="bg-white rounded-3 border p-4 p-md-5">
          <h5 class="fw-bold mb-4">
            <i class="bi bi-send-fill me-2 text-primary"></i>Envoyer un message
          </h5>
          <form id="formContact" novalidate>
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label small fw-semibold">Nom complet *</label>
                <input type="text" class="form-control" placeholder="Nom Prénom" required>
                <div class="invalid-feedback">Veuillez saisir votre nom.</div>
              </div>
              <div class="col-md-6">
                <label class="form-label small fw-semibold">Email *</label>
                <input type="email" class="form-control" placeholder="ex: nom@domaine.com" required>
                <div class="invalid-feedback">Email invalide.</div>
              </div>
              <div class="col-md-6">
                <label class="form-label small fw-semibold">Téléphone</label>
                <input type="tel" class="form-control" placeholder="+237 6XX XXX XXX">
              </div>
              <div class="col-md-6">
                <label class="form-label small fw-semibold">Sujet *</label>
                <select class="form-select" required>
                  <option value="">Choisir...</option>
                  <option>Demande de devis</option>
                  <option>Demande d'informations</option>
                  <option>Contrat de maintenance</option>
                  <option>Autre</option>
                </select>
                <div class="invalid-feedback">Veuillez choisir un sujet.</div>
              </div>
              <div class="col-12">
                <label class="form-label small fw-semibold">Message *</label>
                <textarea class="form-control" rows="5"
                          placeholder="Décrivez votre besoin..." required></textarea>
                <div class="invalid-feedback">Veuillez saisir un message.</div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn tp-btn-primary w-100 btn-lg">
                  <i class="bi bi-send-fill me-2"></i>Envoyer le message
                </button>
              </div>
            </div>
          </form>
          <div id="alertOk" class="alert alert-success mt-3 d-none">
            <i class="bi bi-check-circle-fill me-2"></i>
            Message envoyé ! Nous vous répondrons rapidement.
          </div>
        </div>
      </div>

      <!-- Coordonnées -->
      <div class="col-lg-5">
        <h5 class="fw-bold mb-4">
          <i class="bi bi-info-circle-fill me-2 text-primary"></i>Nos coordonnées
        </h5>

        <?php
        $coords = [
          ['bi-geo-alt-fill',    'primary', 'Adresse',             ADRESSE],
          ['bi-telephone-fill',  'success', 'Téléphone / WhatsApp', TEL],
          ['bi-envelope-fill',   'info',    'Email',               EMAIL],
          ['bi-clock-fill',      'warning', 'Horaires',            'Lun–Ven : 7h30–18h00 · Sam : 8h00–13h00'],
        ];
        foreach ($coords as [$ic,$col,$lib,$val]): ?>
        <div class="d-flex align-items-start gap-3 mb-4">
          <div class="tp-coord-icon bg-<?= $col ?> bg-opacity-10 text-<?= $col ?>">
            <i class="bi <?= $ic ?>"></i>
          </div>
          <div>
            <strong class="d-block small"><?= $lib ?></strong>
            <span class="text-muted small"><?= $val ?></span>
          </div>
        </div>
        <?php endforeach; ?>

        <a href="https://wa.me/237600000000" target="_blank"
           class="btn btn-success w-100 mt-2 fw-bold">
          <i class="bi bi-whatsapp me-2"></i>Discuter sur WhatsApp
        </a>
      </div>

    </div>
  </div>
</section>

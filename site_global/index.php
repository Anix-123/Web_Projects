<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/models/ServiceModel.php';
require_once __DIR__ . '/controllers/Controller.php';

// ── Lecture de la page demandée ────────────────────────────────────────────
// URL : index.php            → page = 'home'
// URL : index.php?page=services → page = 'services'
$page = isset($_GET['page']) ? trim($_GET['page']) : 'home';

// ── Pages autorisées (liste blanche) ──────────────────────────────────────
$pages = ['home', 'services', 'apropos', 'contact'];

if (!in_array($page, $pages, true)) {
    $page = '404';
}

// ── Dispatch ───────────────────────────────────────────────────────────────
$ctrl = new Controller();
$ctrl->afficher($page);

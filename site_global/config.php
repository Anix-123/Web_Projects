<?php
// ── BASE_URL : calculé automatiquement selon l'emplacement réel du projet ──
// Pas besoin de le modifier manuellement.
// Exemple : si le dossier est dans htdocs/vitrine2/ → BASE_URL = '/vitrine2'
$scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
define('BASE_URL', rtrim($scriptDir, '/'));

// ── Informations de l'entreprise ──
define('NOM',      'GLOBAL ART 5');
define('SLOGAN',   'Votre partenaire technologique de confiance');
define('TEL',      '+237 6XX XXX XXX');
define('EMAIL',    'contact@globalart5.cm');
define('ADRESSE',  'Garoua, Nord, Cameroun');

// ── Chemins absolus ──
define('VIEWS', __DIR__ . '/views');

// ── Erreurs (mettre à 0 en production) ──
ini_set('display_errors', 1);
error_reporting(E_ALL);

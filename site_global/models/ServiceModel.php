<?php
class ServiceModel
{
    public static function tous(): array
    {
        return [
            [
                'icone'   => 'bi-tools',
                'couleur' => 'primary',
                'titre'   => 'Prestation & Conseil',
                'desc'    => 'Audit, diagnostic et accompagnement pour optimiser vos systèmes informatiques.',
                'details' => ['Audit et diagnostic', 'Conseil en infrastructure', 'Formation technique'],
            ],
            [
                'icone'   => 'bi-pc-display',
                'couleur' => 'info',
                'titre'   => "Vente d'Équipements",
                'desc'    => 'Fourniture de matériel informatique neuf et reconditionné adapté à votre budget.',
                'details' => ['Ordinateurs & portables', 'Imprimantes & périphériques', 'Équipements réseau'],
            ],
            [
                'icone'   => 'bi-hdd-network',
                'couleur' => 'success',
                'titre'   => 'Installation & Réseau',
                'desc'    => 'Câblage, configuration de réseaux LAN/Wi-Fi et déploiement de postes.',
                'details' => ['Câblage & fibre optique', 'Configuration LAN/Wi-Fi', 'Déploiement serveurs'],
            ],
            [
                'icone'   => 'bi-shield-check',
                'couleur' => 'warning',
                'titre'   => 'Maintenance & Support',
                'desc'    => 'Contrats de maintenance préventive et corrective pour assurer votre continuité.',
                'details' => ['Maintenance préventive', 'Dépannage matériel/logiciel', 'Support 7j/7'],
            ],
            [
                'icone'   => 'bi-camera-video',
                'couleur' => 'danger',
                'titre'   => 'Vidéosurveillance',
                'desc'    => 'Installation de systèmes de vidéosurveillance pour entreprises et particuliers.',
                'details' => ['Caméras IP & analogiques', 'Systèmes NVR/DVR', 'Accès mobile à distance'],
            ],
            [
                'icone'   => 'bi-code-slash',
                'couleur' => 'dark',
                'titre'   => 'Développement Logiciel',
                'desc'    => 'Applications web et logiciels de gestion sur mesure selon vos processus métier.',
                'details' => ["Applications web & mobiles", 'Logiciels de gestion', 'Maintenance applicative'],
            ],
        ];
    }

    /** Retourne les 3 premiers services pour la page d'accueil */
    public static function vedette(): array
    {
        return array_slice(self::tous(), 0, 3);
    }
}

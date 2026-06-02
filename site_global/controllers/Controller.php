<?php
class Controller
{
    /**
     * Prépare les données selon la page, puis affiche header + vue + footer.
     */
    public function afficher(string $page): void
    {
        // 1. Récupérer les données de la page
        $data = $this->getData($page);

        // 2. Titre de l'onglet
        $titre = $data['titre'] ?? NOM;

        // 3. Rendre TOUTES les clés du tableau accessibles comme variables
        //    ($services, $actif, etc. deviennent disponibles dans les vues)
        extract($data);

        // 4. Affichage : header → contenu → footer
        require VIEWS . '/partials/header.php';
        require VIEWS . '/' . $page . '.php';
        require VIEWS . '/partials/footer.php';
    }

    /**
     * Retourne les données nécessaires à chaque page.
     */
    private function getData(string $page): array
    {
        switch ($page) {
            case 'home':
                return [
                    'titre'    => NOM . ' | Accueil',
                    'actif'    => 'home',
                    'services' => ServiceModel::vedette(),
                ];
            case 'services':
                return [
                    'titre'    => 'Nos Services | ' . NOM,
                    'actif'    => 'services',
                    'services' => ServiceModel::tous(),
                ];
            case 'apropos':
                return [
                    'titre' => 'À Propos | ' . NOM,
                    'actif' => 'apropos',
                ];
            case 'contact':
                return [
                    'titre' => 'Contact | ' . NOM,
                    'actif' => 'contact',
                ];
            default:
                return ['titre' => 'Page introuvable | ' . NOM, 'actif' => ''];
        }
    }
}

<?php

class CaisseController {
    private $caisseRepository;

    public function __construct($caisseRepository) {
        $this->caisseRepository = $caisseRepository;
    }

    public static function showCaisse($idcaisse) {
        $pdo = Flight::db();
        $repo = new CaisseRepository($pdo);

        $caisse = $repo->getCaisseById($idcaisse);

        if (!$caisse) {
        Flight::halt(404, 'Caisse introuvable');
        }

        $view = 'caisse/caisse-' . $idcaisse;

        Flight::render($view, [
        'caisse' => $caisse
        ]);
    }
}
<?php

class CaisseController {
    private $caisseRepository;

    public function __construct($caisseRepository) {
        $this->caisseRepository = $caisseRepository;
    }

    public static function chooseCaisse() {
        $pdo = Flight::db();
        $repo = new CaisseRepository($pdo);

        $caisses = $repo->getAllCaisse();

        Flight::render('caisse/accueil', [
            'caisses' => $caisses
        ]);
    }

    public static function showCaisse() {
        $pdo = Flight::db();
        $repo = new CaisseRepository($pdo);

        $req = Flight::request();

        $idcaisse = $req->data->id_caisse;

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
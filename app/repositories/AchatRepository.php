<?php
class AchatRepository {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllAchats() {
        $sql = "SELECT a.*, p.nom_produit, c.nom_caisse
                FROM achats a
                JOIN produits p ON a.id_produit = p.id_produit
                JOIN caisses c ON a.id_caisse = c.id_caisse";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAchatById($id) {
        $sql = "SELECT a.*, p.nom_produit, c.nom_caisse
                FROM achats a
                JOIN produits p ON a.id_produit = p.id_produit
                JOIN caisses c ON a.id_caisse = c.id_caisse
                WHERE a.id_achat = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
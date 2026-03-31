<?php
class CaisseRepository {
  private $pdo;

  public function __construct(PDO $pdo) {
    $this->pdo = $pdo;
  }

  public function getAllCaisse() {
    $st = $this->pdo->prepare("SELECT * FROM caisses");
    $st->execute();
    return $st->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getCaisseById($id) {
    $st = $this->pdo->prepare("SELECT * FROM caisses WHERE id_caisse = ? LIMIT 1");
    $st->execute([(int)$id]);
    return $st->fetch(PDO::FETCH_ASSOC);
  }
}
<?php
class UserRepository {
  private $pdo;
  public function __construct(PDO $pdo) { $this->pdo = $pdo; }

  public function emailExists($email) {
    $st = $this->pdo->prepare("SELECT 1 FROM users WHERE email=? LIMIT 1");
    $st->execute([(string)$email]);
    return (bool)$st->fetchColumn();
  }

  public function create($nom, $prenom, $email, $hash, $telephone) {
    $st = $this->pdo->prepare("
      INSERT INTO users(nom, prenom, email, password_hash, telephone)
      VALUES(?,?,?,?,?)
    ");
    $st->execute([(string)$nom, (string)$prenom, (string)$email, (string)$hash, (string)$telephone]);
    return $this->pdo->lastInsertId();
  }

  public function checkLogin($email, $password) {
    $sql = "SELECT * FROM users WHERE email = ? LIMIT 1";
    $st = $this->pdo->prepare($sql);
    $st->bindParam(1, $email, PDO::PARAM_STR);
    $st->execute();

    $user = $st->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
      return false;
    }

    if (!password_verify((string)$password, $user['password_hash'])) {
      return false;
    }

    unset($user['password_hash']);

    return $user;
  }

}

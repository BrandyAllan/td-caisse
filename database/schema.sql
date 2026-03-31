CREATE DATABASE IF NOT EXISTS caisse;
USE caisse;

CREATE TABLE produits (
    id_produit INT AUTO_INCREMENT PRIMARY KEY,
    nom_produit VARCHAR(100) NOT NULL,
    prix DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL DEFAULT 0
);

CREATE TABLE caisses (
    id_caisse INT AUTO_INCREMENT PRIMARY KEY,
    nom_caisse VARCHAR(50) NOT NULL,
    emplacement VARCHAR(100)
);

CREATE TABLE achats (
    id_achat INT AUTO_INCREMENT PRIMARY KEY,
    id_produit INT NOT NULL,
    id_caisse INT NOT NULL,
    quantite INT NOT NULL,
    total DECIMAL(10,2) NOT NULL,
    date_achat DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_produit) REFERENCES produits(id_produit),
    FOREIGN KEY (id_caisse) REFERENCES caisses(id_caisse)
);

INSERT INTO produits (nom_produit, prix, stock) VALUES
('Riz 1kg', 3500.00, 50),
('Huile 1L', 8000.00, 30),
('Sucre 1kg', 4000.00, 40),
('Savon', 1500.00, 100),
('Lait en poudre', 12000.00, 20);

INSERT INTO caisses (nom_caisse, emplacement) VALUES
('ETU004132', 'Entrée principale'),
('ETU004201', 'Rayon alimentaire');

INSERT INTO achats (id_produit, id_caisse, quantite, total) VALUES
(1, 1, 2, 7000.00),
(4, 2, 3, 4500.00),
(2, 1, 1, 8000.00);
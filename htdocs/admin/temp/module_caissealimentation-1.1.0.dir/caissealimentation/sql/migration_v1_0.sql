-- Création d'une nouvelle table
CREATE TABLE MAIN_DB_PREFIX . "operation_produit" (
  produit_id INT,
  operation_id INT,
  quantite INT,
  prix INT
);

CREATE TABLE IF NOT EXISTS " . MAIN_DB_PREFIX . "paiementoperation (
    rowid SERIAL PRIMARY KEY,
    ref VARCHAR(30) NOT NULL,             -- Référence du paiement
    amount NUMERIC(10, 2) NOT NULL,               -- Montant du paiement
    datep DATE NOT NULL,              -- Date du paiement
    fk_paiement INT NOT NULL,         -- ID du mode de paiement
    fk_user_author INT NOT NULL,      -- ID de l'utilisateur qui a enregistré le paiement
    fk_bank INT,                      -- Compte bancaire lié (facultatif)
    fk_operation INT NOT NULL,        -- ID de l'opération associée
    statut INT DEFAULT 0,             -- Statut du paiement
    mode_paiement VARCHAR(90),
    sommeversee INTEGER,              -- Somme versée
    monnaie INTEGER,                  -- Monnaie
    remise INTEGER,                   -- Statut du paiement
);
-- Créer des index pour améliorer les performances
CREATE INDEX idx_operation_id ON llx_paiementoperation (fk_operation);

-- Ajouter des contraintes de clé étrangère
ALTER TABLE llx_paiementoperation
ADD CONSTRAINT fk_operation_paiement FOREIGN KEY (fk_operation) REFERENCES llx_caissealimentation_operation(rowid) ON DELETE CASCADE;

ALTER TABLE llx_paiementoperation
ADD COLUMN sommeversee INTEGER;

ALTER TABLE llx_paiementoperation
ADD COLUMN monnaie INTEGER;

ALTER TABLE llx_paiementoperation
ADD COLUMN remise INTEGER;

ALTER TABLE llx_paiementoperation
ADD COLUMN mode_paiement VARCHAR(90);
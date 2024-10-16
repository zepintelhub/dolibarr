CREATE TABLE IF NOT EXISTS " . MAIN_DB_PREFIX . "paiementoperation (
    rowid INTEGER PRIMARY KEY AUTO_INCREMENT,
    ref VARCHAR(30) NOT NULL,             -- Référence du paiement
    amount DOUBLE NOT NULL,               -- Montant du paiement
    datep DATETIME NOT NULL,              -- Date du paiement
    fk_paiement INTEGER,         -- ID du mode de paiement
    fk_user_author INTEGER NOT NULL,      -- ID de l'utilisateur qui a enregistré le paiement
    fk_bank INTEGER,                      -- Compte bancaire lié (facultatif)
    fk_operation INTEGER NOT NULL,        -- ID de l'opération associée
    statut INTEGER DEFAULT 0,             -- Statut du paiement
    mode_paiement VARCHAR(90),
    sommeversee INTEGER,                  -- Somme versée
    monnaie INTEGER,                      -- Monnaie
    remise INTEGER,                       -- Statut du paiement
) ENGINE=innodb;
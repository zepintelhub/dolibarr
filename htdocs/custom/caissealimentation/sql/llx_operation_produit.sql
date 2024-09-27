CREATE TABLE IF NOT EXISTS llx_operation_produit (
    rowid INTEGER AUTO_INCREMENT PRIMARY KEY,
    produit_id INTEGER NOT NULL,
    operation_id INTEGER,
    operation_ref VARCHAR(90),
    quantite INTEGER NOT NULL,
    prix INTEGER NOT NULL,
    entity INTEGER NOT NULL DEFAULT 1,
    datec DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    tms TIMESTAMP
) ENGINE=innodb;
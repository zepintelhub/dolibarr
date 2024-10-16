<?php

// Protection contre les accès directs
// if (!defined('DOL_DOCUMENT_ROOT')) {
//     die("Dolibarr environment is not correctly defined");
// }

// Chargement de l'environnement Dolibarr
require '../../main.inc.php';

// Instanciation de la base de données
$db = $GLOBALS['db'];

// Début de la transaction
$db->begin();

try {
    // Définition de la nouvelle table
    $sql = "CREATE TABLE IF NOT EXISTS " . MAIN_DB_PREFIX . "paiementoperation (
        rowid SERIAL PRIMARY KEY,
        ref VARCHAR(30) NOT NULL,             -- Référence du paiement
        amount NUMERIC(10, 2) NOT NULL,               -- Montant du paiement
        datep DATE NOT NULL,              -- Date du paiement
        fk_paiement INT NOT NULL,         -- ID du mode de paiement
        fk_user_author INT NOT NULL,      -- ID de l'utilisateur qui a enregistré le paiement
        fk_bank INT,                      -- Compte bancaire lié (facultatif)
        fk_operation INT NOT NULL,        -- ID de l'opération associée
        statut INT DEFAULT 0              -- Statut du paiement
    );
    -- Créer des index pour améliorer les performances
    CREATE INDEX idx_operation_id ON llx_paiementoperation (fk_operation);

    -- Ajouter des contraintes de clé étrangère
    ALTER TABLE llx_paiementoperation
    ADD CONSTRAINT fk_operation_paiement FOREIGN KEY (fk_operation) REFERENCES llx_caissealimentation_operation(rowid) ON DELETE CASCADE;
    
    GRANT USAGE, SELECT ON SEQUENCE llx_paiementoperation_rowid_seq TO dolibarrzep;
    GRANT UPDATE ON SEQUENCE llx_paiementoperation_rowid_seq TO dolibarrzep;
    ";

    // Exécution de la requête SQL
    $resql = $db->query($sql);
    if (!$resql) {
        throw new Exception("Erreur lors de la création de la table : " . $db->lasterror());
    }

    // Validation de la transaction
    $db->commit();
    echo "Migration successful: Table created successfully.";

} catch (Exception $e) {
    // Annulation de la transaction en cas d'erreur
    $db->rollback();
    echo "Migration failed: " . $e->getMessage();
}

?>

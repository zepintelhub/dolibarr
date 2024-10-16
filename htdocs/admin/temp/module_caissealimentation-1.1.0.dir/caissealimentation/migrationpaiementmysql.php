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
        rowid INTEGER PRIMARY KEY AUTO_INCREMENT,
        ref VARCHAR(30) NOT NULL,             -- Référence du paiement
        amount DOUBLE NOT NULL,               -- Montant du paiement
        datep DATETIME NOT NULL,              -- Date du paiement
        fk_paiement INTEGER NOT NULL,         -- ID du mode de paiement
        fk_user_author INTEGER NOT NULL,      -- ID de l'utilisateur qui a enregistré le paiement
        fk_bank INTEGER,                      -- Compte bancaire lié (facultatif)
        fk_operation INTEGER NOT NULL,        -- ID de l'opération associée
        statut INTEGER DEFAULT 0              -- Statut du paiement
    ) ENGINE=innodb;
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

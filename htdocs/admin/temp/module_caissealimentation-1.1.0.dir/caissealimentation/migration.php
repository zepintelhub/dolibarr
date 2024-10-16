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
    $sql = "CREATE TABLE IF NOT EXISTS " . MAIN_DB_PREFIX . "operation_produit (
        rowid INTEGER AUTO_INCREMENT PRIMARY KEY,
        produit_id INTEGER NOT NULL,
        operation_id INTEGER,
        operation_ref VARCHAR(90),
        quantite INTEGER NOT NULL,
        prix INTEGER NOT NULL,
        entity INTEGER NOT NULL DEFAULT 1,
        datec DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        tms TIMESTAMP
    ) ENGINE=innodb;";

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

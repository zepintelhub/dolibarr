<?php

require '../../main.inc.php';
dol_include_once('/caissealimentation/class/operation.class.php');
require_once DOL_DOCUMENT_ROOT.'/custom/caissealimentation/core/pdf/recu.class.php';

$id = GETPOST('id', 'int');

// Charger l'objet (par exemple, une facture ou une commande)
$object = new Operation($db);
$object->fetch($id);

// Créer l'instance de votre classe de PDF
$pdf = new Recu($db);

// Générer le fichier PDF
$result = $pdf->write_file($object, $langs);

if ($result > 0) {
    header("Location: " . DOL_DOCUMENT_ROOT . "/document.php?modulepart=caissealimentation&file=" . urlencode($object->ref . ".pdf"));
    exit;
} else {
    // Gérer les erreurs
    setEventMessages($pdf->error, null, 'errors');
    header("Location: " . $_SERVER["HTTP_REFERER"]);
    exit;
}

?>

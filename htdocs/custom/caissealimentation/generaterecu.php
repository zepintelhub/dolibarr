<?php

require '../../main.inc.php';
require_once DOL_DOCUMENT_ROOT.'/core/lib/pdf.lib.php';
dol_include_once('/caissealimentation/class/operation.class.php');
dol_include_once('/caissealimentation/class/operation_produit.class.php');
dol_include_once('/product/class/product.class.php');
dol_include_once('/societe/class/societe.class.php'); 
// require_once DOL_DOCUMENT_ROOT.'/core/modules/facture/pdf/pdf_mymodule.class.php';

// $langs->load("my_module"); // Charger les traductions nécessaires

$id = GETPOST('id', 'int');
$type = GETPOST('type', 'alpha');

// Charger l'objet (par exemple, une facture ou une commande)
$object = new Operation($db);
$object->fetch($id);

$produits = OperationProduit::fetchByOperation($db, $id);

// Créer une instance de la classe PDF
$pdf = pdf_getInstance();
$pdf->SetAutoPageBreak(1, 0);
$pdf->SetFont(pdf_getPDFFont($langs));
$pdf->AddPage();

// Définir la position initiale
// $top = 10;
// $pdf->SetXY(10, $top);

// En-tête de la facture
$pdf->SetFont('', 'B', 16);
$pdf->Cell(190, 10, "Facture", 0, 1, 'C');
$pdf->Ln(10);

// Informations sur l'entreprise et le client
// $pdf->SetFont('', '', 10);
// $pdf->Cell(80, 5, "Entreprise", 0, 0, 'L');
// $pdf->Cell(90, 5, "Nom du client", 0, 1, 'R');
// $pdf->Ln(10);

// Créer une instance de la classe Societe
$company = new Societe($db);

// Charger les détails de l'entreprise en utilisant l'ID (souvent 1 pour l'entreprise principale)
$company_id = 1; // L'ID de votre entreprise dans Dolibarr
$company->fetch($company_id);

// Créer une instance de la classe Societe pour le client
$client = new Societe($db);

// Charger les détails du client en utilisant son ID
$client_id = $object->fk_soc;
print 'client_id: ' . $client_id;
$client->fetch($client_id);

// Informations de l'entreprise
$pdf->SetFont('', 'B', 12);
$pdf->Cell(0, 5, $company->name, 0, 1, 'L');
$pdf->SetFont('', '', 10);
$pdf->Cell(0, 5, $company->address, 0, 1, 'L');
$pdf->Cell(0, 5, $company->zip . ' ' . $company->town, 0, 1, 'L');
$pdf->Cell(0, 5, $company->country_code, 0, 1, 'L');
$pdf->Cell(0, 5, $company->phone, 0, 1, 'L');
$pdf->Cell(0, 5, $company->email, 0, 1, 'L');

// Espacement
$pdf->Ln(10);

// Informations du client
$pdf->SetFont('', 'B', 12);
$pdf->Cell(0, 5, $client->name, 0, 1, 'L');
$pdf->Cell(0, 5, $client_id, 0, 1, 'L');
$pdf->SetFont('', '', 10);
$pdf->Cell(0, 5, $client->address, 0, 1, 'L');
$pdf->Cell(0, 5, $client->zip . ' ' . $client->town, 0, 1, 'L');
$pdf->Cell(0, 5, $client->country_code, 0, 1, 'L');
$pdf->Cell(0, 5, $client->phone, 0, 1, 'L');
$pdf->Cell(0, 5, $client->email, 0, 1, 'L');

// En-tête du tableau
$pdf->SetFont('', 'B', 12);
$pdf->Cell(90, 6, "Produit", 1);
$pdf->Cell(25, 6, "P.U", 1);
$pdf->Cell(25, 6, "Qt", 1);
$pdf->Cell(30, 6, "Total", 1);
$pdf->Ln();

// Afficher les lignes de produits
$pdf->SetFont('', '', 12);
$totalgeneral = 0;

$sql = "SELECT rowid, produit_id, operation_id, quantite, prix FROM " . MAIN_DB_PREFIX . "operation_produit WHERE operation_id=" . $id;
$resql = $db->query($sql);

if ($resql) {
    while ($obj = $db->fetch_object($resql)) {
        $total = $obj->prix * $obj->quantite;
        $totalgeneral += $total;
        $p = new Product($db);
        $p->fetch($obj->produit_id);
        $pdf->Cell(90, 6, $p->label, 1);
        $pdf->Cell(25, 6, price($obj->prix), 1);
        $pdf->Cell(25, 6, $obj->quantite, 1);
        $pdf->Cell(30, 6, price($total), 1);
        $pdf->Ln();
    }

    // Ajouter le total général en bas de la facture
    $pdf->Ln(10);
    $pdf->SetFont('', 'B', 12);
    $pdf->Cell(140, 7, "Total", 1);
    $pdf->Cell(30, 7, $totalgeneral, 1, 0, 'R');
}
// if(sizeof($produits) > 0) {
//     for($i = 0; $i < sizeof($produits); $i++) {
//         $total = $produits[$i]['prix'] * $produits[$i]['quantite'];
//         $totalgeneral += $total;
//         $p = new Product($dd);
//         $nomproduit = $p->fetch($produits[$i]['produit_id']);
//         $pdf->Cell(90, 6, $nomproduit, 1);
//         $pdf->Cell(25, 6, price($produits[$i]['prix']), 1);
//         $pdf->Cell(25, 6, $produits[$i]['quantite'], 1);
//         $pdf->Cell(30, 6, price($total), 1);
//         $pdf->Ln();
//     }
    
//     // Ajouter le total général en bas de la facture
//     $pdf->Ln(10);
//     $pdf->SetFont('', 'B', 12);
//     $pdf->Cell(140, 7, "Total", 1);
//     $pdf->Cell(30, 7, $totalgeneral, 1, 0, 'R');
// }

// Chemin pour enregistrer le PDF
$filename = DOL_DATA_ROOT . '/caissealimentation/temp/'.$object->ref.'.pdf';
$pdf->Output($filename, 'F'); // Sauvegarde le PDF sur le serveur

if($type == 'telechargement') {
    // Proposer le téléchargement du fichier
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment;filename="'.$object->ref.'.pdf"');
    readfile($filename);
}

if($type == 'impression') {
    // Ouvrir le PDF dans le navigateur pour l'impression
    header('Content-Type: application/pdf');
    header('Content-Disposition: inline; filename="'.$object->ref.'.pdf"');
    header('Content-Transfer-Encoding: binary');
    header('Accept-Ranges: bytes');
    @readfile($filename);
}

exit;
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

// Créer une instance de la classe Societe pour le client
$client = new Societe($db);

// Charger les détails du client en utilisant son ID
$client_id = $object->fk_soc;
$client->fetch($client_id);

// Créer une instance de la classe PDF
$pdf = pdf_getInstance();
$pdf->SetAutoPageBreak(1, 0);
$pdf->SetFont(pdf_getPDFFont($langs));
$pdf->AddPage();

$pdf->Ln(10);

// En-tête de la facture
$pdf->SetFont('', 'B', 16);
$pdf->Cell(190, 10, "Facture", 0, 1, 'C');
$pdf->Ln(10);

// Récupérer la date du jour
$date_du_jour = date('d/m/Y');  // Format : jour/mois/année
$pdf->SetFont('', '', 12);
$pdf->MultiCell(0, 10, 
    "Référence : " . $object->ref . "\n" .
    "Date : " . $date_du_jour, 
    0, 'L', 0
);

$pdf->Ln(15);

// Récupérer les informations de l'entreprise
$company_name = $conf->global->MAIN_INFO_SOCIETE_NOM;
$company_address = $conf->global->MAIN_INFO_SOCIETE_ADDRESS;
$company_zip = $conf->global->MAIN_INFO_SOCIETE_ZIP;
$company_town = $conf->global->MAIN_INFO_SOCIETE_TOWN;
$company_country = $conf->global->MAIN_INFO_SOCIETE_COUNTRY;
$company_phone = $conf->global->MAIN_INFO_SOCIETE_TEL;
$company_email = $conf->global->MAIN_INFO_SOCIETE_MAIL;

// Définir la largeur des colonnes
$width_left_col = 95;  // Largeur de la colonne de gauche
$width_right_col = 95;  // Largeur de la colonne de droite

// Informations de l'entreprise à gauche
$pdf->SetFont('', '', 12);
$entreprise_text = "";
$entreprise_text .= $company_name . "\n";
if($company_address) $entreprise_text .= $company_address . "\n";
if($company_zip && $company_town) $entreprise_text .= $company_zip . ' ' . $company_town . "\n";
if($company_country) $entreprise_text .= $company_country . "\n";
$pdf->MultiCell($width_left_col, 5, $entreprise_text, 0, 'L', 0);
// $pdf->Ln(2);  // Ajoute un petit espace

// Informations du client à droite
$pdf->SetXY($width_left_col + 10, $pdf->GetY() - 21);  // Ajuster la position pour être à droite
$pdf->SetFont('', '', 12);
$client_text = "";
$client_text .= $client->name . "\n";
if($client->address) $client_text .= $client->address . "\n";
if($client->zip && $client->town) $client_text .= $client->zip . ' ' . $client->town . "\n";
if($client->country_code) $client_text .= $client->country_code . "\n";
if($client->phone) $client_text .= $client->phone . "\n";
if($client->mail) $client_text .= $client->mail . "\n";

$pdf->MultiCell($width_right_col, 5, $client_text, 0, 'R', 0);

// Espacement
$pdf->Ln(15);

$pdf->SetFont('', 'B', 14);
$pdf->Cell(0, 10, "Produits", 0, 1, 'L');
$pdf->Ln(5);

// En-tête du tableau
$pdf->SetFont('', 'B', 12);
$pdf->Cell(90, 6, "Produit", 1);
$pdf->Cell(35, 6, "P.U", 1);
$pdf->Cell(25, 6, "Qt", 1);
$pdf->Cell(40, 6, "Total", 1);
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
        $pdf->Cell(35, 6, price($obj->prix), 1);
        $pdf->Cell(25, 6, $obj->quantite, 1);
        $pdf->Cell(40, 6, price($total), 1);
        $pdf->Ln();
    }

    // Ajouter le total général en bas de la facture
    $pdf->Ln(7);
    $pdf->SetFont('', 'B', 12);
    $pdf->Cell(140, 7, "Total", 1);
    $pdf->Cell(50, 7, $totalgeneral, 1, 0, 'R');
}

// Chemin pour enregistrer le PDF
$filename = DOL_DATA_ROOT . '/caissealimentation/temp/'.$object->ref.'.pdf';
$pdf->Output($filename, 'F'); // Sauvegarde le PDF sur le serveur

if($type == 'telechargement') {
    // Proposer le téléchargement du fichier
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment;filename="'.$object->ref.'.pdf"');
    // readfile($filename);
    // Générer le PDF en mémoire et le préparer pour téléchargement
    $pdf->Output($filename, 'D');
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
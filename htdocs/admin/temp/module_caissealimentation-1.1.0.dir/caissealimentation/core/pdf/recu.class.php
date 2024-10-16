<?php

require_once DOL_DOCUMENT_ROOT.'/core/lib/pdf.lib.php';
require_once DOL_DOCUMENT_ROOT.'/core/modules/facture/doc/pdf_crabe.modules.php'; // Vous pouvez utiliser une classe PDF existante comme base

class Recu extends ModelePDFFactures
{
    public $emetteur; // Émetteur de la facture

    public function __construct($db)
    {
        global $conf, $langs;
        $langs->load("bills");

        $this->db = $db;
        $this->name = "monrecu";
        $this->description = $langs->trans("DocumentModelMonRecuDescription");

        // Définir les marges du document
        $this->marge_gauche = 10;
        $this->marge_droite = 10;
        $this->marge_haute = 10;
        $this->marge_basse = 10;

        $this->emetteur = $conf->global->MAIN_INFO_SOCIETE_NOM;
    }

    public function write_file($object, $outputlangs, $srctemplatepath = '', $hidedetails = 0, $hidedesc = 0, $hideref = 0)
    {
        global $user, $langs, $conf, $mysoc;

        if (!is_object($outputlangs)) $outputlangs = $langs;
        $outputlangs->charset_output = 'UTF-8';

        // Création d'un fichier temporaire pour générer le PDF
        $dir = DOL_DATA_ROOT . "/" . $object->element . "/";
        dol_mkdir($dir);
        $file = $dir . dol_sanitizeFileName($object->ref) . ".pdf";

        // Début de la génération du PDF
        $pdf = pdf_getInstance($this->format);
        $pdf->SetAutoPageBreak(1, 0);
        $pdf->SetTitle($outputlangs->transnoentities("YourDocumentTitle"));
        $pdf->SetSubject($outputlangs->transnoentities("YourDocumentSubject"));
        $pdf->SetCreator("Dolibarr " . DOL_VERSION);
        $pdf->SetAuthor($outputlangs->convToOutputCharset($user->getFullName($outputlangs)));
        $pdf->SetFont(pdf_getPDFFont($outputlangs));

        // Ajouter une page
        $pdf->AddPage();

        // Contenu du PDF
        $pdf->SetXY($this->marge_gauche, $this->marge_droite);

        // Exemple : Afficher le titre du reçu
        $pdf->SetFont('', 'B', 12);
        $pdf->MultiCell(0, 5, $outputlangs->transnoentities("ReceiptTitle"), 0, 'L');
        $pdf->Ln();

        // Exemple : Afficher les informations sur l'objet (par exemple une facture ou un paiement)
        $pdf->SetFont('', '', 10);
        $pdf->MultiCell(0, 5, $outputlangs->transnoentities("ReceiptContent") . ' : ' . $object->ref, 0, 'L');
        $pdf->Ln();

        // Ajouter d'autres informations comme la date, montant, etc.
        $pdf->MultiCell(0, 5, $outputlangs->transnoentities("Date") . ' : ' . dol_print_date($object->date, 'daytext'), 0, 'L');
        $pdf->MultiCell(0, 5, $outputlangs->transnoentities("Amount") . ' : ' . price($object->amount), 0, 'L');

        // Sauvegarder le fichier PDF
        $pdf->Output($file, 'F');

        return 1;
    }
}

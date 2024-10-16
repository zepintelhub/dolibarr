<?php
$res = 0;
// Try main.inc.php into web root known defined into CONTEXT_DOCUMENT_ROOT (not always defined)
if (!$res && !empty($_SERVER["CONTEXT_DOCUMENT_ROOT"])) {
	$res = @include $_SERVER["CONTEXT_DOCUMENT_ROOT"]."/main.inc.php";
}
// Try main.inc.php into web root detected using web root calculated from SCRIPT_FILENAME
$tmp = empty($_SERVER['SCRIPT_FILENAME']) ? '' : $_SERVER['SCRIPT_FILENAME']; $tmp2 = realpath(__FILE__); $i = strlen($tmp) - 1; $j = strlen($tmp2) - 1;
while ($i > 0 && $j > 0 && isset($tmp[$i]) && isset($tmp2[$j]) && $tmp[$i] == $tmp2[$j]) {
	$i--;
	$j--;
}
if (!$res && $i > 0 && file_exists(substr($tmp, 0, ($i + 1))."/main.inc.php")) {
	$res = @include substr($tmp, 0, ($i + 1))."/main.inc.php";
}
if (!$res && $i > 0 && file_exists(dirname(substr($tmp, 0, ($i + 1)))."/main.inc.php")) {
	$res = @include dirname(substr($tmp, 0, ($i + 1)))."/main.inc.php";
}
// Try main.inc.php using relative path
if (!$res && file_exists("../main.inc.php")) {
	$res = @include "../main.inc.php";
}
if (!$res && file_exists("../../main.inc.php")) {
	$res = @include "../../main.inc.php";
}
if (!$res && file_exists("../../../main.inc.php")) {
	$res = @include "../../../main.inc.php";
}
if (!$res) {
	die("Include of main fails");
}

require_once DOL_DOCUMENT_ROOT.'/core/class/html.formcompany.class.php';
require_once DOL_DOCUMENT_ROOT.'/core/class/html.formfile.class.php';
require_once DOL_DOCUMENT_ROOT.'/core/class/html.formprojet.class.php';
require_once DOL_DOCUMENT_ROOT.'/core/lib/admin.lib.php';
dol_include_once('/caissealimentation/class/operation.class.php');
dol_include_once('/caissealimentation/class/operation_produit.class.php');
dol_include_once('/caissealimentation/class/paiementoperation.class.php');
dol_include_once('/caissealimentation/lib/caissealimentation_operation.lib.php');
dol_include_once('/compta/paiement/class/paiement.class.php');
dol_include_once('/caissealimentation/class/creance.class.php');

// Get parameters
$id = GETPOSTINT('id');
$montant = GETPOST('montantApayer', 'alpha');
$total = GETPOST('total', 'alpha');
$backpage = GETPOST('backpage', 'alpha');
$fk_paiement = GETPOST('fk_paiement', 'int');
$mode_paiement = GETPOST('mode_paiement', 'alpha');
$sommeVersee = GETPOST('somme-versee', 'int');
$monnaie = GETPOST('monnaie', 'int');
$remise = GETPOST('remise', 'int');
$echeance = GETPOST('echeance', 'alpha') ?? '';

$object = new Operation($db);
$object->fetch($id);

$paiements = PaiementOperation::fetchByOperation($db, $id);
$dejapaye = 0;
$status = 0;

if($dejapaye + (int)$montant <= (int)$total) {
	$paiement = new PaiementOperation($db);
	$paiement->datep = dol_now(); // Date du paiement (aujourd'hui)
	$paiement->amount = (int)$montant; // Montant du paiement, lié à la facture
	// $paiement->fk_paiement = (int)$fk_paiement; // 1 = chèque, 2 = virement, 3 = CB, etc.
	$paiement->fk_operation = $id;
	$paiement->fk_user_author = $user->id;
	$paiement->fk_bank = 0;
	$paiement->statut = 1;
	$paiement->mode_paiement = $mode_paiement;
	$paiement->ref = 'TRX12345';  // Référence du paiement (par exemple, numéro de transaction)
	$paiement->sommeversee = $sommeVersee;
	$paiement->monnaie = $monnaie;
	$paiement->remise = $remise;
	$paiement->create($db);

	print '<br>Montant: ' . $montant;
	print '<br>Mode de paiement: ' . $mode_paiement;
	print '<br>Somme versée: ' . $sommeVersee;
	print '<br>Monnaie: ' . $monnaie;
	print '<br>Remise: ' . $remise;
	print '<br>ID: ' . $id;

	$object->status = 1;
	$object->update($user);
} else {
	print '<br>Total: ' . $total;
	print '<br>Déjà payé: ' . $dejapaye;
	print '<br>Montant: ' . $montant;
	print '<br>Déjà payé + montant: ' . (int)$dejapaye + (int)$montant;
}

$dateexpiration = $echeance ? ", dateexpiration='$echance'" : "";
if(sizeof($paiements) > 0) {
	print '<br> if(sizeof($paiements) > 0)';
	foreach($paiements as $paiement) {
		$dejapaye = $dejapaye + $paiement->amount;
	}
	print '<br> dejapaye: '.$dejapaye;

	$creance = new Creance($db);
	$reste = 0;
	$montantpay = $dejapaye + (int)$montant;
	if($dejapaye + (int)$montant < (int)$total) {
		print '<br> if($dejapaye + (int)$montant < (int)$total)';
		$reste = (int)$total - (int)$montant - (int)$dejapaye;
		$creance->montantpay = (int)$montant;
		print '<br> reste '.$reste;
		$creance->restepay = $reste;
		$creance->ref = '';
		$creance->fk_soc = $object->fk_soc;
		$creance->fk_operation = $id;
		$creance->dateexpiration = $echeance ?? '';
	} else {
		print '<br> else ($dejapaye + (int)$montant < (int)$total)';
		$creance->statut = 1;
		// $sql = "UPDATE ".MAIN_DB_PREFIX."caissealimentation_creance 
		// 	SET montantpay=$montantpay, restepay=$reste, ref='$object->ref', $_fk_soc vente=$id, status=1
		// 	WHERE ref='$object->ref';";
		$sql = "DELETE FROM ".MAIN_DB_PREFIX."caissealimentation_creance 
			WHERE ref='$object->ref';";
		$resql = $db->query($sql);
		if($resql) {
			print '<br>'.$sql;
			print '<br>Insert into with succes';
		} else {
			print '<br>db rollback ' . $db->lasterror();
			// $sql = "INSERT INTO ".MAIN_DB_PREFIX."caissealimentation_creance(montantpay, restepay, ref, vente, fk_user_creat, status) VALUES($montant, $reste, '$object->ref', $id, $user->id, 0);";
			// $resql = $db->query($sql);
		}
	}
	if($object->fk_soc) $_fk_soc = "fk_soc=$object->fk_soc,";
	else $_fk_soc = "";
	$sql = "UPDATE ".MAIN_DB_PREFIX."caissealimentation_creance 
		SET montantpay=$montantpay, restepay=$reste, ref='$object->ref', $_fk_soc vente=$id, dateexpiration='$echeance'
		WHERE ref='$object->ref';";
	$resql = $db->query($sql);
	if($resql) {
		print '<br>'.$sql;
		print '<br>Insert into with succes';
	} else {
		print '<br>db rollback ' . $db->lasterror();
		$sql = "INSERT INTO ".MAIN_DB_PREFIX."caissealimentation_creance(montantpay, restepay, ref, vente, fk_user_creat, status, dateexpiration) VALUES($montant, $reste, '$object->ref', $id, $user->id, 0, $echeance);";
		$resql = $db->query($sql);
	}
	// $creance->update($user);
} else {
	print '<br> else (sizeof($paiements) > 0)';
	$creance = new Creance($db);
	if((int)$montant < (int)$total) {
		print '<br> (int)$montant < (int)$total)';
		$reste = (int)$total - (int)$montant;
		$ref = $object->ref;
		$creance->montantpay = (int)$montant;
		$creance->restepay = $reste;
		$creance->ref = '';
		$creance->fk_soc = $object->fk_soc;
		$creance->fk_operation = $id;
		$creance->dateexpiration = $echeance ?? '';
		$sql = "INSERT INTO ".MAIN_DB_PREFIX."caissealimentation_creance(montantpay, restepay, ref, vente, fk_user_creat, status, dateexpiration) VALUES($montant, $reste, '$object->ref', $id, $user->id, 0, '$echeance');";
		$resql = $db->query($sql);
		if($resql) {
			print '<br>'.$sql;
			print '<br>Insert into with succes';
		} else {
			print '<br>db rollback ' . $db->lasterror();
		}
		// $creance->create($user);
		// print $creance;
	} else {
		// $sql = "INSERT INTO ".MAIN_DB_PREFIX."caissealimentation_creance(montantpay, restepay, ref, vente, fk_user_creat, status) VALUES($montant, $reste, '$object->ref', $id, $user->id, 1);";
		// $resql = $db->query($sql);
		// if($resql) {
		// 	print '<br>'.$sql;
		// 	print '<br>Insert into with succes';
		// } else {
		// 	print '<br>db rollback ' . $db->lasterror();
		// }
	}
}

$db->close();
    
// Rediriger immédiatement vers la liste des factures
header('Location: ' . DOL_URL_ROOT . '/custom/caissealimentation/operation_card.php?id='.$id);
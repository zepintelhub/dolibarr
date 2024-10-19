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
dol_include_once('/caissealimentation/class/echeancepaiement.class.php');

$id = GETPOSTINT('id');
$nbecheance = GETPOSTINT('nbecheance');
for($i = 1; $i <= $nbecheance; $i++) {
	$echeance = new EcheancePaiement($db);
	$dateecheance = GETPOST('dateecheance_'.$i, 'alpha');
	$montantecheance = GETPOST('montantecheance_'.$i, 'alpha');
	$echeance->date = $dateecheance;
	$echeance->montant = $montantecheance;
	$echeance->opration = $id;
	$echeance->create($user);
}

$db->close();

// header('Location: ' . DOL_URL_ROOT . '/custom/caissealimentation/operation_card.php?id='.$id);
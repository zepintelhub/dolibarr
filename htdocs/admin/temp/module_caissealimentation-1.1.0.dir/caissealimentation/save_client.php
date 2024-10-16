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
dol_include_once('/caissealimentation/class/paiement_operation.class.php');
dol_include_once('/caissealimentation/lib/caissealimentation_operation.lib.php');
dol_include_once('/compta/paiement/class/paiement.class.php');
dol_include_once('/caissealimentation/class/creance.class.php');

// Get parameters
$id = GETPOSTINT('id');
$action = GETPOST('action', 'alpha');
$backpage = GETPOST('backpage', 'alpha');
$selectclient = GETPOST('selectclient', 'int');
$nom_client = GETPOST('nom_client', 'alpha');
$telephone_client = GETPOST('telephone_client', 'alpha');

print 'ID: ' . $id;

$object = new Operation($db);
$object->fetch($id);

print '<br>Action : ' . $action;

if($action == "addclient") {
	$client = new Societe($db);
	$client->name = $nom_client;
	$client->phone = $telephone_client;
	$client->create($user);

	print '<br>Client ID : ' . $client->id;
	$object->fk_soc = $client->id;
	$object->update($user);
}

if($action == "selectclient") {
	print '<br>Select Client ID : ' . $selectclient;
	$object->fk_soc = $selectclient;
	$object->update($user);
}

$db->close();
    
// Rediriger immédiatement vers la liste des factures
header('Location: ' . DOL_URL_ROOT . '/custom/caissealimentation/operation_card.php?id='.$id);
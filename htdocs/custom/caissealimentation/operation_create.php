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

$enablepermissioncheck = 0;
if ($enablepermissioncheck) {
	$permissiontoread = $user->hasRight('caissealimentation', 'operation', 'read');
	$permissiontoadd = $user->hasRight('caissealimentation', 'operation', 'write'); // Used by the include of actions_addupdatedelete.inc.php and actions_lineupdown.inc.php
	$permissiontodelete = $user->hasRight('caissealimentation', 'operation', 'delete') || ($permissiontoadd && isset($object->status) && $object->status == $object::STATUS_DRAFT);
	$permissionnote = $user->hasRight('caissealimentation', 'operation', 'write'); // Used by the include of actions_setnotes.inc.php
	$permissiondellink = $user->hasRight('caissealimentation', 'operation', 'write'); // Used by the include of actions_dellink.inc.php
} else {
	$permissiontoread = 1;
	$permissiontoadd = 1; // Used by the include of actions_addupdatedelete.inc.php and actions_lineupdown.inc.php
	$permissiontodelete = 1;
	$permissionnote = 1;
	$permissiondellink = 1;
}

// Security check (enable the most restrictive one)
//if ($user->socid > 0) accessforbidden();
//if ($user->socid > 0) $socid = $user->socid;
//$isdraft = (isset($object->status) && ($object->status == $object::STATUS_DRAFT) ? 1 : 0);
//restrictedArea($user, $object->module, $object, $object->table_element, $object->element, 'fk_soc', 'rowid', $isdraft);
if (!isModEnabled("caissealimentation")) {
	accessforbidden();
}
if (!$permissiontoread) {
	accessforbidden();
}

$error = 0;

$object = new Operation($db);
// Générer une référence de base, par exemple avec un préfixe et une séquence numérique
$prefix = ''; // Par exemple, un préfixe pour identifier le type d'objet
$sql = "SELECT rowid FROM " . MAIN_DB_PREFIX . "caissealimentation_operation ORDER BY rowid DESC";
$resql = $db->query($sql);

if ($resql) {
    $obj = $db->fetch_object($resql);
    $next_ref = $obj->rowid + 1;
    $generateref = $prefix . str_pad($next_ref, 6, '0', STR_PAD_LEFT);
} else {
    $generateref = $prefix . '000001';
}
str_replace("REF", "", $generateref);

$object->ref = $generateref;
$object->create($user);
$id = $object->id;

$db->close();

header('Location: ' . DOL_URL_ROOT . '/custom/caissealimentation/operation_card.php?id='.$id);
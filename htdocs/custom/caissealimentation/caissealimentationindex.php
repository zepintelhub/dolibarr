<?php
/* Copyright (C) 2001-2005 Rodolphe Quiedeville <rodolphe@quiedeville.org>
 * Copyright (C) 2004-2015 Laurent Destailleur  <eldy@users.sourceforge.net>
 * Copyright (C) 2005-2012 Regis Houssin        <regis.houssin@inodbox.com>
 * Copyright (C) 2015      Jean-François Ferry	<jfefe@aternatik.fr>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

/**
 *	\file       caissealimentation/caissealimentationindex.php
 *	\ingroup    caissealimentation
 *	\brief      Home page of caissealimentation top menu
 */

// Load Dolibarr environment
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

require_once DOL_DOCUMENT_ROOT.'/core/class/html.formfile.class.php';
dol_include_once('/product/class/product.class.php');
dol_include_once('/societe/class/societe.class.php'); 

// Load translation files required by the page
$langs->loadLangs(array("caissealimentation@caissealimentation"));

$action = GETPOST('action', 'aZ09');

$now = dol_now();
$max = getDolGlobalInt('MAIN_SIZE_SHORTLIST_LIMIT', 5);

// Security check - Protection if external user
$socid = GETPOST('socid', 'int');
if (isset($user->socid) && $user->socid > 0) {
	$action = '';
	$socid = $user->socid;
}

// Security check (enable the most restrictive one)
//if ($user->socid > 0) accessforbidden();
//if ($user->socid > 0) $socid = $user->socid;
//if (!isModEnabled('caissealimentation')) {
//	accessforbidden('Module not enabled');
//}
//if (! $user->hasRight('caissealimentation', 'myobject', 'read')) {
//	accessforbidden();
//}
//restrictedArea($user, 'caissealimentation', 0, 'caissealimentation_myobject', 'myobject', '', 'rowid');
//if (empty($user->admin)) {
//	accessforbidden('Must be admin');
//}


/*
 * Actions
 */

// None


/*
 * View
 */

$form = new Form($db);
$formfile = new FormFile($db);

llxHeader("", $langs->trans("CaisseAlimentationArea"), '', '', 0, 0, '', '', '', 'mod-caissealimentation page-index');

print load_fiche_titre($langs->trans("CaisseAlimentationArea"), '', 'caissealimentation.png@caissealimentation');

print '<div class="fichecenter"><div class="fichethirdleft">';


/* BEGIN MODULEBUILDER DRAFT MYOBJECT
// Draft MyObject
if (isModEnabled('caissealimentation') && $user->hasRight('caissealimentation', 'read')) {
	$langs->load("orders");

	$sql = "SELECT c.rowid, c.ref, c.ref_client, c.total_ht, c.tva as total_tva, c.total_ttc, s.rowid as socid, s.nom as name, s.client, s.canvas";
	$sql.= ", s.code_client";
	$sql.= " FROM ".MAIN_DB_PREFIX."commande as c";
	$sql.= ", ".MAIN_DB_PREFIX."societe as s";
	$sql.= " WHERE c.fk_soc = s.rowid";
	$sql.= " AND c.fk_statut = 0";
	$sql.= " AND c.entity IN (".getEntity('commande').")";
	if ($socid)	$sql.= " AND c.fk_soc = ".((int) $socid);

	$resql = $db->query($sql);
	if ($resql)
	{
		$total = 0;
		$num = $db->num_rows($resql);

		print '<table class="noborder centpercent">';
		print '<tr class="liste_titre">';
		print '<th colspan="3">'.$langs->trans("DraftMyObjects").($num?'<span class="badge marginleftonlyshort">'.$num.'</span>':'').'</th></tr>';

		$var = true;
		if ($num > 0)
		{
			$i = 0;
			while ($i < $num)
			{

				$obj = $db->fetch_object($resql);
				print '<tr class="oddeven"><td class="nowrap">';

				$myobjectstatic->id=$obj->rowid;
				$myobjectstatic->ref=$obj->ref;
				$myobjectstatic->ref_client=$obj->ref_client;
				$myobjectstatic->total_ht = $obj->total_ht;
				$myobjectstatic->total_tva = $obj->total_tva;
				$myobjectstatic->total_ttc = $obj->total_ttc;

				print $myobjectstatic->getNomUrl(1);
				print '</td>';
				print '<td class="nowrap">';
				print '</td>';
				print '<td class="right" class="nowrap">'.price($obj->total_ttc).'</td></tr>';
				$i++;
				$total += $obj->total_ttc;
			}
			if ($total>0)
			{

				print '<tr class="liste_total"><td>'.$langs->trans("Total").'</td><td colspan="2" class="right">'.price($total)."</td></tr>";
			}
		}
		else
		{

			print '<tr class="oddeven"><td colspan="3" class="opacitymedium">'.$langs->trans("NoOrder").'</td></tr>';
		}
		print "</table><br>";

		$db->free($resql);
	}
	else
	{
		dol_print_error($db);
	}
}
END MODULEBUILDER DRAFT MYOBJECT */


print '</div><div class="fichetwothirdright">';


/* BEGIN MODULEBUILDER LASTMODIFIED MYOBJECT
// Last modified myobject
if (isModEnabled('caissealimentation') && $user->hasRight('caissealimentation', 'read')) {
	$sql = "SELECT s.rowid, s.ref, s.label, s.date_creation, s.tms";
	$sql.= " FROM ".MAIN_DB_PREFIX."caissealimentation_myobject as s";
	$sql.= " WHERE s.entity IN (".getEntity($myobjectstatic->element).")";
	//if ($socid)	$sql.= " AND s.rowid = $socid";
	$sql .= " ORDER BY s.tms DESC";
	$sql .= $db->plimit($max, 0);

	$resql = $db->query($sql);
	if ($resql)
	{
		$num = $db->num_rows($resql);
		$i = 0;

		print '<table class="noborder centpercent">';
		print '<tr class="liste_titre">';
		print '<th colspan="2">';
		print $langs->trans("BoxTitleLatestModifiedMyObjects", $max);
		print '</th>';
		print '<th class="right">'.$langs->trans("DateModificationShort").'</th>';
		print '</tr>';
		if ($num)
		{
			while ($i < $num)
			{
				$objp = $db->fetch_object($resql);

				$myobjectstatic->id=$objp->rowid;
				$myobjectstatic->ref=$objp->ref;
				$myobjectstatic->label=$objp->label;
				$myobjectstatic->status = $objp->status;

				print '<tr class="oddeven">';
				print '<td class="nowrap">'.$myobjectstatic->getNomUrl(1).'</td>';
				print '<td class="right nowrap">';
				print "</td>";
				print '<td class="right nowrap">'.dol_print_date($db->jdate($objp->tms), 'day')."</td>";
				print '</tr>';
				$i++;
			}

			$db->free($resql);
		} else {
			print '<tr class="oddeven"><td colspan="3" class="opacitymedium">'.$langs->trans("None").'</td></tr>';
		}
		print "</table><br>";
	}
}
*/

print '</div></div>';

print '<script src="https://d3js.org/d3.v6.min.js"></script>';

// Données d'exemple pour le graphique
$data = [
    ['month' => 'Jan', 'sales' => 1500],
    ['month' => 'Feb', 'sales' => 2000],
    ['month' => 'Mar', 'sales' => 3000],
    // Ajoutez plus de données ici
];

// Encodez les données en JSON pour les utiliser avec D3.js
$json_data = json_encode($data);

//Requete statistique produit
$sql = "SELECT 
			produit_id, YEAR(tms) AS annee, MONTH(tms) AS mois,
			SUM(quantite) AS total_quantite, SUM(prix) AS total_prix
		FROM " . MAIN_DB_PREFIX . "operation_produit
		WHERE YEAR(tms) = YEAR(NOW()) 
		GROUP BY produit_id, annee, mois
		ORDER BY produit_id, annee, mois";
$resql = $db->query($sql);
$colonneMois = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
$tableVente = [];
$dataVente = array_fill(0,12,0);
$totalChiffreAffaire = 0;
if ($resql) {
	while ($obj = $db->fetch_object($resql)) {
		$produit = new Product($db);
		$produit->fetch($obj->produit_id);
		$tableVente[$obj->produit_id][0] = $produit->label;
		$tableVente[$obj->produit_id][$obj->mois] = $obj->total_quantite * $obj->total_prix; 
		$dataVente[$obj->mois-1] += $obj->total_quantite * $obj->total_prix;
		if(!array_key_exists(13, $tableVente[$obj->produit_id])) $tableVente[$obj->produit_id][13] = 0;
		$tableVente[$obj->produit_id][13] += $obj->total_quantite * $obj->total_prix; 
		$totalChiffreAffaire += $obj->total_quantite * $obj->total_prix;  
	}
}
if(sizeof($tableVente) > 0) foreach($tableVente as $item) {
	for($i = 0; $i <= 12; $i++) {
		if(!array_key_exists($i, $item)) $item[$i] = 0;
	}
}

//Requete statistique client
$sql = "SELECT o.fk_soc, YEAR(o.tms) AS annee, MONTH(o.tms) AS mois,
			SUM(op.quantite) AS total_quantite, SUM(op.prix) AS total_prix 
		FROM " . MAIN_DB_PREFIX . "operation_produit AS op
		JOIN " . MAIN_DB_PREFIX . "caissealimentation_operation AS o ON o.rowid = op.operation_id
		WHERE YEAR(op.tms) = YEAR(NOW()) 
		GROUP BY fk_soc, annee, mois
		ORDER BY fk_soc, annee, mois";
$resql = $db->query($sql);
$tableClient = [];
$dataClient = array_fill(0,12,0);
if ($resql) {
	while ($obj = $db->fetch_object($resql)) {
		$client = new Societe($db);
		$client->fetch($obj->fk_soc);
		$tableClient[$obj->fk_soc][0] = $client->name;
		$tableClient[$obj->fk_soc][$obj->mois] = $obj->total_quantite * $obj->total_prix; 
		if(!array_key_exists(13, $tableClient[$obj->fk_soc])) $tableClient[$obj->fk_soc][13] = 0;
		$tableClient[$obj->fk_soc][13] += $obj->total_quantite * $obj->total_prix; 
		$dataClient[$obj->mois-1] += $obj->total_quantite * $obj->total_prix; 
	}
}
if(sizeof($tableClient) > 0) foreach($tableClient as $item) {
	for($i = 0; $i <= 12; $i++) {
		if(!array_key_exists($i, $item)) $item[$i] = 0;
	}
}

//Requete statistique quantite produit
$sql = "SELECT 
			produit_id, YEAR(tms) AS annee,
			SUM(quantite) AS total_quantite, SUM(prix) AS total_prix
		FROM " . MAIN_DB_PREFIX . "operation_produit
		WHERE YEAR(tms) = YEAR(NOW()) 
		GROUP BY produit_id, annee
		ORDER BY total_quantite DESC, annee DESC
		LIMIT 10";
$resql = $db->query($sql);
$tableQuantite = [];
$labelProduit = [];
$dataQuantite = [];
if ($resql) {
	$i = 0;
	while ($obj = $db->fetch_object($resql)) {
		$produit = new Product($db);
		$produit->fetch($obj->produit_id);
		$tableQuantite[$i]['produit'] = $produit->label;
		$tableQuantite[$i]['quantite'] = $obj->total_quantite;
		$tableQuantite[$i]['prix'] = $obj->total_quantite * $obj->total_prix;
		$dataQuantite[$i] = $obj->total_quantite;
		$labelProduit[$i] = $produit->label;
		$i++;
	}
}

?>

<style>
	.container {
		display: flex;
		justify-content: space-between;
	}
	.column {
		width: 48%;
	}

	@media (max-width: 768px) {
		.container {
			flex-direction: column;
		}
		.column {
			width: 100%;
			margin-bottom: 20px;
		}
	}
</style>

<div class="container">
	<div class="column">
		<h3>Statistique chiffre d'affaire produit</h3>
		<canvas id="myChartProduit"></canvas>
	</div>
	<div class="column">
		<h3>Statistique des produits les plus vendus</h3>
		<canvas id="myChartQuantite"></canvas>
	</div>
</div>

<div>
	<h3>Total Chiffre d'affaire : <?php print $totalChiffreAffaire; ?> FCFA</h3>
</div>

<div class="container">
	<div class="column">
		<h3>Tableau des chiffres d'affaire par produit</h3>
		<table class="noborder noshadow" width="100%">
            <tr class="liste_titre nodrag nodrop">
				<th>Produit</th>
				<?php foreach($colonneMois as $it) { ?>
					<th><?php print $it; ?></th>
				<?php } ?>
				<th>Total</th>
            </tr>
			<?php if(sizeof($tableVente) > 0) { foreach($tableVente as $item) { ?>
				<?php if($item[0]) { ?><tr>
					<?php for($i = 0; $i <= 13; $i++) { ?>
						<td><?php if(array_key_exists($i, $item)) print $item[$i]; else print 0; ?></td>
					<?php } ?>
				</tr><?php } ?>
			<?php } } ?>
		</table>
	</div>
</div>

<div class="container">
	<div class="column">
		<h3>Tableau des chiffres d'affaire par client</h3>
		<table class="noborder noshadow" width="100%">
            <tr class="liste_titre nodrag nodrop">
				<th>Produit</th>
				<?php foreach($colonneMois as $it) { ?>
					<th><?php print $it; ?></th>
				<?php } ?>
				<th>Total</th>
            </tr>
			<?php if(sizeof($tableClient) > 0) { foreach($tableClient as $item) { ?>
				<?php if($item[0]) { ?><tr>
					<?php for($i = 0; $i <= 13; $i++) { ?>
						<td><?php if(array_key_exists($i, $item)) print $item[$i]; else print 0; ?></td>
					<?php } ?>
				</tr><?php } ?>
			<?php } } ?>
		</table>
	</div>
</div>

<div class="container">
	<div class="column">
		<h3>Tableau des produits les plus vendus</h3>
		<table class="noborder noshadow" width="100%">
            <tr class="liste_titre nodrag nodrop">
				<th>Produit</th>
				<th>Total Quantité</th>
				<th>Total prix</th>
            </tr>
			<?php if(sizeof($tableQuantite) > 0) { foreach($tableQuantite as $item) { ?>
				<tr>
					<td><?php print $item['produit']; ?></td>
					<td><?php print $item['quantite']; ?></td>
					<td><?php print $item['prix']; ?></td>
				</tr>
			<?php } } ?>
		</table>
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctxProduit = document.getElementById('myChartProduit');
  const ctxQuantite = document.getElementById('myChartQuantite');

   new Chart(ctxProduit, {
     type: 'line',
     data: {
       labels: <?php print json_encode($colonneMois); ?>,
       datasets: [{
         label: '# Produit',
         data: <?php print json_encode($dataVente); ?>,
		 borderColor: '#86423c',
		 backgroundColor: '#bb836a',
         borderWidth: 1
       }]
     },
     options: {
       scales: {
         y: {
           beginAtZero: true
         }
       }
     }
   });

   new Chart(ctxQuantite, {
     type: 'bar',
     data: {
		labels: <?php print json_encode($labelProduit); ?>,
		datasets: [{
			label: '# Total Quantité Produit',
			data: <?php print json_encode($dataQuantite); ?>,
			borderColor: '#86423c',
			backgroundColor: '#bb836a',
			borderWidth: 1
		}]
     },
     options: {
       scales: {
         y: {
           beginAtZero: true
         }
       }
     }
   });
</script>

<?php

// End of page
llxFooter();
$db->close();

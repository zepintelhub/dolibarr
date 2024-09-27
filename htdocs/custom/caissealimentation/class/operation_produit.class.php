<?php

// Protection pour éviter les accès directs
if (!defined('DOL_DOCUMENT_ROOT')) {
    die("Dolibarr environment is not correctly defined");
}

dol_include_once('/caissealimentation/class/paiement_operation.class.php');

class OperationProduit
{
    // Propriétés
    public $id;
    public $produit_id;
    public $operation_id;
    public $operation_ref;
    public $quantite;
    public $prix;

    // Référence à la base de données
    private $db;

    // Constructeur
    public function __construct($db)
    {
        $this->db = $db;
    }

    // Méthode pour créer un nouvel enregistrement
    public function create()
    {
        $sql = "INSERT INTO " . MAIN_DB_PREFIX . "operation_produit (produit_id, operation_id, quantite, prix)
                VALUES (" . (int)$this->produit_id . ", " . (int)$this->operation_id . ", " . (int)$this->quantite . ", " . (float)$this->prix . ")";

        $resql = $this->db->query($sql);
        if ($resql) {
            $this->id = $this->db->last_insert_id(MAIN_DB_PREFIX . "operation_produit");
            return $this->id;
        } else {
            return false;
        }
    }

    // Méthode pour charger un enregistrement existant par son ID
    public function fetch($id)
    {
        $sql = "SELECT * FROM " . MAIN_DB_PREFIX . "operation_produit WHERE rowid = " . (int)$id;
        $resql = $this->db->query($sql);
        if ($resql && $this->db->num_rows($resql) > 0) {
            $obj = $this->db->fetch_object($resql);
            $this->id = $obj->rowid;
            $this->produit_id = $obj->produit_id;
            $this->operation_id = $obj->operation_id;
            $this->quantite = $obj->quantite;
            $this->prix = $obj->prix;
            return true;
        } else {
            return false;
        }
    }

    // Méthode pour mettre à jour un enregistrement existant
    public function update()
    {
        $sql = "UPDATE " . MAIN_DB_PREFIX . "operation_produit
                SET produit_id = " . (int)$this->produit_id . ",
                    operation_id = " . (int)$this->operation_id . ",
                    quantite = " . (int)$this->quantite . ",
                    prix = " . (float)$this->prix . "
                WHERE rowid = " . (int)$this->id;

        $resql = $this->db->query($sql);
        return $resql ? true : false;
    }

    // Méthode pour supprimer un enregistrement
    public function delete()
    {
        $sql = "DELETE FROM " . MAIN_DB_PREFIX . "operation_produit WHERE rowid = " . (int)$this->id;
        return $this->db->query($sql);
    }

    public static function fetchAll($db)
    {
        $sql = "SELECT rowid, produit_id, operation_id, quantite, prix FROM " . MAIN_DB_PREFIX . "operation_produit";
        $resql = $db->query($sql);

        $objects = array();

        if ($resql) {
            while ($obj = $db->fetch_object($resql)) {
                $operationProduct = new OperationProduit($db);
                $operationProduct->id = $obj->rowid;
                $operationProduct->produit_id = $obj->produit_id;
                $operationProduct->operation_id = $obj->operation_id;
                $operationProduct->quantite = $obj->quantite;
                $operationProduct->prix = $obj->prix;

                $objects[] = $operationProduct;
            }
        }

        return $objects;
    }

    public static function fetchByOperation($db, $operation_id)
    {
        $sql = "SELECT rowid, produit_id, operation_id, quantite, prix FROM " . MAIN_DB_PREFIX . "operation_produit WHERE operation_id=" . $operation_id;
        $resql = $db->query($sql);

        $objects = array();

        if ($resql) {
            while ($obj = $db->fetch_object($resql)) {
                $operationProduct = new OperationProduit($db);
                $operationProduct->id = $obj->rowid;
                $operationProduct->produit_id = $obj->produit_id;
                $operationProduct->operation_id = $obj->operation_id;
                $operationProduct->quantite = $obj->quantite;
                $operationProduct->prix = $obj->prix;

                $objects[] = $operationProduct;
            }
        }

        return $objects;
    }

    public static function showTableToCreate($db, $object) {
        if($object->id) {
            $operationProduits = OperationProduit::fetchByOperation($db, $object->id);
            print '<form method="POST" action="'.$_SERVER["PHP_SELF"].'">';
            // print '<form method="POST" action="'.dol_buildpath('/caissealimentation/save_product.php', 1).'?id='.$object->id.'">';
            print '<input type="hidden" name="token" value="'.newToken().'">';
            print '<input type="hidden" name="add_produit" value="1">';
            print '<input type="hidden" id="nb_produit" name="nb_produit" value="0">';
            print '<input type="hidden" id="nb_produitmodification" name="nb_produitmodification" value="'.sizeof($operationProduits).'">';
            print '<input type="hidden" name="id" value="'.$object->id.'">';
            print '<input type="hidden" name="ref" value="'.$object->ref.'">';
            print '<input type="hidden" name="backpage" value="'.$_SERVER["PHP_SELF"].'">';
            print '<button id="ajouter_produit" class="butAction">Ajouter produit</button> <br>';

            // Initialisation du tableau pour stocker les produits
            $products = array();

            // Requête SQL pour récupérer les produits
            $sql = "SELECT rowid, ref, label, price, tva_tx, stock, barcode FROM " . MAIN_DB_PREFIX . "product";

            print '<table id="table_produits" class="noborder noshadow" width="100%">';
            print '<tr class="liste_titre nodrag nodrop">';
            print '<th>Produit</th>';
            print '<th>P.U</th>';
            print '<th>Quantité</th>';
            print '<th>Total</th>';
            print '</tr>';

            $i = 0;
            $total_generale = 0;
            $produit_select_list = '';
            if(sizeof($operationProduits) > 0) {

                for($i = 0; $i < sizeof($operationProduits); $i++) {
                    // Exécution de la requête
                    $resql = $db->query($sql);

                    print '<tr>';
                    print '<td>';
                    // Vérification de l'exécution correcte de la requête
                    print '<select id="select_produitmodification_'.($i+1).'" name="produitmodification_'.($i+1).'" class="select_produitmodification">';
                    $produit_select_list = '<option></option>';
                    if ($resql) {
                        // Boucle sur chaque produit
                        while ($obj = $db->fetch_object($resql)) {
                            if($obj->rowid == $operationProduits[$i]->produit_id) {
                                $produit_select_list .= '<option selected value="'.$obj->rowid.'_'.$obj->price.'_'.$operationProduits[$i]->id.'">'.$obj->label.' <span style="color:white;">'.$obj->barcode.'</span></option>';
                            } else {
                                $produit_select_list .= '<option value="'.$obj->rowid.'_'.$obj->price.'">'.$obj->label.' <span style="color:white;">'.$obj->barcode.'</span></option>';
                            }
                            
                        }
                    }
                    print $produit_select_list;
                    print '</select>';
                    print '</td>';
        
                    print '<td id="pumodification_'.($i+1).'">'.$operationProduits[$i]->prix.'</td>';
        
                    print '<td>';
                    print '<input class="select_quantitemodification" id="select_quantitemodification_'.($i+1).'" name="quantitemodification_'.($i+1).'" value="'.$operationProduits[$i]->quantite.'">';
                    print '</td>';
        
                    print '<td id="ptmodification_'.($i+1).'">'.$operationProduits[$i]->quantite*$operationProduits[$i]->prix.'</td>';
                    print '</tr>';
                    $total_generale += $operationProduits[$i]->quantite*$operationProduits[$i]->prix;
                }
            }

            // print '<tr>';
            // print '<td>';
            
            // Exécution de la requête
            $resql = $db->query($sql);

            $i = 1;

            // Vérification de l'exécution correcte de la requête
            // print '<select id="select_produit_'.$i.'" name="produit_'.$i.'" class="select_produit">';
            $produit_select_list = '<option></option>';
            if ($resql) {
                // Boucle sur chaque produit
                while ($obj = $db->fetch_object($resql)) {
                    $produit_select_list .= '<option value="'.$obj->rowid.'_'.$obj->price.'">'.$obj->label.' <span style="color:white;">'.$obj->barcode.'</span></option>';
                }
            }
            
            // print $produit_select_list;
            // print '</select>';
            // print '</td>';

            // print '<td id="pu_'.$i.'"></td>';

            // print '<td>';
            // print '<input class="select_quantite" id="select_quantite_'.$i.'" name="quantite_'.$i.'" value="1">';
            // print '</td>';

            // print '<td id="pt_'.$i.'"></td>';
            // print '</tr>';
            // $i = $i + 1;

            print '</table>';

            print '<input type="submit" class="butAction"value="Enregistrer Produit">';

            print '</form>';

            // formulaire de paiement
            print '<form method="POST" action="save_paiement.php">';
            // print '<form method="POST" action="'.dol_buildpath('/caissealimentation/save_product.php', 1).'?id='.$object->id.'">';
            print '<input type="hidden" name="token" value="'.newToken().'">';
            print '<input type="hidden" name="id" value="'.$object->id.'">';
            print '<input type="hidden" name="ref" value="'.$object->ref.'">';
            print '<input type="hidden" name="total" value="'.$total_generale.'">';
            print '<input type="hidden" name="action" value="paiement">';
            print '<input type="hidden" name="backpage" value="'.$_SERVER["PHP_SELF"].'">';

            $listpaiement = PaiementOperation::fetchByOperation($db, $object->id);
            $tablelistpaiement = "";
            $paiementmontant = 0;
            if($listpaiement && sizeof($listpaiement)) {
                $tablelistpaiement .= '<table class="noborder noshadow" width="100%">';
                $tablelistpaiement .= '<tr class="liste_titre nodrag nodrop">';
                $tablelistpaiement .= '<th>Montant</th>';
                $tablelistpaiement .= '<th>Date</th>';
                $tablelistpaiement .= '<th>Mode Paiement</th>';
                $tablelistpaiement .= '</tr>';
                foreach($listpaiement as $paiement) {
                    $tablelistpaiement .= "<tr>";
                    $tablelistpaiement .= "<td>".$paiement->amount."</td>";
                    $tablelistpaiement .= "<td>".$paiement->datep."</td>";
                    $tablelistpaiement .= "<td>".$paiement->mode_paiement ?? "-"."</td>";
                    $tablelistpaiement .= "</tr>";
                    $paiementmontant += $paiement->amount;
                }
                $tablelistpaiement .= '</table>';
            }
            $resteapayer = $total_generale - $paiementmontant;
            $badgeclass = "";
            if($paiementmontant == 0) $badgeclass = '<span class="badge badge-status1 badge-status" title="Actif">Non payé</span>';
            else if($paiementmontant < $total_generale) $badgeclass = '<span class="badge badge-status1 badge-status" title="Actif">En cours</span>';
            else if($paiementmontant >= $total_generale) $badgeclass = '<span class="badge badge-status4 badge-status" title="Actif">Payé</span>';
            
            $sqlmodepaiement = "SELECT * FROM " . MAIN_DB_PREFIX . "caissealimentation_modepaiement ORDER BY ref;";
            $modepaiementselect = '<select name="fk_paiement" class="select"><option>Mode de paiement</option>';
            $resql = $db->query($sqlmodepaiement);
            if($resql) {
                $selected = "selected";
                while($row = $db->fetch_array($resql)) {
                    $modepaiementselect .= '<option '.$selected.' value="'. $row['rowid'] .'.">'. $row['label'] .'</option>';
                    $selected = "";
                }
            }
            $modepaiementselect .= '</select>';
            $modepaiementinput = '<input id="mode-paiement-input" disabled value="Cash">';
            $modepaiementinput .= '<input id="mode-paiement-hidden" type="hidden" name="mode_paiement" value="Cash">';
            $tablechamppaiement = "";
            if($paiementmontant < $total_generale) $tablechamppaiement = <<<EOD
                <span style="margin-left:3px;">Reste à payer : $resteapayer </span><br>
                <table class="border tableforfieldcreate">
                    <tbody>
                        <tr class="field_ref">
                            <td>$modepaiementinput</td>
                            <td class="valuefieldcreate">
                                <input type="number" max="$resteapayer" class="flat minwidth400 --success" value="$resteapayer" name="montantApayer" id="montantApayer" placeholder="Saisir montant à payer">
                                <button id="payer_facture" class="butAction" style="margin-left:5px;">Payer</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            EOD;

            $stylecss = <<<EOD
                <style>
                    .card-container {
                        display: flex;
                        flex-wrap: wrap;
                        justify-content: space-around;
                        gap: 20px;
                    }

                    .card {
                        width: 130px;
                        border: 1px solid #ddd;
                        border-radius: 8px;
                        overflow: hidden;
                        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
                        text-align: center;
                        background-color: #fff;
                    }

                    .card-logo {
                        height: 80px;
                        background-color: #f7f7f7;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    }

                    .logo-img {
                        max-height: 100%;
                        max-width: 100%;
                    }

                    .card-body {
                        padding: 10px;
                    }

                    .card-body h5 {
                        margin: 10px 0;
                        font-size: 16px;
                        font-weight: bold;
                        color: #333;
                    }

                    .card-select {
                        border-color: black;
                    }
                </style>
            EOD;

            $orange_money_logo_path = DOL_URL_ROOT . '/custom/caissealimentation/img/Orange-Money.png';
            $moov_money_logo_path = DOL_URL_ROOT . '/custom/caissealimentation/img/Moov-Money.jpeg';
            $zamapay_logo_path = DOL_URL_ROOT . '/custom/caissealimentation/img/yam-group.png';
            $moneycash_logo_path = DOL_URL_ROOT . '/custom/caissealimentation/img/cash.png';
            $telecel_money_logo_path = DOL_URL_ROOT . '/custom/caissealimentation/img/telecel.png';
            $visa_card_logo_path = DOL_URL_ROOT . '/custom/caissealimentation/img/visa-card-logo.png';
            $modepaiementcard = <<<EOD
                <div class="card-container">
                    
                    <div id="Cash" class="card mode-paiement">
                        <div class="card-logo">
                            <img src="$moneycash_logo_path" alt="" class="logo-img">
                        </div>
                        <div class="card-body">
                            <h5>Cash</h5>
                        </div>
                    </div>

                    <div id="ZAMAPAY" class="card mode-paiement">
                        <div class="card-logo">
                            <img src="$zamapay_logo_path" alt="" class="logo-img">
                        </div>
                        <div class="card-body">
                            <h5>ZAMAPAY</h5>
                        </div>
                    </div>

                    <div id="Orange Money" class="card mode-paiement">
                        <div class="card-logo">
                            <img src="$orange_money_logo_path" alt="" class="logo-img">
                        </div>
                        <div class="card-body">
                            <h5>Orange Money</h5>
                        </div>
                    </div>

                    <div id="Moov Money" class="card mode-paiement">
                        <div class="card-logo">
                            <img src="$moov_money_logo_path" alt="" class="logo-img">
                        </div>
                        <div class="card-body">
                            <h5>Moov Money</h5>
                        </div>
                    </div>

                    <div id="Telecel Money" class="card mode-paiement">
                        <div class="card-logo">
                            <img src="$telecel_money_logo_path" alt="" class="logo-img">
                        </div>
                        <div class="card-body">
                            <h5>Telecel Money</h5>
                        </div>
                    </div>

                    <div id="Visa Card" class="card mode-paiement">
                        <div class="card-logo">
                            <img src="$visa_card_logo_path" alt="" class="logo-img">
                        </div>
                        <div class="card-body">
                            <h5>Visa Card</h5>
                        </div>
                    </div>
                </div>
            EOD;
            
            $tablepaiement = <<<EOD
                $stylecss
                <div style="margin-top:50px; margin-bottom:50px;">
                    <h3>
                        Paiement 
                        $badgeclass
                    </h3>
                    $tablelistpaiement
                    $modepaiementcard
                    <span style="margin-left:3px;">Total payé : $paiementmontant </span><br>
                    $tablechamppaiement
                </div>
            EOD;

            print $tablepaiement;
            
            print '</form>';

            $clientliste = "";
            $sql = "SELECT * FROM " . MAIN_DB_PREFIX . "societe";
            $resql = $db->query($sql);
            if($resql) {
                while($obj = $db->fetch_object($resql)) {
                    $clientliste .= '<option value="'.$obj->rowid.'">'.$obj->nom.'</option>';
                }
            } else {
                print '<br>Rollback: ' . $db->lasterror();
            }

            $serveur = $_SERVER['PHP_SELF'];
            $newToken = newToken();
            $addclient = <<<EOD
            <form id="formselectclient" method="POST" action="save_client.php">
                <input hidden name="action" value="selectclient" />
                <input hidden name="token" value="$newToken" />
                <input hidden name="id" value="$object->id" />
                <input hidden name="backpage" value="$serveur" />
                <table class="border tableforfieldcreate">
                    <tbody>
                        <tr id="selectclient" class="field_ref">
                            <td>Client</td>
                            <td class="valuefieldcreate">
                                <select required class="selectclient" name="selectclient">
                                    <option></option>
                                    $clientliste
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><button class="butAction" style="margin-left:0px;">Enregistrer</button></td>
                            <td><button id="toggleaddclient" class="butAction" style="margin-left:5px;">Ajouter</button></td>
                        </tr>
                    </tbody>
                </table>
            </form>

            <form id="formaddclient" method="POST" action="save_client.php">
                <input hidden name="action" value="addclient" />
                <input hidden name="token" value="$newToken" />
                <input hidden name="id" value="$object->id" />
                <input hidden name="backpage" value="$serveur" />
                <table class="border tableforfieldcreate">
                    <tbody>
                        <tr class="addclient field_ref">
                            <td>Nom Client</td>
                            <td class="valuefieldcreate">
                                <input required class="flat minwidth400 --success" value="" name="nom_client" id="nom_client" placeholder="Saisir le nom">
                            </td>
                        </tr>
                        <tr class="addclient field_ref">
                            <td>Téléphone</td>
                            <td class="valuefieldcreate">
                                <input class="flat minwidth400 --success" value="" name="telephone_client" id="telephone_client" placeholder="Saisir le téléphone">
                            </td>
                        </tr>
                        <tr>
                            <td><button class="butAction" style="margin-left:0px;">Enregistrer</button></td>
                            <td><button id="toggleselectclient" class="butAction" style="margin-left:5px;">Sélection</button></td>
                        </tr>
                    </tbody>
                </table>
            </form>
            EOD;

            print $addclient;

            $javascript = <<<EOD
                <script>
                    var index = $i;

                    function eventChange() {
                        $(".select_produit").change((event) => {
                            var id = event.target.id;
                            var price = Number.parseInt(event.target.value.split('_')[1]);
                            var _index = id.split('_')[2];
                            console.log('id', event.target.id, _index);
                            $("#pu_"+_index).html(price);
                            $("#pt_"+_index).html(price);
                            $("#select_quantite_"+_index).val("1");
                        });
                        
                        $(".select_quantite").keyup((event) => {
                            console.log('quantite change');
                            var id = event.target.id;
                            var quantite = Number.parseInt(event.target.value);
                            var price = Number.parseInt($("#pu_"+_index).html());
                            var _index = id.split('_')[2];
                            console.log('id', event.target.id, _index);
                            console.log('price, quantite, price*quantite', price, quantite, price*quantite, Number.parseInt($("#pu_"+_index).html()));
                            $("#pt_"+_index).html(Number.parseInt($("#pu_"+_index).html())*quantite);
                        });

                        $(".select_produitmodification").change((event) => {
                            var id = event.target.id;
                            var price = Number.parseInt(event.target.value.split('_')[1]);
                            var _index = id.split('_')[2];
                            console.log('id', event.target.id, _index);
                            $("#pumodification_"+_index).html(price);
                            $("#ptmodification_"+_index).html(price);
                            $("#select_quantitemodification_"+_index).val("1");
                        });
                        
                        $(".select_quantitemodification").keyup((event) => {
                            console.log('quantite change');
                            var id = event.target.id;
                            var quantite = Number.parseInt(event.target.value);
                            var price = Number.parseInt($("#pumodification_"+_index).html());
                            var _index = id.split('_')[2];
                            console.log('id', event.target.id, _index);
                            console.log('price, quantite, price*quantite', price, quantite, price*quantite, Number.parseInt($("#pumodification_"+_index).html()));
                            $("#ptmodification_"+_index).html(Number.parseInt($("#pumodification_"+_index).html())*quantite);
                        });

                        $(".mode-paiement").click((event) => {
                            $("#mode-paiement-input, #mode-paiement-hidden").val(event.currentTarget.id);
                            $(".mode-paiement").removeClass("card-select");
                            $(event.currentTarget).addClass("card-select");
                        });
                        
                        $(".select_produit").select2();
                        $(".select_produitmodification").select2();
                        $(".selectclient").select2();
                        $("#formselectclient").hide();
                        $("#toggleselectclient, #toggleaddclient").click((event) => {
                            event.preventDefault();
                            $("#formselectclient").toggle();
                            $("#formaddclient").toggle();
                        });
                    }

                    $("#ajouter_produit").click((event) => {
                        event.preventDefault();
                        $("#table_produits").append(`
                            <tr>
                                <td>
                                    <select data-index="\${index}" id="select_produit_\${index}" name="produit_\${index}" class="select_produit">
                                        $produit_select_list
                                    </select>
                                </td>
                                <td id="pu_\${index}"></td>
                                <td><input class="select_quantite" id="select_quantite_\${index}" name="quantite_\${index}" value="1"></td>
                                <td id="pt_\${index}"></td>
                            </tr>
                        `);
                        $("#nb_produit").val(index);
                        index++;

                        eventChange();
                    });

                    eventChange();
                </script>
            EOD;
            print $javascript;
        }
    }

}



?>

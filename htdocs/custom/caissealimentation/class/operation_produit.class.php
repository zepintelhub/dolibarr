<?php

// Protection pour éviter les accès directs
if (!defined('DOL_DOCUMENT_ROOT')) {
    die("Dolibarr environment is not correctly defined");
}

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
            print '<input type="hidden" name="action" value="paiement">';
            print '<input type="hidden" name="backpage" value="'.$_SERVER["PHP_SELF"].'">';

            $tablepaiement = <<<EOD
                <div style="margin-top:50px; margin-bottom:50px;">
                    <h3>
                        Paiement 
                        <span class="badge badge-status1 badge-status" title="Actif">En cours</span>
                    </h3>
                    <table class="border centpercent tableforfieldcreate">
                        <tbody>
                            <tr class="field_ref">
                                <td class="titlefieldcreate">Montant</td>
                                <td class="valuefieldcreate">
                                    <input type="number" class="flat minwidth400 --success" name="montantApayer" id="montantApayer" value="" placeholder="Saisir montant à payer">
                                    <button id="payer_facture" class="butAction" style="margin-left:5px;">Payer</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            EOD;

            print $tablepaiement;
            
            print '</form>';

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
                        
                        $(".select_produit").select2();
                        $(".select_produitmodification").select2();
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

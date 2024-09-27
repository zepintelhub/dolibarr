<?php
require_once DOL_DOCUMENT_ROOT.'/core/class/commonobject.class.php';
class PaiementOperation extends CommonObject
{
    public $table_element = 'paiementoperation';  // Nom de la table
    public $element = 'paiementoperation';        // Nom de l'objet

    public $id;
    public $ref;
    public $amount;
    public $datep;               // Date de paiement
    public $fk_paiement;         // Mode de paiement (ID)
    public $mode_paiement;         // Mode de paiement (ID)
    public $fk_user_author;      // Auteur du paiement
    public $fk_bank;             // ID du compte bancaire
    public $fk_operation;        // ID de l'opération associée
    public $statut;

    public $label;               // Label du mode de paiement

    public $fields = array(
        'ref' => array('type' => 'string', 'label' => 'Reference', 'enabled' => 1),
        'amount' => array('type' => 'double', 'label' => 'Amount', 'enabled' => 1),
        'datep' => array('type' => 'datetime', 'label' => 'PaymentDate', 'enabled' => 1),
        'fk_paiement' => array('type' => 'integer', 'label' => 'PaymentMethod', 'enabled' => 1),
        'mode_paiement' => array('type' => 'integer', 'label' => 'PaymentMethod', 'enabled' => 1),
        'fk_user_author' => array('type' => 'integer', 'label' => 'Author', 'enabled' => 1),
        'fk_bank' => array('type' => 'integer', 'label' => 'BankAccount', 'enabled' => 1),
        'fk_operation' => array('type' => 'integer', 'label' => 'Operation', 'enabled' => 1),
        'statut' => array('type' => 'integer', 'label' => 'Status', 'enabled' => 1)
    );

    public function __construct($db)
    {
        $this->db = $db;
        // $this->init();
    }

    /**
     * Create the payment operation in the database
     */
    public function create($db)
    {
        $sql = "INSERT INTO ".MAIN_DB_PREFIX."paiementoperation (ref, amount, datep, fk_operation, fk_user_author, mode_paiement, statut)";
        $sql .= " VALUES ('".$this->db->escape($this->ref)."', ".(float)$this->amount.", '".$this->db->idate($this->datep)."', ".$this->fk_operation.", ".$this->fk_user_author.", '".$this->mode_paiement."', ".$this->statut.");";

        print '<br>SQL: ' . $sql;
        $resql = $this->db->query($sql);

        if ($resql) {
            $this->id = $db->last_insert_id(MAIN_DB_PREFIX.'paiementoperation');
            print '<br>db commit';
            $db->commit();
            return $this->id;
        } else {
            dol_syslog('Insertion failed: ' . $db->lasterror(), LOG_ERR);
            print '<br>db rollback ' . $db->lasterror();
            $this->db->rollback();
            return -1;
        }
    }

    /**
     * Fetch a payment operation from the database
     */
    public function fetch($id)
    {
        $sql = "SELECT * FROM ".MAIN_DB_PREFIX."paiementoperation WHERE rowid = ".(int) $id;
        $resql = $this->db->query($sql);

        if ($resql) {
            $obj = $this->db->fetch_object($resql);

            $this->id = $obj->rowid;
            $this->ref = $obj->ref;
            $this->amount = $obj->amount;
            $this->datep = $this->db->jdate($obj->datep);
            $this->fk_paiement = $obj->fk_paiement;
            $this->fk_user_author = $obj->fk_user_author;
            $this->fk_bank = $obj->fk_bank;
            $this->fk_operation = $obj->fk_operation;
            $this->statut = $obj->statut;

            return 1;
        } else {
            return -1;
        }
    }

    /**
     * Update the payment operation in the database
     */
    public function update($user, $notrigger = 0)
    {
        $sql = "UPDATE ".MAIN_DB_PREFIX."paiementoperation SET";
        $sql .= " ref = '".$this->db->escape($this->ref)."',";
        $sql .= " amount = ".$this->amount.",";
        $sql .= " datep = '".$this->db->idate($this->datep)."',";
        $sql .= " fk_paiement = ".$this->fk_paiement.",";
        $sql .= " fk_user_author = ".$this->fk_user_author.",";
        $sql .= " fk_bank = ".$this->fk_bank.",";
        $sql .= " fk_operation = ".$this->fk_operation.",";
        $sql .= " statut = ".$this->statut;
        $sql .= " WHERE rowid = ".$this->id;

        return $this->db->query($sql);
    }

    /**
     * Delete the payment operation from the database
     */
    public function delete($user, $notrigger = 0)
    {
        $sql = "DELETE FROM ".MAIN_DB_PREFIX."paiementoperation WHERE rowid = ".$this->id;
        return $this->db->query($sql);
    }

    public static function fetchByOperation($db, $operation_id)
    {
        $sql = "SELECT po.rowid, po.ref, po.amount, po.datep, po.mode_paiement, po.fk_user_author, po.fk_bank, po.fk_operation, po.statut FROM " . MAIN_DB_PREFIX . "paiementoperation AS po
        WHERE fk_operation=" . $operation_id;
        $resql = $db->query($sql);

        $objects = array();

        if ($resql) {
            while ($obj = $db->fetch_object($resql)) {
                $paiement = new PaiementOperation($db);
                $paiement->id = $obj->rowid;
                $paiement->ref = $obj->ref;
                $paiement->amount = $obj->amount;
                $paiement->datep = $obj->datep;
                $paiement->mode_paiement = $obj->mode_paiement;
                $paiement->fk_user_author = $obj->fk_user_author;
                $paiement->fk_bank = $obj->fk_bank;
                $paiement->fk_operation = $obj->fk_operation;
                $paiement->statut = $obj->statut;

                $objects[] = $paiement;
            }
        } else {
            dol_syslog('List failed: ' . $db->lasterror(), LOG_ERR);
            print '<br>db rollback ' . $db->lasterror();
            return -1;
        }

        return $objects;
    }
}

?>

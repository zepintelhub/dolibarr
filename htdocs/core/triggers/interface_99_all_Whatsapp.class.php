<?php
require_once 'C:/xampp/htdocs/dolibarr/vendor/autoload.php'; // Inclure l'autoloader de Twilio

use Twilio\Rest\Client;

class InterfaceWhatsapp extends DolibarrTriggers
{

    protected $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
     
    /**
     * Function to execute the trigger
     * 
     * @param string $action Event action code (ADHERENT_CREATE in this case)
     * @param Object $object The object that triggered the action (Adherent object)
     * @param User $user The user who performed the action
     * @param Translate $langs Language handler object
     * @param Conf $conf Configuration object
     * @return int
     */





    public function runTrigger($action, $object, $user, $langs, $conf)
    {
       
        



        if ($action == 'MEMBER_CREATE') {
            // Connexion à la base de données Dolibarr
            $db = new mysqli('localhost', 'root', '', 'dolibarr');

            if ($db->connect_error) {
                dol_syslog("Erreur de connexion à la base de données: " . $db->connect_error, LOG_ERR);
                return -1;
            }

            // Requête pour récupérer le numéro de téléphone du dernier adhérent
            $query = "SELECT phone FROM llx_adherent WHERE statut = -1 ORDER BY rowid DESC LIMIT 1";
            $result = $db->query($query);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $phone = $row['phone'];
                if ($phone) {
                    // Envoyer un message WhatsApp via Twilio
                    $this->sendWhatsAppMessage($phone);
                } else {
                    dol_syslog("Le dernier adhérent n'a pas de numéro de téléphone renseigné.", LOG_WARNING);
                }
            } else {
                dol_syslog("Aucun adhérent trouvé.", LOG_WARNING);
            }

            $db->close();
        }

        return 0; // Return 0 for success
    }

     /**
     * Function to send a WhatsApp message via Twilio
     * 
     * @param string $phone Phone number of the adherent
     */

    private function sendWhatsAppMessage($phone) {
        $sid = 'AC42ed2acce32fec858465d961cd6dd66d'; // Remplacez par votre SID Twilio
        $token = '75ce4c07ff162dca12f4c200b0157a70'; // Remplacez par votre token Twilio
        $twilio_number = 'whatsapp:+14155238886';
        $client = new Client($sid, $token);

    // Envoyer le message WhatsApp
        try {
            $message = $client->messages->create(
                "whatsapp:" .$phone,
                array(
                    'from' => $twilio_number,
                    'body' => "Bienvenue! Ton adhesion a la cotisation de 10000 dollard a été valider "
                )
            );
            dol_syslog("Message WhatsApp envoyé à $phone : " . $message->sid);
        } catch (Exception $e) {
            dol_syslog("Erreur lors de l'envoi du message WhatsApp à $phone : " . $e->getMessage(), LOG_ERR);
        }
    }
}
?>

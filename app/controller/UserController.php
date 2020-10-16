<?php
require_once('../model/UserModel.php');
require_once('../model/Connection.php');

class UserController {
    public $con;
    public $lis;
    public $use;
    public $men;

    public function __construct() {
        $lis = array();
    }

    public function login($user, $password) {
        $find = false; 
        $sql = "SELECT num_use, log_use, pas_use, nom_use, ape_use, ema_use, cel_use, ced_use FROM user WHERE log_use = '".$user."' AND pas_use=md5('".$password."')";
 
        $con = new Connection();
        $con->setDat_con('ruleta');
        $con->open();
        $result = $con->executeSentence($sql);
        $this->men = $con->getErr_con();
        $con->close();

        if (is_array($result)) {
            $this->getUsers($result);

            $this->use = $this->lis[0];
            if ($this->use != NULL) {
                $find = true;
            }            
        }

        return $find;
    }

    public function addUser($use) {
        $sql = "INSERT INTO user(log_use, pas_use, nom_use, ape_use, ema_use, cel_use, ced_use) VALUES ('".$use->getLog_use()."', md5('".$use->getPas_use()."'), '".$use->getNom_use()."', '".$use->getApe_use()."', '".$use->getEma_use()."', '".$use->getCel_use()."', '".$use->getCed_use()."')";
        
        $con = new Connection();
        $con->setDat_con('ruleta');
        $con->open();
        $result = $con->executeSentence($sql);
        $this->men = $con->getErr_con();
        $con->close();

        return $result;
    }

    public function getUsers($result) {
        foreach ($result as $value) {
            $this->lis[] = new UserModel($value['num_use'], $value['log_use'], $value['pas_use'], $value['nom_use'], $value['ape_use'], $value['ema_use'], $value['cel_use'], $value['ced_use']);
        }
    }
}

?>
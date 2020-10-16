<?php
require_once('Result.php');

class Connection {
	private $hos_con;
	private $use_con;
	private $pas_con;
    private $dat_con;

    private $lin_con;

    private $res_con;
    private $cur_con;
    private $sec_con;
    private $err_con;


	public function __construct($hos_con = 'localhost', $use_con='root', $pas_con='') {
        $this->hos_con = $hos_con;
        $this->use_con = $use_con;
		$this->pas_con = $pas_con;
		
		$this->res_con = new Result();
    }

    public function setDat_con($dat_con) {
        $this->dat_con = $dat_con;
	}
	
	public function getErr_con() {
		return $this->err_con;
	}

	public function getRes_con() {
		return $this->res_con;
	}
    
    public function open () {
		$this->lin_con = new mysqli($this->hos_con, $this->use_con, $this->pas_con, $this->dat_con);
        $this->err_con = $this->lin_con->connect_error;
        if ($this->lin_con->connect_error) {
            die('Error de Conexión '. $this->lin_con->connect_error);
		}
		else {
			$acentos = $this->lin_con->query("SET NAMES 'utf8'");
		}
    }

    public function close () {
        $this->lin_con->close();
    }

    public function executeSentence($sql) {
		$rows = false;

		$this->cur_con = $this->lin_con->query($sql);
		$this->err_con = $this->lin_con->error;

		if (is_object($this->cur_con) == true) {
			if (get_class ($this->cur_con) == "mysqli_result") {
				$this->res_con->setCur_res($this->cur_con);
				$rows = $this->res_con->getRows();					
			}					
		}
		else {
			$rows = $this->cur_con;
		}
				
		return $rows;
	}
	
	// // Sends the query to the connection
	// public function Query($sql) {
	// 	$this->result = $this->lin_con->query($sql) or die(mysqlierror($this->result));
	// 	$this->numRows = mysqlinumrows($this->result);
	// }
	
	// // Inserts into databse
	// public function UpdateDb($sql) {
	// 	$this->result = $this->lin_con->query($sql) or die(mysqlierror($this->result));
	// 	return $this->result;
	// }
	
	// // Return the number of rows
	// public function NumRows() {
	// 	return $this->numRows;
	// }
	
	
	
	// // Used by other classes to get the connection
	// public function Getlin_con() {
	// 	return $this->lin_con;
	// }
	
	// // Securing input data
	// public function SecureInput($value) {
	// 	return mysqlirealescapestring($this->lin_con, $value);
	// }
}
?>
<?php

class Result {
    private $cur_res;

    public function __construct() {
        $this->cur_res = NULL;
    }

    public function setCur_res($cur_res) {
        $this->cur_res = $cur_res;
    }

    public function getNumberRows(){
        if ($this->cur_res != NULL)
            return ($this->cur_res->num_rows);
    }
	public function getRows() {
        $rows = array();
        
        if ($this->cur_res != NULL){
            for($x = 0; $x < $this->cur_res->num_rows; $x++) {
                $rows[$x] = $this->cur_res->fetch_assoc();
            }
        }
		return $rows;
	}

    public function free(){
        $this->cur_res->free();
    }
}

?>
<?php 
require_once "db.php";
class Turn{

    public $_db;
    public $free_turn;
    public $customer;


    public function __construct(){

        $this->_db = DB::getInstance();

    }



    public function getTurn(){

        $params = array();
        $query = 'select turn from admin where id = 1';
        $this->_db->query($query, $params);
        return $this->_db->result[0]['turn'];
    }

    public function updateTurn( $choose ){

        $params = array();
        $query = 'UPDATE admin SET turn ='.$choose.' WHERE id = 1;';
        $this->_db->query($query, $params);

    }

    public function updateFirstTurn( $choose ){

        $params = array();
        $query = 'UPDATE admin SET turn ='.$choose.' , free_turn = '.$choose.' WHERE id = 1;';
        $this->_db->query($query, $params);

    }

    public function getFreeTurn(){

        $params = array();
        $query = 'select free_turn from admin where id = "1"';
        $this->_db->query($query, $params);
        $free_turn = $this->_db->result[0]['free_turn'];

        $temp = $free_turn;
        $temp++;
        $params = array();
        $query = 'UPDATE admin SET free_turn = '.$temp.' WHERE id = 1;';
        $this->_db->query($query, $params);
        return $free_turn;

    }


}

?>
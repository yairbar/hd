<?php
session_start();
require_once "db.php";
class Login{


    public $_db;
    public $user;
    public $errors;
    public $messages;
    public $free_turn;


    public function __construct(){

        $this->errors = array();
        $this->messages = array();

        $this->_db = DB::getInstance();

        if( isset($_GET['logout'])){
            $this->doLogout();
        } elseif ( isset( $_POST['login'])){
            $this->doLoginWithPostData();
        } elseif ( isset( $_POST['register'])){
            $this->doRegister();
        }
    }

    public function doLoginWithPostData(){

        if(empty($_POST['UserName'])){

            $this->errors[] = 'UserName fild was empty';

        } elseif(empty($_POST['password'])){

            $this->errors[] = 'Password was empty'; 

        } else {

            if($_POST['UserName']==="admin" && $_POST["password"] == "456"  ){

                $_SESSION["is_admin"] = 1;
                $params = array();
                $query = 'UPDATE admin SET show_turn = "1" WHERE id ="1"';
                $this->_db->query($query,$params);

            } else {
                $this->errors[] = 'Incorrect credentials';           
            }
        }

    }

    public function doLogout()
    {

        $params = array();
        $query = 'UPDATE admin SET show_turn = 0 WHERE id = "1"';
        $this->_db->query($query , $params);

        //    $_SESSION = array();
        session_unset(); 
        session_destroy();
        $this->messages[] = "You have been logged out.";
    }


    public function isUserLoggedIn(){

        $params = array();
        $query = 'select show_turn from admin where id = "1"';
        $this->_db->query($query, $params);
        $_SESSION['user_login_status'] = $this->_db->result[0]['show_turn'];
    }


}



?>




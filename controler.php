<?php 
ob_start();
require_once "Login.class.php";
require_once "Turn.class.php";
$turn = new Turn();
$login = new Login();




if(isset($_POST["islogin"]) && !empty($_POST["islogin"])){

    $login->isUserLoggedIn();

    if( $_SESSION['user_login_status'] == 1){

        $tempTurn = (int)$turn->getTurn(); 

        if( $_POST["islogin"] === 'p'){

            if($tempTurn == 999){

                $tempTurn = 1;
                $turn->updateTurn($tempTurn);    
            }
            else $turn->updateTurn($tempTurn+1);
        }
        if($_POST["islogin"] === 'm'){

            if($tempTurn == 1){

                $tempTurn = 999;
                $turn->updateTurn($tempTurn);
            }
            else $turn->updateTurn($tempTurn-1);
        }

        $tempTurn = $turn->getTurn(); 

        $myarr = array ( 'turn' =>  $tempTurn );



        echo json_encode($myarr);

    }
}

if(isset($_POST["choose"]) && !empty($_POST["choose"])){

    $turn->updateFirstTurn($_POST["choose"]);
    echo json_encode(true);

}

if(isset($_POST["isChoose"]) && !empty($_POST["isChoose"])){

    $tempTurn = $turn->getTurn();

    $myarr = array (
        'turn' =>  $tempTurn
    );

    echo json_encode($myarr);

}

if(isset($_POST["turn"]) && !empty($_POST["turn"])){

    $turn->getTurn();
    echo json_encode( $_SESSION['turn']);

}



if(isset($_POST["is_admin"]) && !empty($_POST["is_admin"])){

    echo json_encode( $_SESSION['is_admin']);

}

?>
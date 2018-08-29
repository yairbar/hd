<?php 
require_once "Turn.class.php";
$turn = new Turn();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
$mail = new PHPMailer(true);

$mail->Host = "smtp.gmail.com";
//$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Username = "ybm9000@gmail.com";
$mail->Password = "arbel5586";
$mail->SMTPSecure = "ssl";//or we can use TLS
$mail->Port = 465;//OR 587 if TLS

$mail->Body = "This is the body mail...";

//set who sending an email
$mail->setFrom('ybm9000@gmail.com',"Yair Bruch");

//set where we are  sending an email
//$mail->addAddress("yair9088@gmail.com");



if(isset($_POST['email']) && !empty($_POST['email'])){

    $tempTurn = $turn->getFreeTurn();
    $mail->Subject = $tempTurn;
    $mail->addAddress($_POST['email']);

    $myarr = array (

        'turn' =>  $tempTurn
    );


    if($mail->send())
        echo json_encode($myarr);

}

?>
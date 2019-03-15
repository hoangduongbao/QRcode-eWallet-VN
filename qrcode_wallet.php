<?php
!@include_once("qrcode_lib.php");

$wallet = $_GET["w"]; //Vi dien tu: momo, viettelpay
$receiver_name = $_GET["r"]; //ten nguoi nhan
$receiver_number = $_GET["n"]; //so dien thoai wallet
$receiver_email = $_GET["e"]; //email nguoi nhan
$money = $_GET["m"]; //so tien thanh toan

function gen_image($wallet, $receiver_name, $receiver_number, $receiver_email, $money){
  $string = "Hello! Nothing to do.";

  if($wallet=="momo"){
    $string = "1|99|{$receiver_number}|{$receiver_name}|{$receiver_email}|0|0|{$money}";
  }

  if($wallet=="viettelpay"){
    $string = '{"bankCode":"VTT","cust_mobile":"'.$receiver_number.'","transfer_type":"MYQR","trans_amount":"'.$money.'"}';
  }

  $gen_image = QRcode::png($string);
}

gen_image($wallet, $receiver_name, $receiver_number, $receiver_email, $money);

// gen_image("momo","","0888799603","","100000");
 ?>

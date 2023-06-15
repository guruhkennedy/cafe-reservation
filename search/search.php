<?php
include_once('config.php');

if(isset($_GET['firstname'])){
    $firstname = $_GET['firstname'];
if(isset($_GET['lastname'])){
    $lastname = $_GET['lastname'];

$query = $mysqli->query("SELECT id,firstname,lastname,email,ordername,ordercode,orderqty,subtotal  FROM orders WHERE firstname='$firstname' and lastname='$lastname'");

if($query){
        while($obj = $query->fetch_object()){
           echo 'ID: '.$obj->id;
           echo 'Firstname: '.$obj->firstname;
           echo 'Lastname: '.$obj->lastname;
           echo 'Email: '.$obj->email;
           echo 'Order Name: '.$obj->ordername;
           echo 'Order Code: '.$obj->ordercode;
           echo 'Order Qty: '.$obj->orderqty;
           echo 'Sub total: '.$obj->subtotal;
        }
   }
}

?>
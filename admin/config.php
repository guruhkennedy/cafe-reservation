<?php
session_start();

$conf = mysqli_connect('localhost','admin111', 'admin111', 'reservasi');
if(mysqli_connect_errno()) {
echo mysqli_connect_error();
} else {
}

?>
<?php

session_start();
include "../connect/connect.php";
if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}





?>
<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/12/2017
 * Time: 8:17 PM
 */
    if(!isset($_SESSION['user_id'])){
        header('Location:login_register.php');
    }
?>
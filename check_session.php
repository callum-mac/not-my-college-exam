<?php

    session_start();



    if(session_status() != PHP_SESSION_ACTIVE || !ISSET($_SESSION["user"])){

    header('location:MyHealthPreLogin.php');

    exit();

    }



?>
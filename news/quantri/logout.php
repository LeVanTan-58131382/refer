<?php 

    session_start();
    require_once "../class/quantritin.php";
    $qt = new quantritin;
    $qt -> checkLogin();

    $kq = $qt->CheckLogout();
    header("Location: login.php");
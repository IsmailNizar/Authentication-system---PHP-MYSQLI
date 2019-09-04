<?php
session_start();

if (isset($_SESSION['username'])){
    require('../vue/accueilView.php');
}else{
    header("Location: login.php");
}
<?php
require('../modele/loginModele.php');

require('../vue/loginView.php');

if (isset($_GET['error']) && $_GET['error'] == 'WrongInformation'){
    echo'<script>
    alert("Le nom d\'utilisateur Ou Le mot de passe est incorrect !");
    </script>';
}

if (isset($_POST['login'])){
    $db = dbConnect();  
    $userData= getData($_POST['username']);
    $Check = password_verify($_POST['pwd'],$userData['pass']);
    if ($Check == false){
        header("Location: ../controleur/login.php?error=WrongInformation");
        echo $userData['pass'];
        exit();
    }else if ($Check == true){
        session_start();
        $_SESSION['userId']=$userData['id'];
        $_SESSION['username']=$userData['pseudo'];
        $_SESSION['nom']=$userData['email'];
        $_SESSION['prenom']=$userData['date_intscription'];
        header("Location: ../controleur/accueil.php?login=Success");
    }




}
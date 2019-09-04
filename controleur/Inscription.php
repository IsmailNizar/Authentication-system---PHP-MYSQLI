<?php
require('../modele/inscriptionModele.php');

require('../vue/inscriptionView.php');
if (isset($_POST['submit'])){
    //Verifie si le mot de passe est correct
    if($_POST['pwd'] != $_POST['pwd_repeat']){
        header("Location: Inscription.php?error=verifieMotdepasse");
        exit();
    }//Verifie si l'email est disponnible
    else{
        $email =getemail();
        if (in_array($_POST['email'],$email)){
            header("Location: Inscription.php?error=emailexiste");
            exist();
        }//Verifie si le pseudo est disponnible
        else{
            $pseudo =getpseudo();
            if (in_array($_POST['username'],$pseudo)){
                header("Location: Inscription.php?error=pseudoexiste");
                exist(); 
            }//Inserer le nouveau utilisateur au BD
            else {
                insertNewUser($_POST['username'], $_POST['pwd'], $_POST['email']);
                header("Location: Inscription.php?SignUp=Success");
            }
        }
    }
    
}
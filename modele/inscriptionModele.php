<?php

// Fonction qui retourne liste des pseudos disponnible au BD
function getpseudo()
{
    $db = dbConnect();
    $pseudo = $db->query('SELECT pseudo FROM membres');
    while($row = $pseudo->fetch()){
        $post[]=$row["pseudo"];
       }   
       return $post;
}

// Fonction qui retourne liste des emails disponnible au BD
function getemail()
{
    $db = dbConnect();
    $email = $db->query('SELECT email FROM membres');
    while($row = $email->fetch()){
     $post[]=$row["email"];
    }   
    return $post;
}

// Fonction qui insert un nouveau utilisateur au BD
function insertNewUser($pseudo, $pwd, $email){
    $Hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
    $db = dbConnect();
    $db->query("INSERT INTO membres (pseudo , pass , email , date_inscription) VALUES ('$pseudo','$Hashedpwd','$email',CURRENT_TIMESTAMP)");
}

// Fonction qui verifie s'il y a un erreur de données saisie 
function verifData()
{
    if (isset($_GET['error'])){
        if($_GET["error"]=="verifieMotdepasse"){
            echo('<p style="color:red">Veuillez verifié le mot de passe saisie !</p> ');
        }elseif ($_GET["error"]=="emailexiste"){
            echo("<p style='color:red'>L'email saisie existe déja !</p> ");
        }elseif ($_GET["error"]=="pseudoexiste"){
            echo("<p style='color:red'>Le pseudo saisie existe déja !</p> ");
        }
    }else if (isset($_GET['SignUp'])){
        if($_GET["SignUp"]=="Success"){
            echo('<p style="color:green">Votre compte a bien été crée </p> ');
        }
    }
}

// Nouvelle fonction qui nous permet d'éviter de répéter du code
function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=tpespacemembre;charset=utf8', 'root', '');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}

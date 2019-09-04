<?php

// Fonction qui retourne tous les données d'un utilisateur s'il existe au BD
function getData($pseudo)
{
    $db = dbConnect();
    $pseudo = $db->query("SELECT * FROM membres WHERE pseudo='$pseudo'");
    while($row = $pseudo->fetch()){
        $post["id"]=$row["id"];
        $post["pseudo"]=$row["pseudo"];
        $post["email"]=$row["email"];
        $post["pass"]=$row["pass"];
        $post["date_inscription"]=$row["date_inscription"];
       }   
       return $post;
}

// Fonction qui retourne tous les données d'un utilisateur s'il existe au BD
/*function getData($pseudo,$password)
{
    $db = dbConnect();
    $pseudo = $db->query("SELECT * FROM membres WHERE pseudo='$pseudo'");
    if($row = $pseudo->fetch()){
        $pwdCheck = password_verify($password,$row['pass']);
        if ($pwdCheck == false){   
            return true;
        }else{
            return false;
        }
    }
}*/



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

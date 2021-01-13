<?php

function connect (){
    try
{
$bdd = new PDO('mysql:host=localhost;dbname=mydb', 'root', 'root');
}
    catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
 return $bdd;   
}
?>
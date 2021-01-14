<?php

function connect (){
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=newbdd2021', 'naim', 'grenoble38');
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
    return $bdd;   
}
?>
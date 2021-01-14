<?php
require_once "Classe/Bdd.php";
require_once "Classe/Article.php";



class Catalogue {


    private $listeArticle = array();

    public function __construct(){

        $bdd = connect();
        $req = $bdd->query("SELECT * FROM products");
        //var_dump($req->fetchAll());
        while ($data=$req->fetch()) {
            $article = new Article($data['id'],$data['name'],$data['description'],$data['price'],$data['weight'],$data['available'],$data['image'],$data['quantity']);
            array_push($this->listeArticle,$article);
           // var_dump($data['id']);   
        }
    }
public function getListeArticle(){
    return $this->listeArticle;
}
} 


  























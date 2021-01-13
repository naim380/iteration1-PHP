<?php

function displayArticle(Article $article){
echo $article->getName();
}
function displayListeArticle(Catalogue $listeArticle){

foreach ($listeArticle->getListeArticle() as $article)
    {
        displayArticle($article);
    }
}
?>
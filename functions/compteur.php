<?php
// Fonction qui va ajouter les vues dans un fichier compteur
function ajouter_vue(){

     $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'compteur';

    $compteur = 1;
    if(file_exists($fichier)){
        //Si le fichier existe on incremente
        $compteur = (int)file_get_contents($fichier);
        $compteur++;
       
    }
    file_put_contents($fichier, $compteur);
}

// Fonction qui va afficher les vues en chaine de caractère sur le site web
function nombre_vues(): string {

    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'compteur';
     return file_get_contents($fichier);
}

?>
<?php

function returnTrue(){
    return true;
}

function returnString($chaine){
    return $chaine;
}

function returnString2($chaine1, $chaine2){
    return $chaine1 . $chaine2;
}

function returnOrdre($nombre1,$nombre2){
    if($nombre1 > $nombre2){
        return "nombre1 > nombre2";
    }
    elseif($nombre1 < $nombre2){
        return "nombre2 > nombre1";
    }
    else{
        return "nombre1 = nombre2";
    }
}

function returnConcat($chaine,$chifre){
    return strval($chifre) . $chaine;
}

function salut($nom,$prenom,$age){
    return "Bonjour " . $nom . " " . $prenom . " tu as " . $age . " ans";
}

function descript($age,$genre){
    if($genre === "homme"){
        $phrase = "Vous etes un homme et vous";
    }
    elseif($genre === "femme"){
        $phrase = "Vous etes une femme et vous";
    }
    else{
        $phrase = "Vous n'avez pas de genre et vous";
    }
    if($age >= 18){
        $phrase = $phrase . " etes majeur";
    }
    elseif($age < 18){
        $phrase = $phrase . " etes mineur";
    }
    else{
        $phrase = $phrase . " n'avez pas d age";
    }
    return $phrase;
}

function summ($nb1 = 5,$nb2 = 6,$nb3 = 9){
    return $nb1 + $nb2 + $nb3;
}

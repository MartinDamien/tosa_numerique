<?php

function ditBonjour()
{
    echo "Bonjour";
}

function listeEtudiant()
{
    $result = getEtudiants();
    require('views/viewAllEtudiant.php');
}

function listeUnEtudiant($id)
{
    $result = getUnEtudiant($id);
    require('views/viewOneEtudiant.php');
}

function afficheAddEtudiant()
{
    require('views/viewAddEtudiant.php');
}

require_once('models/modelEtudiant.php');
function ajoutEtudiant()
{
    addEtudiant($_POST);
}

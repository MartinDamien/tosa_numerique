<?php
require_once('model.php');

function getEtudiants()
{
    $bddPDO = connexionBDD();
    $requete = "SELECT * FROM student ORDER BY id ASC";
    $result = $bddPDO->query($requete);
    $data = $result->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

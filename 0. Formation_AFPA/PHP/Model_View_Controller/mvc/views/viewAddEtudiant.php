<?php
require('header.html');
?>

<main>
    <form action="<?= _URL ?>controllerEtudiant/ajoutEtudiant" method="POST">
        <input type="text" name="nom" placeholder="nom" id="">
        <input type="text" name="prenom" placeholder="prenom" id="">
        <input type="text" name="email" placeholder="email" id="">
        <input type="text" name="password" placeholder="password" id="">
        <button type="submit">envoyer</button>
    </form>
</main>
<?php
require('header.html');
?>
<main>
    <?php foreach ($result as $value) {?>
    <div class="card">
    <img src="../upload/<?= $value['cover'] ?>" alt="">
    <h2><?= $value['prenom'] ?> <?= $value['nom'] ?></h2>
    <a href="<?= _URL ?>Acteur/affiche1/<?= $value['id'] ?>">afficher</a>
    <a href="<?= _URL ?>Acteur/mofif/<?= $value['id'] ?>">modifier</a>
    <a href="<?= _URL ?>Acteur/suprimer/<?= $value['id'] ?>">suprimer</a>
    </div>
    <?php } ?>
</main>
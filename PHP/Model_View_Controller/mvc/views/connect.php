<?php
require('header.html');
?>
<main>
    <form action="<?= _URL ?>controllerEtudiant/afficheconnexion" method="post">
        <input type="text" name="email" placeholder="email" id="">
        <input type="text" name="password" placeholder="password" id="">
        <input type="button" name="loginBtn" value="se Connecter">
    </form>
</main>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>viewAllEtudiant</title>
</head>

<body>
    <ul>
        <?php
        foreach ($result as $value) {?>
        <li><?= $value['nom']?><a href="controlllers/afficheModifEtudiant/<?= $value['id'] ?>"> Modif</a></li><!-- echo "<li>" . $result['nom'] . "-" . $result['prenom'] . "-" . $result['email'] . "</li>"; -->
        <?php } ?>
    </ul>
</body>

</html>
<?php
require 'utilisateur.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>

<body>
    <form action="record.php" method="POST">

        <label for="nom">nom :</label>
        <input type="text" name="nom" placeholder="nom" id=""><br>

        <label for="age">age :</label>
        <input type="tel" name="age" placeholder="age" id=""><br>

        <select name="genre" id="">
            <option value="masculin">Masculin</option>
            <option value="feminin">Feminin</option>
        </select><br>

        <button method="submit">Enregistrer</button>
    </form>
</body>

</html>
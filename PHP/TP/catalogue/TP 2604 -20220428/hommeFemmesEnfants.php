<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
   
</style>
<body>
<?php
    $Produits = [ 
                            { "hommes":[
                                { "nom_produit":"short homme"     , "prix":26.00, "photo": "https://media.auchan.fr/9d0c80b4-42c1-4b5a-ad9a-3261cdbbe43e_256x256/B2CD/" },
                                { "nom_produit":"pantalon homme" , "prix":28.00, "photo": "https://media.auchan.fr/baaaf199-d8e7-4e3c-af5b-a54ea7e50e68_256x256/B2CD/" },
                                { "nom_produit":"t-shirt homme"  , "prix":35.00, "photo": "https://media.auchan.fr/c017a0f8-057e-4e31-ae1b-e703da5554af_256x256/B2CD/" },
                                { "nom_produit":"chaussurehomme", "prix":15.00, "photo": "https://s.cdnshm.com/catalog/fr/t/1026186811/chaussures-tommy-hilfiger-court-cupsole-suede-homme-44.jpg" }
                              ]},
                            { "femmes":[
                                { "nom_produit":"robe femme" , "prix":25.00, "photo": "https://www.terrebleue.com/files/cache/square_two/files/221-3120-31-101-c-60098357ea22f.jpeg" },
                                { "nom_produit":"pantalon femme" , "prix":28.00, "photo": "https://media.auchan.fr/9a63b934-0ac2-46ce-8070-5c47a582302b_256x256/B2CD/" },
                                { "nom_produit":"t-shirt femme"  , "prix":35.00, "photo": "https://media.auchan.fr/1f038c7a-d25b-475d-b8c5-26ec7c89a84f_256x256/B2CD/" },
                                { "nom_produit":"chaussure femme", "prix":15.00, "photo": "https://www.terrebleue.com/files/cache/square_two/files/421-3305-00-856-b-614d9ffc186b1.jpg" }
                              ]},
                              { "enfants":[
                                { "nom_produit":"robe enfant" , "prix":25.00, "photo": "https://cdn.childrensalon.com/media/catalog/product/cache/0/small_image/256x256/9df78eab33525d08d6e5fb8d27136e95/m/o/moncler-enfant-girls-pink-polo-dress-446996-d40ca536603f528a9ff5c09cb9618b1b96bfd8fd.jpg" },
                                { "nom_produit":"pantalon enfant" , "prix":28.00, "photo": "https://cdn.childrensalon.com/media/catalog/product/cache/0/small_image/256x256/9df78eab33525d08d6e5fb8d27136e95/m/o/moncler-enfant-black-cotton-jersey-joggers-350527-62004e1e127f4dd1dd6ec5685179f95e4032e041.jpg" },
                                { "nom_produit":"t-shirt enfant"  , "prix":35.00, "photo": "https://cdn.childrensalon.com/media/catalog/product/cache/0/small_image/256x256/9df78eab33525d08d6e5fb8d27136e95/m/o/moncler-enfant-boys-blue-logo-t-shirt-446856-b493c63e596844942b6e383f8fe464a556242a61.jpg" },
                                { "nom_produit":"chaussure enfant", "prix":15.00, "photo": "data:image/jpeg;base64,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" }
                              ]}  
                        ];

// Paul c decrit ici ce que je raconte 

      // modifier le tableau ci-dessous pour qu'il soit compatible PHP (les images sont celles que quentin à renseigné dans son exemple)
      // créer la même application qu'en javascript
      // Attention il faudra créer 3 pages , ici le seul évènement est l'évènement submit ou l'ancre <a href 
      // les liens sont déjà établis en HTML 
      // mettre en forme. 

      // Le seul événement que HTML connait c'est submit du <form> et anchor <a 

      // Les trois programmes PHP auront le même tableau donc afficher les produits correspondant aux ancres

    //   Concernant votre présence demain 
    //   je n'ai pas encore la réponse de Guillaume je devrais pouvoir passer en mode administrateur demain ou après-demain

?>

</body>
<nav>
    <a href="femmes.php">Femmes</a>
    <a href="hommes.php">Hommes</a>
    <a href="enfants.php">Enfants</a>
</nav>

</html>

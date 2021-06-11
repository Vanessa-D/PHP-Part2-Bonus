<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Bonus</title>
</head>
<body>
    <p>
        Créer un tableau contenant les 12 mois de l'année et les afficher dans un "select" : 
    </p>
    <div class="col-3 mx-auto mt-5 text-center">
        <!-- Tableau PHP contenant les mois -->
        <?php
            $months = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'];
        ?>

        <form method="post" action="#">
            <select name="months" id="months">
                <!-- Boucle for : tant qu'il y a des éléments à parcourir dans le tableau -->
                <?php for($i = 0; $i < count($months); $i++){ ?>
                    <!-- ... On ajoute une option mois au select  -->
                    <option value="<?php $months[$i] ?>">
                        <?= $months[$i]. ' '; ?>
                    </option>
                <?php } ?>
            </select>
        </form>

         <!-- Boucle foreach : pour chaque élément -->
            <select name="months" id="months">
                <?php foreach ($months as $value){ ?>
                    <option value="<?php $value ?>">
                        <?= $value. ' '; ?>
                    </option>   
                <?php } ?>
            </select>
    </div>
</body>
</html>
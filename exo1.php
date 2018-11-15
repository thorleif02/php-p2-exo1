<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>exo1P2</title>
    </head>
    <body>
        <?php
        $age = 27;
        if ($age > 0) {
            if ($age >= 18) {
                echo "vous êtes majeur !";
            } else {
                echo "vous êtes mineur !";
            }
        } else {
            echo "Vous êtes pas né(e) !";
        }
        ?>
    </body>
</html>



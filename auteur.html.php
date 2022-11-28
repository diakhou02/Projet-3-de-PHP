<?php
    require_once("model/auteur.model.php");
    $auteurs=find_all_auteurs();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUTEUR</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div id="conteneur">
        <div class="rayon">
            <h2> .LISTE DES AUTEURS. </h2>
            <table>
                <tr>
                    <td>ID</td>
                    <td>NOM</td>
                    <td>PRENOM</td>
                    <td>PROFESSION</td>
                </tr>

                <?php foreach($auteurs as $value): ?>
                    <tr>
                        <td><?php echo($value['id']) ?></td> 
                        <td><?php echo ($value['nom'])?></td>
                        <td><?php echo ($value['prenom'])?></td>
                        <td><?php echo ($value['profession'])?></td>
                    </tr>
                <?php endforeach ?>

            </table>

        </div>
    </div>
    

</body>
</html>
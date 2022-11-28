<?php
    require_once("model/rayon.model.php");
    $rayons=find_all_rayons();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAYON</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div id="conteneur">
        <div class="rayon">
            <h2> .LISTE DES RAYONS. </h2>
            <table>
                <tr>
                    <td>ID</td>
                    <td>CATEGORIE</td>
                </tr>

                <?php foreach($rayons as $value): ?>
                    <tr>
                        <td><?php echo($value['id']) ?></td> 
                        <td><?php echo ($value['categorie'])?></td>
                    </tr>
                <?php endforeach ?>

            </table>

        </div>
    </div>
    

</body>
</html>
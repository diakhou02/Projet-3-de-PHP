<?php
    require_once("model/ouvrage.model.php");
    $ouvrages=find_all_ouvrage();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OUVRAGE</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>

    <div id="conteneur">
        <div class="ouvrage">
            <h2> .LISTE DES OUVRAGES. </h2>
            <table>
                <tr>
                    <td>ID</td>
                    <td>CODE</td>
                    <td>TITRE</td>
                    <td>DATE D'ÉDITION</td>
                </tr>

                <?php foreach($ouvrages as $value): ?>
                    <tr>
                        <td><?php echo($value['id']) ?></td> 
                        <td><?php echo ($value['code'])?></td>
                        <td><?php echo ($value['titre'])?></td>
                        <td><?php echo ($value['date'])?></td>
                    </tr>
                <?php endforeach ?>

            </table>

        </div>
    </div>
    
    
</body>
</html>
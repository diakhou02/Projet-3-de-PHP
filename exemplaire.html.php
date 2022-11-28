<?php
    require_once("model/exemplaire.model.php");
    $exemplaires=find_all_exemplaires();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXEMPLAIRE</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div id="conteneur">
        <div class="rayon">
            <h2> .LISTE DES EXEMPLAIRE. </h2>
            <table>
                <tr>
                    <td>ID</td>
                    <td>CODE</td>
                    <td>DATE D'ENREGISTREMENT</td>
                </tr>

                <?php foreach($exemplaires as $value): ?>
                    <tr>
                        <td><?php echo($value['id']) ?></td> 
                        <td><?php echo ($value['code'])?></td>
                        <td><?php echo ($value['date'])?></td>
                    </tr>
                <?php endforeach ?>

            </table>

        </div>
    </div>
    

</body>
</html>
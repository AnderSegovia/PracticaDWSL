<?php
require '../../db/db.php';
require '../../constantes.php';
$query = "SELECT * FROM tbl_especies";
$css= CDN_BS_CSS;
$js=CDN_BS_JS;
$ejecutar = $conn->prepare($query);
$ejecutar->execute();
$data = $ejecutar->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?= $css?>
</head>
<body>
    <h1>Listado </h1>
    <div class="card">
        <div class="card-header bg-primary">

        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>Fecha creaciion</th>
                    <th>Acciones</th>
                    
                </thead>
                <tbody>
                    <?php foreach($data as $especies){ ?>
                    <tr>
                        <td><?= $especies->nombre?></td>
                        <td><?= $especies->estado?></td>
                        <td><?= $especies->fecha?></td>
                        <td><?= $especies->nombre?></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</body>
<?= $js?>

</html>
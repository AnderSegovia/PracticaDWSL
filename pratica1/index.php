<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Un numero</label>
        <input type="number" name="numero" id="">
        <button type="submit">Enviar</button>
    </form>
    <?php
    $numero;
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $numero=$_POST['numero'];
        for($i=0 ; $i<=10000 ; $i++){
            echo $numero*$i ."<br>";
        }
    }
    ?>
</body>
</html>
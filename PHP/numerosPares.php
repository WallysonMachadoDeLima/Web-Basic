<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="numerosPares.php" method="POST" nome="cadastro">

        <div>
            <label for="numero">Inicio do intervalo</label>
            <input type="text" name="txtNumero1" placeholder="1" aria-describedby="numero">
        </div><br>
        <div class="mb-3">
            <label for="numero">FIm do intervalo</label>
            <input type="text" name="txtNumero2" placeholder="10" aria-describedby="numero">
        </div>
        <div>
            <button type="submit" name="btnEnviar" class="btn btn-primary">Calcular</button> <br>
        </div>

    </form>
    <?php

    if (isset($_POST["txtNumero1"]) and isset($_POST['txtNumero2'])) {
        $numero1 = $_POST['txtNumero1'];
        $numero2 = $_POST['txtNumero2'];
        $contador = 0;

        for ($i = $numero1; $i <= $numero2; $i++) {

            if ($i % 2 == 0) {
                $contador++;
            }
        }
        echo " Essa é a contidade de numeros pares $contador";
    }
    ?>
</body>

</html>
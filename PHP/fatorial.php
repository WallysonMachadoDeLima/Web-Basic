<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="fatorial.php" method="POST" nome="cadastro">
            <div>
                <label for="numero" >Numero</label>
                <input type="text" name="txtNumero" aria-describedby="numero">
            </div>
            <button type="submit" name="btnEnviar" class="btn btn-primary">Calcular</button> <br>
        </form>
        <?php
        $resultado = 1;
        if (isset($_POST["btnEnviar"])) {
            $numero = $_POST['txtNumero'];

            for ($i = $numero; $i >= 1; $i--) {
                $resultado = $resultado * $i;
            }

            echo "O fatorial de $numero é: $resultado";
        }
        ?>
</body>

</html>
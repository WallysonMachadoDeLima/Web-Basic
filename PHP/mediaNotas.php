<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="mediaNotas.php" method="POST" class="row g-3 needs-validation">
                    <div>
                        <label for="nome">Nome do Aluno</label>
                        <input type="text" name="txtNome" required="">
                    </div>
                    <div>
                        <label for="numero1">Nota 1</label>
                        <input type="text" name="txtNota1" required="">
                    </div>
                    <div>
                        <label for="numero2">Nota 2</label>
                        <input type="text" name="txtNota2" required="">
                    </div>
                    <div>
                        <label for="numero3">Nota 3</label>
                        <input type="text" name="txtNota3" required="">
                    </div>
                    <div>
                        <label for="numero4">Nota 4</label>
                        <input type="text" name="txtNota4" required="">
                    </div>
                    <div>
                        <button class="btn btn-primary" name="btnEnviar" type="submit">Submit form</button>
                    </div>
        </form>
        <?php
        if (isset($_POST["btnEnviar"])) {

            $nome = $_POST['txtNome'];
            $nota1 = $_POST['txtNota1'];
            $nota2 = $_POST['txtNota2'];
            $nota3 = $_POST['txtNota3'];
            $nota4 = $_POST['txtNota4'];

            $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

            if ($media >= 60) {
                echo "O Aluno $nome foi Aprovado! $media";
            }
            if ($media < 60) {
                echo "O Aluno $nome foi Reprovado! $media";
            }
        }
        ?>
</body>

</html>
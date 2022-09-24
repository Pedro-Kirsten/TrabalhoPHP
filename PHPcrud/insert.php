<?php
require('conexaoMysql.php');

$descricao = $_POST['descricao'];
$marca = $_POST['marca'];
$estoque = $_POST['estoque'];
$preco = $_POST['preco'];

$insert = mysqli_query($conexaoMysql, "INSERT INTO produtos (id, descricao, marca, estoque, preco) 
    VALUES (NULL, '$descricao', '$marca', '$estoque', '$preco')");

mysqli_close($conexaoMysql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTA DE PRODUTOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>

    <body>
        <?php if ($insert == true) : ?>
            <div class="alert alert-dark" role="alert">
                Produto adicionado ao estoque! <a href="select.php" class="alert-link">Acessar estoque</a>.
            </div>

        <?php endif; ?>
    </body>
</body>

</html>
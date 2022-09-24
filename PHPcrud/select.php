<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUTOS CADASTRADOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
    <div class="table-responsive">
        <table class="table table-sm table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">MARCA</th>
                <th scope="col">DESCRIÇÃO</th>
                <th scope="col">PREÇO</th>
                <th scope="col">ESTOQUE</th>
            </tr>
            <?php
            require('conexaoMysql.php');
            $busca = mysqli_query($conexaoMysql, 'SELECT * FROM produtos ORDER BY id ASC');
            ?>

            <?php while ($produto = mysqli_fetch_assoc($busca)) : ?>
                <tr>
                    <td><?= $produto['id'] ?></td>
                    <td><?= $produto['marca'] ?></td>
                    <td><?= $produto['descricao'] ?></td>
                    <td><?= $produto['preco'] ?></td>
                    <td><?= $produto['estoque'] ?></td>
 
                    <td> <a href="edicao.php?id=<?= $produto['id'] ?>" class="list-group-item">Editar</a></td>
                    <td> <a href="excluir.php?id=<?= $produto['id'] ?>" class="list-group-item">Remover</a></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
    <a href="cadastrar.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Novo Produto</a>
</body>

</html>
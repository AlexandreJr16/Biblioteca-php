<?php
    include "conexao.php";

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "SELECT * FROM livros WHERE id = $id";
        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($result);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php if($row): ?>
            <h2>Detalhes do Livro</h2>
            <p><strong>ID:</strong> <?php echo $row['id']; ?></p>
            <p><strong>Título:</strong> <?php echo $row['titulo']; ?></p>
            <p><strong>Autor:</strong> <?php echo $row['autor']; ?></p>
            <p><strong>Ano de publicação:</strong> <?php echo $row['ano']; ?></p>
            <p><strong>Gênero:</strong> <?php echo $row['genero']; ?></p>
            <p><strong>Editora:</strong> <?php echo $row['editora']; ?></p>

        <a class="btn btn-secondary" href="index.php">Voltar</a>

        <?php else: ?>
            <p>Livro não encontrado.</p>
        <?php endif; ?>
    </div>
</body>
</html>
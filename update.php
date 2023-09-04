<?php
include "conexao.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM livros WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);
}


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $anoPublicacao = $_POST['ano'];
    $genero = $_POST['genero'];
    $editora = $_POST['editora'];
    $sql = "UPDATE livros SET titulo='$titulo', autor='$autor', ano='$anoPublicacao', genero='$genero', editora='$editora' WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("Location: index.php");
        exit();
    } else{
        echo "Erro ao editar o livro.";
        die("Erro ao gravar: " . mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel=" stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="
        sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="
        sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="
        sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>


    <div class="container">
        <h2>Add new book</h2>
        <form method="POST" action="">
            <form method="POST" action="">
                <div class="mb-3">
                    <label class="form-label" for="titulo">Título:</label>
                    <input class="form-control" type="text" name="titulo" value="<?php echo $row['titulo']; ?>"
                        maxlength="40" required><br>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="autor">Autor:</label>
                    <input class="form-control" type="text" name="autor" value="<?php echo $row['autor']; ?>"
                        maxlength="30" required><br>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="ano">Ano de Publicação:</label>
                    <input class="form-control" type="number" name="ano" value="<?php echo $row['ano']; ?>"
                        required><br>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="editora">Editora:</label>
                    <input class="form-control" type="text" name="editora" value="<?php echo $row['editora']; ?>"
                        maxlength="30" required><br>
                </div>

                <label class="form-label" for="genero">Gênero:</label>
                <select class="form-select" id="genero" name="genero" required>
                    <option value="<?php echo $row['genero']; ?>" selected><?php echo $row['genero']; ?></option>
                    <option value="Programação">Programação</option>
                    <option value="Design">Design</option>
                    <option value="Política">Política</option>
                    <option value="Religião">Religião</option>
                    <option value="Filhos">Criação de Filhos</option>
                    <option value="Ficcao">Ficção Científica</option>
                    <option value="Outros">Outros</option>
                </select><br />

                <input class="btn btn-primary" type="submit" value="Adicionar Livro">
                <a class="btn btn-secondary" href="index.php">Voltar</a>
            </form>
        </form>
    </div>

</body>

</html>

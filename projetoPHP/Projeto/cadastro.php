
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Biblioteca Online</title>
    <link rel="stylesheet" href="./stylecadastro.css"> 
</head>
<?php
    $page = isset($_GET['page']) ? $_GET['page'] : '';
?>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="cadastro.php">Cadastro</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="cadastro">
            <div class="sidebar">
                <ul>
                    <li><a href="cadastro.php?page=categoria" class="nav-link">Cadastrar Categoria</a></li>
                    <li><a href="#cadastro-autor" class="nav-link">Cadastrar Autor</a></li>
                    <li><a href="#cadastro-livro" class="nav-link">Cadastrar Livro</a></li>
                    
                </ul>
            </div>
            <div class="content">
                <article id="cadastro-livro" class="form-section">
                    <h3>Cadastrar Livro</h3>
                    <form id="form-cadastro-livro">
                        <label for="titulo">Título:</label>
                        <input type="text" id="titulo" name="titulo" required>
                        <label for="autor">Autor:</label>
                        <input type="text" id="autor" name="autor" required>
                        <label for="categoria">Categoria:</label>
                        <input type="text" id="categoria" name="categoria" required>
                        <button type="submit">Cadastrar Livro</button>
                    </form>
                </article>
     
                 <?php if($page =='categoria'){
                      include 'categoria_lista.php';
                 }
                 ?>
                 <?php if($page =='cadastro_categoria_new'){
                      include 'categoria_form.php';
                 }
                 ?>
                
                 
              

                <article id="cadastro-autor" class="form-section">
                    <h3>Cadastrar Autor</h3>
                    <form id="form-cadastro-autor">
                        <label for="nome-autor">Nome:</label>
                        <input type="text" id="nome-autor" name="nome-autor" required>
                        <button type="submit">Cadastrar Autor</button>
                    </form>
                </article>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Biblioteca Online</p>
    </footer>
 
</html>


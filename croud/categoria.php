<?php
include 'config.php';

// Ler categorias
$stmt = $pdo->query("SELECT * FROM usuarios");
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>LudoFashion - Categorias</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    
   

</head>


<header>
    <h1>
        <p>


        <div>
            <a href="../views/index.html">LudoFashion </a>
            </p>
    </h1>
    <form action="" id="form-buscar">

        <input type="search" name="buscar" id="buscar" placeholder="Buscar...">
        <button type="submit" id="btn-buscar"><img src=" ../imgs/search_24dp_FILL0_wght400_GRAD0_opsz24.png " alt=""
                width="30px"></button>


    </form>
    <p>
        <a href="../views/cadastro.html" class="icon-link">
            <img src="../imgs/person.png" alt="" width="40px">
            Cadastre-se
    </p>

    <p>
        </a>
        <a href="../views/duvidas.html" class="icon-link">
            <img src="../imgs/help_24dp_FILL0_wght400_GRAD0_opsz24.png" alt="" width="40px">
            Dúvidas

    </p>
    </a>

    <div class="menu">
        <div class="btn-fechar">
           <img src="../imgs/close_24dp_FFFFFF_FILL0_wght400_GRAD0_opsz24 (1).png" alt="" width="20px">
        </div>
        <div>
            <ul>
                <li><a href="#">Cadastre-se</a></li>
                <li><a href="#">Duvidas</a></li>
            </ul>
        <div>
    
    </div>

</header>

<body>

   
    
    <nav>

        <a href="">Catalogo</a>
        <a href="../views/sobre.html"> Sobre nós</a>

    </nav>

    <div id="categoria">
        <img id="um" src="../imgs/barra-de-menu preto.png" alt="" width="50px">
        <h1>Categoria</h1>
    </div>
    <div id="back">
        <section class="sara">
            <?php foreach ($usuarios as $usuarios): ?>
                <h1 id="margin">
                    <?php echo htmlspecialchars($usuarios['nome']); ?>
                    <a href="update.php?id=<?php echo $usuarios['id']; ?>">
                        <img id="dois" src="../imgs/relatorio.png" width="30px" height="30px" alt="Editar">
                    </a>
                    <a href="delete.php?id=<?php echo $usuarios['id']; ?>" onclick="return confirm('Tem certeza que deseja deletar?');">
                        <img src="../imgs/lixeira.png" width="30px" alt="Deletar">
                    </a>
                </h1>
            <?php endforeach; ?>
        </section>
        <div id="add">
            <a href="create.php">
                <h1><img src="../imgs/botao-adicionar.png" alt="" width="30px"> Adicionar categoria</h1>
            </a>
        </div>
    </div>
</body>
</html>
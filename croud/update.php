<?php
include 'config.php';

if (!isset($_GET['id'])) {
    die('ID não fornecido.');
}

$id = $_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
$stmt->execute(['id' => $id]);
$usuarios = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$usuarios) {
    die('Categoria não encontrada.');
}

    $nome = $_POST['nome'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $stmt = $pdo->prepare("UPDATE usuarios SET nome = :nome WHERE id = :id");
    $stmt->execute(['nome' => $nome, 'id' => $id]);
    
    header('Location: categoria.php');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Categoria</title>
</head>
<body>
    <h1>Editar Categoria</h1>
    <form method="POST">
        <input type="text" name="nome" value="<?php echo htmlspecialchars($usuarios['nome']); ?>" required>
        <button type="submit">Atualizar</button>
    </form>
    <a href="categoria.php">Voltar</a>
</body>
</html>
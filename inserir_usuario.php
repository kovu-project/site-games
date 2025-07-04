<?php
session_start();
if (!isset($_SESSION['nome'])) {
  header("Location: login.php");
  exit;
}

require_once 'includes/header.php';
require_once 'includes/menu.php';
require_once 'includes/conexao.php';

// Se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $login = $_POST['login'];
  $senha = $_POST['senha'];

  // Criptografar senha:
  $senha = password_hash($senha, PASSWORD_DEFAULT);

  // Upload de imagem
  $nome_arquivo = '';
if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
  $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
  $nome_arquivo = uniqid() . "." . $extensao;
  move_uploaded_file($_FILES['foto']['tmp_name'], "uploads/" . $nome_arquivo);
}

$sql = "INSERT INTO usuarios (nome, email, login, senha, foto) 
        VALUES ('$nome', '$email', '$login', '$senha', '$nome_arquivo')";

  if ($conn->query($sql) === TRUE) {
    header("Location: usuarios.php");
    exit;
  } else {
    echo "Erro ao inserir: " . $conn->error;
  }
}
?>

<main>
  <h2>Inserir Novo Usuário</h2>

  <form method="post" enctype="multipart/form-data">
    <label>Nome:</label><br>
    <input type="text" name="nome" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Login:</label><br>
    <input type="text" name="login" required><br><br>

    <label>Senha:</label><br>
    <input type="password" name="senha" required><br><br>

    <label>Foto:</label><br>
    <input type="file" name="foto"><br><br>

    <button type="submit">Salvar</button>
  </form>

  <br>
  <a href="usuarios.php">🔙 Voltar</a>
</main>

<?php
require_once 'includes/footer.php';
?>

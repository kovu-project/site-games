<?php
session_start();
if (!isset($_SESSION['nome'])) {
  header("Location: login.php");
  exit;
}

require_once 'includes/header.php';
require_once 'includes/menu.php';
require_once 'includes/conexao.php';

// Verifica se foi passado um ID
if (!isset($_GET['id'])) {
  echo "<p>ID do usuário não informado.</p>";
  exit;
}

$id = $_GET['id'];

// Busca o usuário do banco
$sql = "SELECT * FROM usuarios WHERE id = $id";
$res = $conn->query($sql);

if ($res->num_rows != 1) {
  echo "<p>Usuário não encontrado.</p>";
  exit;
}

$usuario = $res->fetch_assoc();
$nome_arquivo = $usuario['foto']; // Valor atual da imagem

// Se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $login = $_POST['login'];
  $senha = $_POST['senha'];

  // Se o campo senha não estiver vazio, atualiza com hash
  if (!empty($senha)) {
    $senha = password_hash($senha, PASSWORD_DEFAULT);
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
        $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
        $nome_arquivo = uniqid() . "." . $extensao;
        move_uploaded_file($_FILES['foto']['tmp_name'], "uploads/" . $nome_arquivo);
    }

    $sqlUpdate = "UPDATE usuarios 
                 SET nome='$nome', email='$email', login='$login', senha='$senha', foto='$nome_arquivo' 
                 WHERE id = $id";
  } else {
    $sqlUpdate = "UPDATE usuarios 
              SET nome='$nome', email='$email', login='$login', foto='$nome_arquivo' 
              WHERE id = $id";
  }

  if ($conn->query($sqlUpdate) === TRUE) {
    header("Location: usuarios.php");
    exit;
  } else {
    echo "Erro ao atualizar: " . $conn->error;
  }
}
?>

<main>
  <h2>Editar Usuário</h2>

  <form method="post" enctype="multipart/form-data">
    <label>Nome:</label><br>
    <input type="text" name="nome" value="<?php echo $usuario['nome']; ?>" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="<?php echo $usuario['email']; ?>" required><br><br>

    <label>Login:</label><br>
    <input type="text" name="login" value="<?php echo $usuario['login']; ?>" required><br><br>

    <label>Senha (deixe em branco para não alterar):</label><br>
    <input type="password" name="senha"><br><br>

    <label>Foto atual:</label><br>
    <?php if (!empty($usuario['foto'])): ?>
    <img src="uploads/<?php echo $usuario['foto']; ?>" width="100"><br>
    <?php else: ?>
    Nenhuma imagem<br>
    <?php endif; ?>
    <br>

    <label>Nova Foto (opcional):</label><br>
    <input type="file" name="foto"><br><br>

    <button type="submit">Salvar</button>

  </form>

  <br>
  <a href="usuarios.php">🔙 Voltar</a>
</main>

<?php
require_once 'includes/footer.php';
?>

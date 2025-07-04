<?php
session_start();
if (!isset($_SESSION['nome'])) {
  header("Location: login.php");
  exit;
}

require_once 'includes/header.php';
require_once 'includes/menu.php';
require_once 'includes/conexao.php';
?>

<main>
  <h2>Usuários Cadastrados</h2>
  <a href="inserir_usuario.php">➕ Inserir Novo Usuário</a><br><br>

  <table border="1" cellpadding="10">
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Email</th>
      <th>Login</th>
      <th>Ações</th>
      <th>Foto</th>
    </tr>

    <?php
    $sql = "SELECT * FROM usuarios";
    $res = $conn->query($sql);

    while ($row = $res->fetch_assoc()) {
  echo "<tr>";
  echo "<td>{$row['id']}</td>";
  echo "<td>{$row['nome']}</td>";
  echo "<td>{$row['email']}</td>";
  echo "<td>{$row['login']}</td>";
  
  echo "<td>";
  if (!empty($row['foto'])) {
    echo "<img src='uploads/{$row['foto']}' width='50'>";
  } else {
    echo "—";
  }
  echo "</td>";
  
  echo "<td>
          <a href='editar_usuario.php?id={$row['id']}'>✏️ Editar</a> | 
          <a href='deletar_usuario.php?id={$row['id']}' onclick=\"return confirm('Tem certeza que deseja excluir?')\">❌ Excluir</a>
        </td>";
  echo "</tr>";
}
    ?>
  </table>
</main>

<?php
require_once 'includes/footer.php';
?>

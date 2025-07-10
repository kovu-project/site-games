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
  <h2>Mensagens Recebidas</h2>

  <table border="1" cellpadding="10">
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Telefone</th>
      <th>Email</th>
      <th>Mensagem</th>
      <th>Data</th>
    </tr>

    <?php
    $sql = "SELECT * FROM mensagens ORDER BY data_envio DESC";
    $res = $conn->query($sql);

    while ($row = $res->fetch_assoc()) {
      echo "<tr>";
      echo "<td>{$row['id']}</td>";
      echo "<td>{$row['nome']}</td>";
      echo "<td>{$row['telefone']}</td>";
      echo "<td>{$row['email']}</td>";
      echo "<td>{$row['mensagem']}</td>";
      echo "<td>{$row['data_envio']}</td>";
      echo "</tr>";
    }
    ?>
  </table>
</main>

<?php
require_once 'includes/footer.php';
?>

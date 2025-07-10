<?php
session_start();
require_once 'includes/header.php';
require_once 'includes/menu.php';
require_once 'includes/conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nome = $_POST['nome'];
  $telefone = $_POST['telefone'];
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];

  $sql = "INSERT INTO mensagens (nome, telefone, email, mensagem)
          VALUES ('$nome', '$telefone', '$email', '$mensagem')";

  if ($conn->query($sql) === TRUE) {
    echo "<p style='color:green; text-align:center;'>Mensagem enviada com sucesso!</p>";
  } else {
    echo "<p style='color:red; text-align:center;'>Erro ao enviar: " . $conn->error . "</p>";
  }
}
?>
<main>
  <h2>Fale Conosco</h2>
  <form action="#" method="post">
    <label>Nome:</label><br>
    <input type="text" name="nome" required><br><br>

    <label>Telefone:</label><br>
    <input type="tel" name="telefone"><br><br>

    <label>E-mail:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Mensagem:</label><br>
    <textarea name="mensagem" rows="5" required></textarea><br><br>

    <button type="submit">Enviar</button>
  </form>
</main>

<?php
require_once 'includes/footer.php';
?>

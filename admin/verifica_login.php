<?php
session_start();
require_once '../includes/conexao.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE login = '$usuario' AND senha = '$senha'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
  $dados = $result->fetch_assoc();
  $_SESSION['nome'] = $dados['nome'];
  $_SESSION['email'] = $dados['email'];
  header("Location: ../admin.php");
  exit;
} else {
  echo "Login inválido!";
}
?>

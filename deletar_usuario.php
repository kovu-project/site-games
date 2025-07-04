<?php
session_start();
if (!isset($_SESSION['nome'])) {
  header("Location: login.php");
  exit;
}

require_once 'includes/conexao.php';

if (!isset($_GET['id'])) {
  echo "ID do usuário não informado.";
  exit;
}

$id = $_GET['id'];

// Deleta o usuário
$sql = "DELETE FROM usuarios WHERE id = $id";

if ($conn->query($sql) === TRUE) {
  header("Location: usuarios.php");
  exit;
} else {
  echo "Erro ao deletar: " . $conn->error;
}
?>

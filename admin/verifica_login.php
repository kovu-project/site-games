<?php
session_start();
require_once '../includes/conexao.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE login = '$usuario'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
  $dados = $result->fetch_assoc();
    
    // Verifica se a senha fornecida corresponde ao hash armazenado
    if(password_verify($senha, $dados['senha'])) {
      $_SESSION['nome'] = $dados['nome'];
      $_SESSION['email'] = $dados['email'];
      header("Location: ../admin.php"); 
      exit;
    }
} 
  echo "Login inválido!";

?>

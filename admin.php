<?php
session_start();
if (!isset($_SESSION['nome'])) {
  header("Location: login.php");
  exit;
}

require_once 'includes/header.php';
require_once 'includes/menu.php';
?>

<main>
  <h2>Área Administrativa</h2>
  <p>Bem-vindo, <?php echo $_SESSION['nome']; ?>!</p>
  <p>Email: <?php echo $_SESSION['email']; ?></p>
  <a href="logout.php">Sair</a>
</main>

<?php
require_once 'includes/footer.php';
?>

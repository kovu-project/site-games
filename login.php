<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';
?>

<main>
  <h2>Login Administrativo</h2>
  <form action="admin/verifica_login.php" method="post">
    <label>Usuário:</label><br>
    <input type="text" name="usuario" required><br><br>

    <label>Senha:</label><br>
    <input type="password" name="senha" required><br><br>

    <button type="submit">Entrar</button>
  </form>
</main>

<?php
require_once 'includes/footer.php';
?>

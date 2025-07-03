<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';
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

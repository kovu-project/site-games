<?php
session_start();
require_once 'includes/header.php';
require_once 'includes/menu.php';
?>

<main>
  <h2>Catálogo de Jogos</h2>
  <div class="jogos-lista">
    <div class="jogo">
      <img src="imagens/elden-ring.jpg" alt="Elden Ring">
    </div>
    <div class="jogo">
      <img src="imagens/hades.jpg" alt="Hades">
    </div>
    <div class="jogo">
      <img src="imagens/god-of-war.jpg" alt="God of War">
    </div>
  </div>
</main>

<?php
require_once 'includes/footer.php';
?>

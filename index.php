<?php
session_start();
require_once 'includes/header.php';
require_once 'includes/menu.php';
?>

<main>
  <!-- Banner destaque com imagem de fundo -->
  <section class="banner" style="background-image: url('imagens/banner.jpg');">
    <h2>LANÇAMENTO: Elden Ring</h2>
    <button>Ver mais</button>
  </section>

  <!-- Jogos mais vendidos -->
  <section class="destaques">
    <h3>Jogos Mais Vendidos</h3>
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
  </section>

  <!-- Categorias -->
  <section class="categorias">
    <h3>Categorias Populares</h3>
    <button>RPG</button>
    <button>Ação</button>
    <button>Indie</button>
  </section>

  <!-- Recomendado -->
  <section class="recomendado">
    <h3>Recomendado para Você</h3>
    <div class="jogos-lista">
      <div class="jogo">
        <img src="imagens/hollow-knight.jpg" alt="Hollow Knight">
      </div>
    </div>
  </section>

  <!-- Comunidade -->
  <section class="comunidade">
    <h3>Novidades da Comunidade</h3>
    <div style="color: #aaa;">• Hollow Knight está em promoção!</div>
    <div style="color: #aaa;">• God of War agora com DLC gratuito</div>
  </section>
</main>


<?php
require_once 'includes/footer.php';
?>

<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';
?>

<main>
  <!-- Banner destaque -->
  <section class="banner">
    <h2>LANÇAMENTO: Nome do Jogo</h2>
    <button>Ver mais</button>
  </section>

  <!-- Jogos mais vendidos -->
  <section class="destaques">
    <h3>Jogos Mais Vendidos</h3>
    <div class="jogos-lista">
      <!-- Simulação de jogos -->
      <div class="jogo">[Imagem Jogo 1]</div>
      <div class="jogo">[Imagem Jogo 2]</div>
      <div class="jogo">[Imagem Jogo 3]</div>
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
    <ul>
      <li>[Jogo recomendado]</li>
    </ul>
  </section>

  <!-- Comunidade -->
  <section class="comunidade">
    <h3>Novidades da Comunidade</h3>
    <div>[Entrada 1]</div>
    <div>[Entrada 2]</div>
  </section>
</main>

<?php
require_once 'includes/footer.php';
?>

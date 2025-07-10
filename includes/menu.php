<header>
  <div class="logo">[LOGO]</div>
  <nav>
  <ul>
    <li><a href="index.php">Início</a></li>
    <li><a href="jogos.php">Jogos</a></li>
    <li><a href="comunidade.php">Comunidade</a></li>
    <li><a href="contato.php">Contato</a></li>

    <?php if (isset($_SESSION['nome'])): ?>
      <li><a href="usuarios.php">Usuários</a></li>
      <li><a href="mensagens.php">Mensagens</a></li>
      <li><a href="logout.php">Sair</a></li>
    <?php endif; ?>
  </ul>
</nav>
</header>

<header class="bg-slate-200">
  <nav class="mx-auto max-w-screen-lg flex justify-between py-4 font-bold">
    <div class="text-xl text-red-600">Devs Shelf</div>
    <ul class="flex space-x-4">
      <li>
        <a href="/" class="text-red-500">
          Explorar
        </a>
      </li>
      <?php if (auth()): ?>
        <li>
          <a href="/my-books" class="hover:underline">
            Meus Livros
          </a>
        </li>
      <?php endif; ?>
    </ul>

    <ul class="flex space-x-4">
      <?php if (auth()): ?>
        <li class="hover:underline"> Olá, <?= strstr(auth()->name, ' ', true); ?></li>
        <li>
          <a href="/logout" class="hover:underline">
            Sair
          </a>
        </li>
      <?php else: ?>
        <li>
          <a href="<?= parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) == '/register' || parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) == '/' ?
                      '/login' : '/register' ?>" class="hover:underline">
            <?= parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) == '/register' || parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) == '/'
              ? 'Login' : 'Registre-se' ?>
          </a>
        </li>
      <?php endif; ?>
    </ul>
  </nav>
</header>
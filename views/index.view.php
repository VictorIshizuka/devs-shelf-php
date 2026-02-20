<form class="w-full md:w-1/2 flex space-x-2 mt-6">
  <input type="search" name="search" placeholder="Pesquisar..."
      class="border-slate-400 bg-slate-200 rounded-sm text-sm focus:outline-none px-2 py-1 w-full"/>
  <button class="font-semibold border-2 border-slate-400 rounded-sm px-2" type="submit">Buscar</button>
</form>

<section class="my-4 grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
  <?php foreach ($books as $book):  ?>

    <div class="bg-slate-200 p-4 rounded-sm shadow-sm
                flex flex-col md:flex-row gap-4">
      <div class="w-full md:w-1/3 aspect-[3/4]
                bg-red-200 flex items-center justify-center">capa</div>

      <div class="w-full md:w-2/3 flex flex-col gap-2">
        <div class="font-bold text-lg"><?= $book->title ?></div>
        <div class="text-sm">Qtd páginas:<?= $book->n_pages ?></div>
        <div class="text-sm">Author: <?= $book->author ?></div>
        <div class="text-sm line-clamp-4">
          <?= strlen($book->description) > 100 ?
            mb_substr($book->description, 0, 100, 'UTF-8') . '...' :
            mb_substr($book->description, 0, 100, 'UTF-8')
          ?>
        </div>
        <div class="border rounded-sm p-2 mt-auto">
          x y z
        </div>
      </div>
    </div>

  <?php endforeach ?>

</section>
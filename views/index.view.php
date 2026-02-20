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
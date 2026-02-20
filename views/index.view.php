<section class="my-4 grid gap-4 grid-cols-1 md:grid-cols-2 md:grid-cols-2">

  <?php foreach ($books as $book):  ?>

    <div class="bg-slate-200 border-none p-2 flex gap-2">
      <div class="w-25 h-50 bg-red-200 flex-1/3"></div>

      <div class="column-1 flex-2/3">
        <div class="font-bold"><?= $book->title ?></div>
        <div class="text-sm">Qtd páginas:<?= $book->n_pages ?></div>
        <div class="text-sm">Author: <?= $book->author ?></div>
        <div class="">
          <?= strlen($book->description) > 200 ?
            mb_substr($book->description, 0, 200, 'UTF-8') . '...' :
            mb_substr($book->description, 0, 200, 'UTF-8')
          ?>
        </div>
      </div>
    </div>

  <?php endforeach ?>

</section>
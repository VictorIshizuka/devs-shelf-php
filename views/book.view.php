<div class="bg-slate-200 p-4 rounded-sm shadow-sm m-6 max-w-full overflow-hidden">
  <div class="flex flex-col md:flex-row gap-4 mb-4">
    <img src="<?= $book->image ?>" alt="Imagem do Livro"
      class="w-full md:w-1/3 aspect-[3/4] bg-red-200 flex items-center shadow-sm">

    <div class="w-full md:w-2/3 flex flex-col gap-2">
      <a href="book?id=<?= $book->id ?>" class="font-semibold text-lg hover:underline break-words"><?= $book->title ?></a>
      <div class="text-sm">Qtd páginas:<?= $book->n_pages ?></div>
      <div class="text-sm">Author: <?= $book->author ?></div>
      <div class="text-sm">Ano: <?= $book->year_release ?></div>

      <div class="border border-slate-300 rounded-sm p-2 mt-auto text-xs bg-slate-50">
        x y z
      </div>
    </div>
  </div>
  <div class="mt-4 pt-4 border-t border-slate-300">
    <p class="text-sm text-slate-600 leading-relaxed whitespace-pre-line break-words">
      <?= $book->description ?>
    </p>
  </div>
</div>
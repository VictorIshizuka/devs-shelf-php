<div class="bg-slate-200 p-4 rounded-sm shadow-sm
                flex flex-col md:flex-row gap-4 m-6">
  <div class="w-full md:w-1/3 aspect-[3/4]
                bg-red-200 flex items-center justify-center">
    <img src="<?= $book->image ?>" alt="Imagem do Livro" class="w-60 rounded">
  </div>

  <div class="w-full md:w-2/3 flex flex-col gap-2">
    <a href="book?id=<?= $book->id ?>" class="font-semibold text-lg hover:underline"><?= $book->title ?></a>
    <div class="text-sm">Qtd páginas:<?= $book->n_pages ?></div>
    <div class="text-sm">Author: <?= $book->author ?></div>
    <div class="text-sm line-clamp-4">
      <?= $book->description ?>
    </div>
    <div class="border rounded-sm p-2 mt-auto">
      x y z
    </div>
  </div>
</div>
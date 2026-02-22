<h1 class="mt-6 font-bold text-lg mx-2">Meus livros</h1>

<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6  mx-2">

  <div>

    <div class="border-2 border-slate-400 rounded p-auto">

      <h1 class="font-semibold mx-4 mt-2">Cadastre um novo livro!</h1>

      <form class="p-4 space-y-4" method="POST" action="/create-book" enctype="multipart/form-data">

        <div class="flex flex-col">

          <label class="text-stone-400 mb-1">Título</label>

          <input type="text" name="title" class="border-slate-400 border-2 rounded-sm bg-slate-200 text-sm focus:outline-none px-2 py-1 w-full">

        </div>

        <div class="flex flex-col">

          <label class="text-stone-400 mb-1">Autor</label>

          <input type="text" name="author" class="border-slate-400 border-2 rounded-sm bg-slate-200 text-sm focus:outline-none px-2 py-1 w-full">

        </div>

        <div class="flex flex-col">

          <label class="text-stone-400 mb-1">Descrição</label>

          <textarea name="description" class="border-slate-400 border-2 rounded-sm bg-slate-200 text-sm focus:outline-none px-2 py-1 w-full"></textarea>

        </div>

        <div class="flex flex-col-1 md:flex-col-2 gap-2">
          <div>

            <label class="text-stone-400 mb-1">Números de páginas</label>

            <input name="n_pages" type="number" class="border-slate-400 border-2 rounded-sm bg-slate-200 text-sm focus:outline-none px-2 py-1 w-full" />

          </div>

          <div>

            <label class="text-stone-400 mb-1">Ano de Lançamento</label>

            <select name="year_release" class="border-slate-400 border-2 rounded-sm bg-slate-200 text-sm focus:outline-none px-2 py-1 w-full">

              <?php foreach (range(1000, date('Y')) as $ano): ?>

                <option value="<?= $ano ?>"><?= $ano ?></option>

              <?php endforeach; ?>

            </select>

          </div>
          
        </div>

        <button type="submit" class="font-semibold border-2 border-slate-400 rounded-sm px-2">Salvar</button>

      </form>
    </div>

  </div>

  <div class="flex flex-col gap-4">
    <?php foreach ($books as $book):  ?>

      <div class="bg-slate-200 p-4 rounded-sm shadow-sm
                flex flex-col md:flex-row gap-4">
        <div class="w-full md:w-1/3 aspect-[3/4]
                bg-red-200 flex items-center justify-center">capa</div>

        <div class="w-full md:w-2/3 flex flex-col gap-2">
          <a href="book?id=<?= $book->id ?>" class="font-semibold text-lg hover:underline"><?= $book->title ?></a>
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
  </div>


</div>
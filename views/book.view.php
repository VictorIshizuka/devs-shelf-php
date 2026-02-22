<div class="bg-slate-200 p-4 rounded-sm shadow-sm m-6 max-w-full overflow-hidden">
  <div class="flex flex-col md:flex-row gap-4 mb-4">
    <img src="<?= $book->image ?>" alt="Imagem do Livro"
      class="w-full md:w-1/3 aspect-[3/4] bg-red-200 flex items-center shadow-sm">

    <div class="w-full md:w-2/3 flex flex-col gap-2">
      <a href="book?id=<?= $book->id ?>" class="font-semibold text-lg hover:underline break-words"><?= $book->title ?></a>
      <div class="text-sm">Qtd páginas:<?= $book->n_pages ?></div>
      <div class="text-sm">Author: <?= $book->author ?></div>
      <div class="text-sm">Ano: <?= $book->year_release ?></div>
      <div class="text-xs italic"><?= str_repeat('⭐', (int) ($book->note_book ?? 0)) ?>
        (<?= $book->count_note ?? 0 ?> Avaliações)
      </div>

    </div>
  </div>
  <div class="mt-4 pt-4 border-t border-slate-400">
    <p class="text-sm text-slate-400 leading-relaxed whitespace-pre-line break-words">
      <?= $book->description ?>
    </p>
  </div>

  <div>

    <?php if (auth()): ?>

      <div class="border border-slate-400 rounded mt-6">

        <h1 class="border-b border-slate-400 text-slate-400 font-bold px-4 py-2">Me conte o que achou!</h1>

        <form class="p-4 space-y-4" method="POST" action="/create-evaluation">

          <?php if ($validations = flash()->get('validations')): ?>

            <div class="border-red-400 bg-red-200 text-red-400 px-4 py-1 rounded-md border-2 text-sm font-bold my-4">

              <ul>

                <?php foreach ($validations as $validation): ?>

                  <li><?= $validation ?></li>

                <?php endforeach; ?>

              </ul>

            </div>

          <?php endif; ?>

          <div class="flex flex-col">

            <input name="id_book" value="<?= $book->id ?>" type="hidden">

            <label class="text-slate-400 mb-1">Comentário</label>

            <textarea name="comment" class="border-slate-400 border-2 rounded-md bg-slate-200 text-sm focus:outline-none px-2 py-1 w-full"></textarea>

          </div>

          <div class="flex flex-col">

            <label class="text-slate-400 mb-1">Nota</label>

            <select name="note" class="border-slate-400 border-2 rounded-md bg-slate-200 text-sm focus:outline-none px-2 py-1 w-full">

              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5" selected>5</option>

            </select>

          </div>

          <button type="submit" class="border-slate-400 bg-slate-100 text-slate-400 font-semibold px-4 py-1 rounded-md border-2 hover:bg-slate-200">Salvar</button>

        </form>

      </div>
    <?php else: ?>
       <div class="border-2 border-red-400 text-red-400 rounded-sm mt-6 p-4 inline-block">
        <a href="/login" class="font-semibold text-lg hover:underline">
          Faça o Login para comentar!
        </a>
       </div>

    <?php endif; ?>

  </div>

  <div class=" mt-6">

    <h2>Avaliações</h2>

    <div class="col-span-3 grid gap-4 mt-4">
      <?php foreach ($evaluations as $evaluation): ?>
        <div class="border border-slate-200 rounded-sm flex flex-col overflow-hidden shadow-sm">
          <div class="bg-slate-50 border-b border-slate-200 px-4 py-2 flex justify-between items-center">
            <span class="text-sm font-bold text-slate-700">
              <?= $evaluation->name_user_comment ?>
            </span>
            <span class="text-xs">
              <?= str_repeat('⭐', (int)($evaluation->note ?? 0)) ?>
            </span>
          </div>

          <div class="p-4">
            <p class="text-sm leading-relaxed text-slate-600 whitespace-pre-line break-words">
              <?= $evaluation->comment ?>
            </p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
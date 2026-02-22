<div class="w-full flex justify-center">
  <div class="border-2 border-slate-400 rounded my-6 w-75">

    <h1 class="border-b-2 border-slate-400 text-slate-400 font-bold px-4 py-2">Registrar</h1>

    <form class="p-4 space-y-4" method="POST">

      <div class="flex flex-col">

        <label class="text-slate-400 mb-1">Nome</label>

        <input type="text" name="name" class="border-slate-400 border-2 rounded-sm bg-slate-200 text-sm focus:outline-none px-2 py-1 w-full">

      </div>
      <div class="flex flex-col">

        <label class="text-slate-400 mb-1">Email</label>

        <input type="email" name="email" class="border-slate-400 border-2 rounded-sm bg-slate-200 text-sm focus:outline-none px-2 py-1 w-full">

      </div>

      <div class="flex flex-col">

        <label class="text-slate-400 mb-1">Senha</label>

        <input type="password" name="password" class="border-slate-400 border-2 rounded-sm bg-slate-200 text-sm focus:outline-none px-2 py-1 w-full">

      </div>

      <button type="submit" class="border-slate-400 bg-slate-100 text-slate-400 font-semibold px-4 py-1 rounded-md border-2 hover:bg-slate-200">Registrar</button>

    </form>

  </div>

</div>
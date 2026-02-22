<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Devs Shelf</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-slate-100 text-slate-500 flex flex-col min-h-screen">
  <?php require_once  __DIR__ . "/../components/header.php" ?>

  <main class="grow mx-auto max-w-screen-lg space-y-6">

    <?php if ($message = flash()->get('message')): ?>

      <div class="border-green-400 bg-green-200 text-green-400 px-4 py-1 rounded-md border-2 text-sm font-bold mt-4">

        <?= $message ?>

      </div>

    <?php endif; ?>

    <?php require "../views/{$view}.view.php" ?>

  </main>

  <?php require_once  __DIR__ . "/../components/footer.php" ?>
</body>

</html>
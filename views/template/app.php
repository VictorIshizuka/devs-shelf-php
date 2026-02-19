<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Devs Shelf</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-slate-100 text-slate-500">
  <?php require_once  __DIR__ . "/../components/header.php" ?>

  <main class="mx-auto max-w-screen-lg space-y-6">

    <?php require "../views/{$view}.view.php" ?>

  </main>

  <?php require_once  __DIR__ . "/../components/footer.php" ?>
</body>

</html>
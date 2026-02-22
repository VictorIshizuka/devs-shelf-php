<?php

if (! auth()) {

  abort(403);
}

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
  header("Location: /my-books");
  exit();
}

$id_user = auth()->id;

$title = $_POST['title'];
$author = $_POST['author'];
$description = $_POST['description'];
$year_release = $_POST['year_release'];
$n_pages = $_POST['n_pages'];


$fileName = md5(rand());

$extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

$image = "images/$fileName.$extension";

$destination = __DIR__ . "/../public/" . $image;
if (move_uploaded_file($_FILES['image']['tmp_name'], $destination)) {

  $database->query(
    "INSERT INTO books ( title, author, description, year_release, id_user, n_pages, image )
  VALUES ( :title, :author, :description, :year_release, :id_user, :n_pages, :image );",
    params: compact('title', 'author', 'description', 'year_release', 'id_user', 'n_pages', 'image')
  );

  flash()->push('message', 'Livro cadastrado com sucesso!');
} else {
  flash()->push('error', 'Falha ao mover a imagem. Verifique as permissões da pasta.');
}

header("Location: /my-books");
exit();

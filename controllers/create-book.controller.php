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

$database->query(
  "INSERT INTO books ( title, author, description, year_release, id_user, n_pages )
  VALUES ( :title, :author, :description, :year_release, :id_user, :n_pages );",
  params: compact('title', 'author', 'description', 'year_release', 'id_user', 'n_pages')
);

header("Location: /my-books");
exit();

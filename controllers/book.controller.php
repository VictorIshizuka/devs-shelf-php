<?php

$book = Book::get($_GET['id']);

$evaluations = $database->query(
  "SELECT evaluation.*, users.name as name_user_comment FROM evaluation LEFT JOIN users ON evaluation.id_user = users.id WHERE  id_book = :id",
  Evaluation::class,
  ['id' => $_GET['id']]
)->fetchAll();

view('book', data: compact('book', 'evaluations'));

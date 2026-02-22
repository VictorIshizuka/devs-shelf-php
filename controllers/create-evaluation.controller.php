<?php


if ($_SERVER['REQUEST_METHOD'] != "POST") {

  header("Location: /");

  exit();
}

$id_user = auth()->id;
$id_book = $_POST['id_book'];
$comment = $_POST['comment'];
$note = $_POST['note'];

$validation = Validation::validate(
  [
    'comment' => ['required'],
    'note' => ['required']
  ], $_POST
);

if($validation->isInvalid()){
  header('Location: /book?id='. $id_book);
  exit();
}


$database->query(
  "INSERT INTO evaluation (id_user, id_book, comment, note)
              VALUES   (:id_user, :id_book, :comment, :note)",
  params: compact(['id_user', 'id_book', 'comment', 'note'])
);

flash()->push('message', 'Avaliação criada com sucesso!');

header('Location:/book?id=' . $id_book);
exit();

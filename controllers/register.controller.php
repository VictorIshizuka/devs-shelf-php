<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $validation = Validation::validate([

    'name' => ['required'],
    'email' => ['required', 'email', 'confirmed', 'unique:users'],
    'password' => ['required', 'min:8', 'max:30', 'strong']

  ], $_POST);

  if ($validation->isInvalid('register')) {

    header("Location: /register");

    exit();
  }

  $database->query(
    "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)",
    params: [
      'name' => $_POST['name'],
      'email' => $_POST['email'],
      'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
    ]
  );

  flash()->push('message', 'Registrado com sucesso! 👍');

  header('Location: /login');
  exit();
}

view('register');

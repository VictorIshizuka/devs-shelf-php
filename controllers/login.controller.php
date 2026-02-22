<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $email = $_POST['email'];
  $password = $_POST['password'];

     $validation = Validation::validate([

        'email' => ['required', 'email'],
        'password' => ['required']

    ], $_POST);

    if ($validation->isInvalid('login')) {

        header("Location: /login");

        exit();

    }

  $user = $database->query(
    'SELECT * FROM users WHERE email = :email',
    User::class,
    compact('email')
  )->fetch();

  if ($user) {
    if (!password_verify($password, $user->password)) {

      flash()->push('validation_login', ['Usuário ou senha estão incorretos!']);

      header('Location:/login');
      exit();
    }

    $_SESSION['auth'] = $user;

    flash()->push('message', "Seja bem-vindo " . $user->name . "!");

    header("Location: /");

    exit();
  }
}

view('login');

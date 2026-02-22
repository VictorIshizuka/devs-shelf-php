<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $email = $_POST['email'];
  $password = $_POST['password'];

  $user = $database->query(
    'SELECT * FROM users WHERE email = :email',
    User::class,
    compact('email')
  )->fetch();

  if ($user) {
    if (!password_verify($password, $user->password)) {
      header('Location:/login');
      exit();
    }

    $_SESSION['auth'] = $user;

    header("Location: /");

    exit();
  }
}

view('login');

<?php

if (! auth()) {

  header('Location: /');

  exit();
}

$books = Book::myBooks(1);
view('my-books', compact('books'));

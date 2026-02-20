<?php

$books = Book::all('');
view('my-books', compact('books'));

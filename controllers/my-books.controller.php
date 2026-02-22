<?php

$books = Book::myBooks(1);
view('my-books', compact('books'));

<?php

$book = Book::get($_GET['id']);

view('book', compact('book'));
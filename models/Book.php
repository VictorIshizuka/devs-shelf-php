<?php

class Book
{

  public $id;

  public $title;

  public $author;

  public $description;

  public $year_release;

  public $id_user;

  public $n_pages;

  public $image;

  public $count_note;

  public $note_book;

  public function query($where, $params)
  {
    $database = new Database(config('database'));

    return $database->query(
      "SELECT

        b.id,
        b.title,
        b.author,
        b.description,
        b.year_release,
        b.n_pages,
        b.image,
        round(sum(e.note) / 5.0) as note_book,
        count(e.id) as count_note

      FROM
        books b

      LEFT JOIN evaluation e on e.id_book = b.id

      WHERE $where

      GROUP BY

        b.id,
        b.title,
        b.author,
        b.description,
        b.year_release,
        b.n_pages

      ",
      self::class,
      $params
    );
  }

  public static function get($id){
    return (new self)->query('b.id = :id', params: ['id' => $id])->fetch();
  }

  public static function all($filter)
  {
    return (new self)->query('b.title LIKE :filter', ['filter' => "%$filter%"])->fetchAll();
  }

  public static function myBooks($id_user){
    return (new self)->query('b.id_user = :id_user', params: ['id_user' => $id_user])->fetchAll();

  }
}

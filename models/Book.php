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

  // public $evaloutrion_couter;

  // public $evaluation_grade;

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
        b.image

      FROM
        books b

      WHERE $where

      GROUP BY

        b.id,
        b.title,
        b.author,
        b.year_release,
        b.description,
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

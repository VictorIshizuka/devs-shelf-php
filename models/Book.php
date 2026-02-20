<?php

class Book
{

  public $id;

  public $title;

  public $author;

  public $description;

  public $year_release;

  public $user_id;

  public $n_pages;

  // public $image;

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
        b.n_pages

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

  public static function all($filter)
  {
    return (new self)->query('b.title LIKE :filter', ['filter' => "%$filter%"])->fetchAll();
  }
}

<?php

namespace App\Controllers\BooksController;

use \App\Models\BooksModel;

function indexAction(\PDO $connexion)
{
    include_once '../app/models/booksModel.php';
    $books = BooksModel\findAll($connexion);

    global $title, $content;
    $title = "Books";
    ob_start();
    include '../app/views/books/index.php';
    $content = ob_get_clean();
}

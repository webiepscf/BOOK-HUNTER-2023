<?php
// ROUTER PRINCIPAL

// Liste des books
// PATTERN: ?books=index
// CTRL: booksController
// ACTION: index
if (isset($_GET['books']) && $_GET['books'] === 'index') :
    include_once '../app/controllers/booksController.php';
    \App\Controllers\BooksController\indexAction($connexion);

// PATTERN: /
// CTRL: pagesController
// ACTION: home
// VIEW: pages/home.php
else :
    include_once '../app/controllers/pagesController.php';
    \App\Controllers\PagesController\homeAction($connexion);
endif;

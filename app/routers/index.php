<?php
// ROUTER PRINCIPAL

// BOOKS.INDEX: Liste des books
// PATTERN: ?books=index
// CTRL: booksController
// ACTION: index
if (isset($_GET['books'])) :
    include_once '../app/routers/books.php';

// AUTHORS.INDEX: Liste des authors
// PATTERN: ?authors=index
// CTRL: authorsController
// ACTION: index
elseif (isset($_GET['authors']) && $_GET['authors'] === 'index') :
    include_once '../app/controllers/authorsController.php';
    \App\Controllers\AuthorsController\indexAction($connexion);

// PATTERN: /
// CTRL: pagesController
// ACTION: home
// VIEW: pages/home.php
else :
    include_once '../app/controllers/pagesController.php';
    \App\Controllers\PagesController\homeAction($connexion);
endif;

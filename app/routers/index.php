<?php
// ROUTER PRINCIPAL

// PATTERN: /
// CTRL: pagesController
// ACTION: home
// VIEW: pages/home.php
include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\homeAction($connexion);

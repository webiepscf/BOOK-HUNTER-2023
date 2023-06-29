<?php
/*
    Variables disponibles
        - $books (ARRAY(ARRAY(...)))
        - $authors (ARRAY(ARRAY(...)))
*/
?>

<h2 class="text-2xl font-bold mb-4">Popular books</h2>
<?php include '../app/views/books/_index.php'; ?>

<h2 class="text-2xl font-bold mt-8 mb-4">Popular authors</h2>
<?php include '../app/views/authors/_index.php'; ?>
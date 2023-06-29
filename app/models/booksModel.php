<?php

namespace App\Models\booksModel;

function findAllPopulars(\PDO $connexion): array
{
    $sql = "SELECT  ROUND(AVG(note), 2) AS notation, 
                    bk.*, 
                    au.id AS authorID,
                    au.firstname, au.lastname, 
                    ct.id as categoryID,
                    ct.name
            FROM books bk
            JOIN categories ct ON bk.category_id = ct.id
            JOIN authors au ON bk.author_id = au.id
            LEFT JOIN users_notations un ON un.book_id = bk.id
            GROUP BY bk.id
            ORDER BY notation DESC
            LIMIT 3;";
    $rs = $connexion->query($sql);
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

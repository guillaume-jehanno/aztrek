<?php

function getAllPays()
{
    /* @var $connection PDO */
    global $connection;

    $query = 'SELECT *
        FROM pays';

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getSejourByPays(int $id)
{
    /* @var $connection PDO */
    global $connection;

    $query = 'SELECT 
    sejour.titre,
    sejour.image,
    pays.id,
    pays.label
FROM sejour
INNER JOIN pays ON pays.id = sejour.pays_id
WHERE pays.id = :id;';

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    return $stmt->fetchAll();
}

<?php


function getEnAvantDeGuingamp()
{
    /* @var $connection PDO */
    global $connection;

    $query = ' SELECT *
        FROM sejour 
        WHERE sejour.en_avant = 1';

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

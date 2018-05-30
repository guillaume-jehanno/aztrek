<?php

function getOnePicturesByProject(int $id)
{
    /* @var $connection PDO */
    global $connection;

    $query = 'SELECT *
    FROM sejour_image
    WHERE sejour_id = :id';

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    return $stmt->fetch();
}

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

// Départ par séjours

function getDepartParSejour(int $id)
{
    /* @var $connection PDO */
    global $connection;

    $query = '
    SELECT *
    FROM depart 
    WHERE depart.sejour_id = :id
    ';

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    return $stmt->fetchAll();
}

// Prix par sejours

function getPrixParSejour(int $id)
{
    /* @var $connection PDO */
    global $connection;

    $query = '
    SELECT 
        depart.prix,
        sejour.id,
        sejour.titre,
        pays.label
        FROM sejour
    INNER JOIN depart ON sejour.id = depart.sejour_id
    INNER JOIN pays ON sejour.pays_id = pays.id
    WHERE sejour.id = :id 
    ';

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    return $stmt->fetchAll();
}

// Commentaires par séjours

function getComParSejour(int $id)
{
    /* @var $connection PDO */
    global $connection;

    $query = '
    SELECT 
    USE dcpro9_aztrek;
    SELECT *
    FROM commentaire
    INNER JOIN sejour ON commentaire.sejour_id = sejour.id
    INNER JOIN user ON commentaire.sejour_id = user.id
    WHERE sejour.id = :id
    ';

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    return $stmt->fetchAll();
}

// Nombre de places restantes par séjours

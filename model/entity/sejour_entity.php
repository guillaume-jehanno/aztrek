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

function getOneSejour(int $id)
{
    /* @var $connection PDO */
    global $connection;

    $query = ' SELECT *
        FROM sejour
        WHERE sejour.id = :id';

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    return $stmt->fetch();
}

// Départ par séjours

function getDepartParSejour(int $id)
{
    /* @var $connection PDO */
    global $connection;

    $query = '
    SELECT depart.*,
    DATE_FORMAT(depart.date_depart, "%d-%m-%Y") AS date_depart,
    depart.places_totale - SUM(reservation.nb_place) AS place_restante
FROM depart 
LEFT JOIN reservation ON reservation.depart_id = depart.id
WHERE depart.sejour_id = :id
GROUP BY depart.id
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

function getAllSejour()
{
    /* @var $connection PDO */
    global $connection;

    $query = '
    SELECT *,
    DATE_FORMAT(depart.date_depart, "%d-%m-%Y") AS date_depart
    FROM sejour 
    INNER JOIN depart ON sejour.id = depart.sejour_id
        ';

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

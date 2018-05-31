<?php

function getAllDepart()
{
    /* @var $connection PDO */
    global $connection;

    $query = '
    SELECT *
    FROM depart
    LEFT JOIN sejour ON depart.sejour_id = sejour.id
    ';

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

function insertDepart(int $date_depart, int $prix, int $places_totale)
{
    /* @var $connection PDO */
    global $connection;

    $query = 'INSERT INTO depart (date_depart, prix, places_totale)
                VALUES (:date_depart, :prix, :places_totale);';

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':date_depart', $date_depart);
    $stmt->bindParam(':prix', $prix);
    $stmt->bindParam(':places_totale', $places_totale);
    $stmt->execute();
}

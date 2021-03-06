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

// Prix par sejours

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
    SELECT sejour.*,
            pays.label AS pays,
            pays.picture AS pays_picture
    FROM sejour
    INNER JOIN pays ON pays.id = sejour.pays_id;';

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

function insertSejour(string $titre, string $description, string $image, int $en_avant, int $pays_id)
{
    /* @var $connection PDO */
    global $connection;

    $query = 'INSERT INTO sejour (titre, description, image, en_avant, pays_id)
                VALUES (:titre, :description, :image, :en_avant, :pays_id);';

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':titre', $titre);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':image', $image);
    $stmt->bindParam(':en_avant', $en_avant);
    $stmt->bindParam(':pays_id', $pays_id);

    $stmt->execute();
}

function updateSejour(int $id, string $titre, string $description, string $image)
{
    /* @var $connection PDO */
    global $connection;

    $query = 'UPDATE sejour
                SET titre = :titre,
                    description = :description,
                    image = :image
            WHERE id = :id;';

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':titre', $titre);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':image', $image);
    $stmt->execute();
}

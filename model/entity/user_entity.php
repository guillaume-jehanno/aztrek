<?php

function getUserByEmailPassword(string $email, string $password)
{
    /* @var $connection PDO */
    global $connection;

    $query = '
        SELECT *
            FROM user
            WHERE email = :email
            AND password = SHA1(:password);';

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    return $stmt->fetch();
}

function getOneUser(int $id)
{
    /* @var $connection PDO */
    global $connection;

    $query = '
        SELECT *
            FROM user
            WHERE id = :id;';

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    return $stmt->fetch();
}

// Selection de tous les utilisateurs avec le nbr de commentaires
// avec le nombre de reservations

function getAllUser()
{
    /* @var $connection PDO */
    global $connection;

    $query = '
            SELECT user.*,
        COUNT(commentaire.id) AS total_commentaire,
        COUNT(reservation.id) AS total_reservation,
        CONCAT(user.nom, " " , user.prenom) AS nom_complet
            FROM user 
            INNER JOIN commentaire ON user.id = commentaire.user_id
            INNER JOIN reservation ON reservation.user_id = user.id 
            GROUP BY user.id';

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchALL();
}

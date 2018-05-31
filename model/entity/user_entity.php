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
            LEFT JOIN commentaire ON user.id = commentaire.user_id
            LEFT JOIN reservation ON reservation.user_id = user.id 
            GROUP BY user.id';

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchALL();
}

function insertUser(string $nom, string $prenom, string $pseudo, string $email, string $password, int $admin, string $picture)
{
    /* @var $connection PDO */
    global $connection;

    $query = 'INSERT INTO user (nom, prenom, pseudo, email, password, admin, picture)
                VALUES (:nom, :prenom, :pseudo, :email, :password, :admin, :picture);';

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':pseudo', $pseudo);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':admin', $admin);
    $stmt->bindParam(':picture', $picture);
    $stmt->execute();
}

function updateUser(int $id, string $nom, string $prenom, string $pseudo, string $email, string $password, int $admin, string $picture)
{
    /* @var $connection PDO */
    global $connection;

    $query = 'UPDATE user
                SET nom = :nom,
                prenom = :prenom,
                pseudo = :pseudo,
                email = :email,
                password = :password,
                admin = :admin,
                picture = :picture
            WHERE id = :id;';

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':pseudo', $pseudo);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':admin', $admin);
    $stmt->bindParam(':picture', $picture);
    $stmt->execute();
}

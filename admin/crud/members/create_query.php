<?php

require_once '../../../model/database.php';

// Récupérer les données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$pseudo = $_POST['pseudo'];
$email = $_POST['email'];
$password = $_POST['password'];
$admin = $_POST['admin'];
$picture = '';

// Vérifier si l'utilisateur a uploadé un fichier
if ($_FILES['picture']['error'] == 0) {
    $picture = $_FILES['picture']['name'];
    // Déplacer le fichier uploadé
    move_uploaded_file($_FILES['picture']['tmp_name'], '../../../uploads/'.$picture);
}

// Insertion des données en BDD
insertUser($nom, $prenom, $pseudo, $email, $password, $admin, $picture);

// Redirection vers la liste
header('Location: index.php');

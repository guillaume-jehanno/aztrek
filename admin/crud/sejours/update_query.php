<?php

require_once '../../../model/database.php';

// Récupérer les données du formulaire
$id = $_POST['id'];
$titre = $_POST['titre'];
$description = $_POST['description'];
$date_depart = $_POST['date_depart'];
$prix = $_POST['prix'];
$label = $_POST['label'];

$sejour = getAllSejour();
$picture = !is_null($sejour['image']) ? $sejour['image'] : ''; // Image présente avant update

// Vérifier si l'utilisateur a uploadé un fichier
if ($_FILES['image']['error'] == 0) {
    $picture = $_FILES['image']['name'];
    // Déplacer le fichier uploadé
    move_uploaded_file($_FILES['image']['tmp_name'], '../../../uploads/'.$picture);
}

// Insertion des données en BDD
updateSejour($id, $titre, $description, $image);

// Redirection vers la liste
header('Location: index.php');

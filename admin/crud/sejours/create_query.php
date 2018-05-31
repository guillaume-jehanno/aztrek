<?php

require_once '../../../model/database.php';

// Récupérer les données du formulaire
$titre = $_POST['titre'];
$description = $_POST['description'];
$en_avant = $_POST['en_avant'];
$pays_id = $_POST['pays_id'];

$image = '';

// Vérifier si l'utilisateur a uploadé un fichier
if ($_FILES['image']['error'] == 0) {
    $image = $_FILES['image']['name'];
    // Déplacer le fichier uploadé
    move_uploaded_file($_FILES['image']['tmp_name'], '../../../uploads/'.$image);
}

// Insertion des données en BDD
insertSejour($titre, $description, $image, $en_avant, $pays_id);

// Redirection vers la liste
header('Location: index.php');

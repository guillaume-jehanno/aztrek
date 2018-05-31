<?php

require_once '../../../model/database.php';

// Récupérer les données du formulaire
$date_depart = $_POST['date_depart'];
$prix = $_POST['prix'];
$places_totale = $_POST['places_totale'];

// Insertion des données en BDD
insertDepart($date_depart, $prix, $places_totale);

// Redirection vers la liste
header('Location: index.php');

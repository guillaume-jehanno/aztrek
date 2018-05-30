<?php

require_once 'lib/functions.php';
require_once 'model/database.php';

$id = $_GET['id'];

$image = getOnePicturesByProject($id);
$list_depart = getDepartParSejour($id);
$sejour = getOneEntity('sejour', $id);

// Vérifier si le paramètre id est bien présent dans l'URL
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: 404.php');
}

getHeader('Pays'); ?>



<section class="container">
    
    <h1><?php echo $sejour['titre']; ?></h1>


    <?php foreach ($list_depart as $depart) : ?>
    <p>Date de départ du séjour petit chanceux que tu es : <?php echo $depart['date_depart']; ?></p>
    <p><?php echo $depart['place_restante']; ?> Places restante sur <?php echo $depart['places_totale']; ?> disponibles dans ce séjour (ça serait bien dommage de louper ça)</p>
    <p>Allez un petit avant goût de l'aventure :</p>
    <img src="uploads/<?php echo $image['filename']; ?>" alt="">
    <br>
   
<h1>Prix séjour : <?php echo $depart['prix']; ?> €</h1>
<hr>
<div class="btn btn-primary">ACHAT</div>
<hr>
                <?php endforeach; ?>




</section>


<?php getFooter(); ?>
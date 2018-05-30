<?php

require_once 'lib/functions.php';
require_once 'model/database.php';

$id = $_GET['id'];

// Vérifier si le paramètre id est bien présent dans l'URL
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: 404.php');
}

getHeader('Pays'); ?>



<section class="container">
    
    

    
</section>


<?php getFooter(); ?>
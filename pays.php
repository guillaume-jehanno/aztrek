<?php

require_once 'lib/functions.php';
require_once 'model/database.php';

$id = $_GET['id'];

$pays = getOneEntity('pays', $id);
$sejourparpays = getSejourByPays($id);

getHeader('Pays');

?>

<section class="container">
   
<h1><?php echo $pays['label']; ?></h1>

<p>Liste de séjours pour le <?php echo $pays['label']; ?> :</p>

<?php foreach ($sejourparpays as $sejour) : ?>
                    <?php include 'include/sejour_inc.php'; ?>
                <?php endforeach; ?>


</section>
 
<?php getFooter(); ?>



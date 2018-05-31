<?php
require_once '../../../model/database.php';

$list_depart = getAllDepart();

require_once '../../layout/header.php';

?>

<h1>Gestion des départs</h1>

<hr>

<a href="create.php" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter</a>

<hr>

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>Séjour</th>
            <th>Date</th>
            <th>Prix</th>
            <th>Nombre de places</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($list_depart as $depart) : ?>
            <tr>
                <td><?php echo $depart['titre']; ?></td>
                <td><?php echo $depart['date_depart']; ?></td>
                <td><?php echo $depart['prix']; ?></td>
                <td><?php echo $depart['places_totale']; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $user['id']; ?>" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                    <a href="delete_query.php?id=<?php echo $user['id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>



<?php require_once '../../layout/footer.php'; ?>
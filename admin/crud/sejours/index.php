<?php
require_once '../../../model/database.php';

$list_sejour = getAllSejour();

require_once '../../layout/header.php';
?>

<h1>Gestion des sejours</h1>

<br>

<a href="create.php" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter</a>

<hr>

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>Titre</th>
            <th>Pays</th>
            <th>Image</th>
            <th>En avant</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($list_sejour as $sejour) : ?>
            <tr>
                <td><?php echo $sejour['titre']; ?></td>
                <td ><?php echo $sejour['pays']; ?></td>
                <?php $image = (!empty($sejour['image'])) ? '../../../uploads/'.$sejour['image'] : 'http://via.placeholder.com/150x150'; ?>
                <td><img src="<?php echo $image; ?>" class="img-thumbnail"></td>
                <td><?php if ($sejour['en_avant']):?>
                    <?php echo 'Oui'; ?>
                    <?php else:?>
                    <?php echo 'Non'; ?>
                    <?php endif; ?>
                </td>
                <td>
                    <a href="update.php?id=<?php echo $sejour['id']; ?>" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                    <a href="delete_query.php?id=<?php echo $sejour['id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>


<?php require_once '../../layout/footer.php'; ?>
<?php
require_once '../../../model/database.php';

// Récupérer la liste des catégories pour la liste déroulante
$list_categories = getAllEntity('sejour');

require_once '../../layout/header.php';
?>

<h1>Nouveau projet</h1>

<form action="create_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="titre">Titre</label>
        <input type="text" id="titre" name="titre" class="form-control">
    </div>
    <div class="form-group">
        <label for="image">Photo</label>
        <input type="file" id="image" name="image" accept="image/*" class="form-control">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="price">Prix</label>
        <input type="number" id="price" name="price" class="form-control">
    </div>
    <div class="form-group">
        <label for="sejour">Sejour</label>
        <select id="sejour" name="sejour_id" class="form-control">
            <?php foreach ($list_categories as $category) : ?>
                <option value="<?php echo $category['id']; ?>">
                    <?php echo $category['titre']; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>
</form>


<?php require_once '../../layout/footer.php'; ?>


<?php
require_once '../../../model/database.php';

$id = $_GET['id'];
$list_sejour = getAllSejour();

require_once '../../layout/header.php';
?>

<h1>Modifier Séjour</h1>


<form action="update_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="titre">Titre</label>
        <input type="text" id="titre" name="titre" value="<?php echo $list_sejour['titre']; ?>" class="form-control">
    </div>
    
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description"  class="form-control"> <?php echo $list_sejour['description']; ?> </textarea>
    </div>

    <div class="form-group">
        <label for="sejour">Pays</label>
        <select id="sejour" name="sejour_id" class="form-control">
            <?php foreach ($list_sejour as $sejour) : ?>
                <option value="<?php echo $sejour['id']; ?>">
                    <?php echo $sejour['label']; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label for="admin">En avant </label>
    <input type="radio" id="en_avant" name="en_avant" value="1">
        <label for="en_avant">Pas en avant </label>
    <input type="radio" checked id="en_avant" name="en_avant" value="0">
    </div>
       
        <div class="form-group">
        <label for="image">Photo</label>
        <input type="file" id="image" name="image" accept="image/*" class="form-control">
    </div>


    
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>
</form>


<?php require_once '../../layout/footer.php'; ?>


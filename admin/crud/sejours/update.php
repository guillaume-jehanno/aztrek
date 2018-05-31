<?php
require_once '../../../model/database.php';

$id = $_GET['id'];
$sejour = getOneEntity('sejour', $id);
$list_pays = getAllPays();

require_once '../../layout/header.php';
?>

<h1>Modifier Séjour</h1>


<form action="update_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="titre">Titre</label>
        <input type="text" id="titre" name="titre" value="<?php echo $sejour['titre']; ?>" class="form-control">
    </div>
    
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description"  class="form-control"><?php echo $sejour['description']; ?></textarea>
    </div>

    <div class="form-group">
        <label for="pays">Pays</label>
        <select id="pays" name="pays_id" class="form-control">
            <?php foreach ($list_pays as $pays) : ?>
                <?php $selected = ($pays['id'] == $sejour['pays_id']) ? 'selected' : ''; ?>
                <option value="<?php echo $pays['id']; ?>" <?php echo $selected; ?>>
                    <?php echo $pays['label']; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label for="admin">En avant </label>
        <input type="radio" id="en_avant" name="en_avant" value="1" <?php echo ($sejour['en_avant']) ? 'checked' : ''; ?>>
        <label for="en_avant">Pas en avant </label>
        <input type="radio" id="en_avant" name="en_avant" value="0" <?php echo (!$sejour['en_avant']) ? 'checked' : ''; ?>>
    </div>
       
        <div class="form-group">
        <label for="image">Photo</label>
        <input type="file" id="image" name="image" accept="image/*" class="form-control">
        <?php if (!empty($sejour['image'])) : ?>
            <img src="../../../uploads/<?php echo $sejour['image']; ?>" class="img-thumbnail">
        <?php endif; ?>
    </div>


    
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>
</form>


<?php require_once '../../layout/footer.php'; ?>


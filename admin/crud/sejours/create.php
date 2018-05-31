<?php
require_once '../../../model/database.php';

// Récupérer la liste des catégories pour la liste déroulante
$list_pays = getAllPays();

require_once '../../layout/header.php';
?>

<h1>Nouveau séjour</h1>

<form action="create_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="titre">Titre</label>
        <input type="text" id="titre" name="titre" class="form-control">
    </div>
    
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control"></textarea>
    </div>

        <div class="form-group">
        <label for="admin">En avant </label>
    <input type="radio" id="en_avant" name="en_avant" value="1">
        <label for="en_avant">Pas en avant </label>
    <input type="radio" checked id="en_avant" name="en_avant" value="0">
    </div>

<div class="form-group">
<label for="pays">Liste pays</label>
<select id="pays" name="pays_id" class="form-control">
<?php foreach ($list_pays as $pays) : ?>
<option value="<?php echo $pays['id']; ?>"><?php echo $pays['label']; ?></option>
<?php endforeach; ?>
</select>
</div>

        <div class="form-group">
        <label for="image">Photo</label>
        <input type="file" id="image" name="image" accept="image/*" class="form-control">
    </div>

    
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>
</form>


<?php require_once '../../layout/footer.php'; ?>


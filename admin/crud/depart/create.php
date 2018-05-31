<?php 

require_once '../../../model/database.php';

$list_sejour = getAllSejour();

require_once '../../layout/header.php';

?>

<h1>Nouveau départ</h1>

<form action="create_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="date_depart">Date de départ</label>
        <input type="date" id="date_depart" name="date_depart" class="form-control">
    </div>

    <div class="form-group">
        <label for="prix">Prix</label>
        <input type="number" id="prix" name="prix" min="1" max="99999999" class="form-control" >
    </div>

    <div class="form-group">
        <label for="places_totale">Nombre de places totale</label>
        <input type="number" id="places_totale" name="places_totale" min="1" max="999" class="form-control" >
    </div>

<div class="form-group">
<label for="pays">Liste séjours</label>
<select id="titre" name="titre" class="form-control">
<?php foreach ($list_sejour as $sejour) : ?>
<option value="<?php echo $sejour['id']; ?>"><?php echo $sejour['titre']; ?></option>
<?php endforeach; ?>
</select>
</div>

    <div class="form-group">
        <label for="picture">Photo</label>
        <input type="file" id="picture" name="picture" accept="image/*" class="form-control">
    </div>
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>
</form>


<?php require_once '../../layout/footer.php'; ?>


<?php require_once '../../layout/header.php'; ?>




<h1>Nouveau membre</h1>

<form action="create_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" class="form-control">
    </div>

    <div class="form-group">
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" class="form-control">
    </div>

    <div class="form-group">
        <label for="pseudo">Pseudo</label>
        <input type="text" id="pseudo" name="pseudo" class="form-control">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control">
    </div>

    <?php if ($_SESSION['id'] == 1): ?>
    <div class="form-group">
        <label for="admin">Admin </label>
    <input type="radio" id="admin" name="admin" value="1">
        <label for="admin">Non Admin </label>
    <input type="radio" checked id="admin" name="admin" value="0">
    </div>
<?php else : ''; ?>
<?php endif; ?>

    <div class="form-group">
        <label for="picture">Photo</label>
        <input type="file" id="picture" name="picture" accept="image/*" class="form-control">
    </div>
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>
</form>


<?php require_once '../../layout/footer.php'; ?>


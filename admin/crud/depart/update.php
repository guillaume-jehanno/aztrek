<?php
require_once '../../../model/database.php';

$id = $_GET['id'];
$member = getOneEntity('user', $id);

require_once '../../layout/header.php';
?>

<h1>Modifier membre</h1>

<form action="update_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" value="<?php echo $member['nom']; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" value="<?php echo $member['prenom']; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="pseudo">Pseudo</label>
        <input type="text" id="pseudo" name="pseudo" value="<?php echo $member['pseudo']; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" id="email" name="email"  value="<?php echo $member['email']; ?>"class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" value="<?php echo $member['password']; ?>" class="form-control">
    </div>
    <?php if ($_SESSION['id'] == 1): ?>
    <div class="form-group">
        <label for="admin">Admin </label>
    <input type="checkbox" id="admin" name="admin" value="1">
        <label for="admin">Non Admin </label>
    <input type="checkbox" id="admin" name="admin" value="0">
    </div>
<?php else : ''; ?>
<?php endif; ?>
    <div class="form-group">
        <label for="picture">Photo</label>
        <input type="file" id="picture" name="picture" accept="image/*" class="form-control">
        <?php if (!empty($member['picture'])) : ?>
            <img src="../../../uploads/<?php echo $member['picture']; ?>" class="img-thumbnail">
        <?php endif; ?>
    </div>
    <input type="hidden" name="id" value="<?php echo $member['id']; ?>">
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>
</form>


<?php require_once '../../layout/footer.php'; ?>


<?php 
$list_pays = getALLEntity('pays');
?>

<p>Un voyage sur mesure ?</p>
        <div class="btn"><a href="#">En savoir plus</a></div>
        <span class="ou"><p>ou</p></span>


        <p></p>

        <form action="pays.php" method="GET">
          <div class="form-group">
          <p><label for="inspi">Besoin d'inspiration ?</label><br/>
        <select id="category" name="id" class="form-control">
            <?php foreach ($list_pays as $pays) : ?>
                <option value="<?php echo $pays['id']; ?>">
                    <?php echo $pays['label']; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
          <input type="submit" value="Go !" class="btn-go btn-primary" />
        </form>
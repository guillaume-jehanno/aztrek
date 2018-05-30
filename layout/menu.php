<?php require_once __DIR__.'/../lib/functions.php';

$utilisateur = currentUser();

?>



<div class="container">
      <div id="mobile-header">

        <a class="burger" href="sidr-main">
  <i class="fa fa-bars" aria-hidden="true"></i></a>

      </div>

      <nav id="menu">
        <ul>
          <li><a href="">Destinations</a></li>
          <li><a href="">Communauté</a></li>
          <li><a href="">About</a></li>
          <li><a href="">Blog</a></li>
          <?php if (!isset($utilisateur['id'])):?>
          <li><a href="<?php echo ADMIN_URL; ?>">Login</a></li>
          <?php else:?>
          <li><a href="<?php echo ADMIN_URL; ?>">Mon Compte</a></li>
          <?php endif; ?>
          <li><a href="">Contact</a></li>
        </ul>
      </nav>
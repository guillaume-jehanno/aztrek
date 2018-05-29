<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

// Déclaration des variables
//$list_projects = getAllProjects();

getHeader('Acceuil');
?>


  <main>
    <div class="container">

      <div class="title">
        <img src="./images/picto-montagne.png" alt="">
        <h2>Choissisez votre experience</h2>
      </div>

      <section class="mise-en-avant">



        <article class="mise-en-avant-1">
          <picture>
            <source srcset="./images/mise-en-avant-mob.jpg" media="(max-width: 767px)">
            <source srcset="./images/mise-en-avant-tab.jpg" media="(max-width: 992px)">
            <img srcset="./images/mise-en-avant-tab.jpg" alt="My default image">
          </picture>
          <div class="pub">
            <p>Voyage sur mesure</p>
            <p>Nous faisons votre voyage uniquement pour vous et vos envies</p>
          </div>
          <div class="btn-2"><a href="#">En savoir plus</a></div>
        </article>
        <div class="flex-desktop">
          <article class="mise-en-avant-2">
            <a href="">
          <img src="./images/fond-mea-2.jpg" alt="" class="item"><span class="pub-2">Machin</span></a>
          </article>

          <article class="mise-en-avant-2">
            <a href="">
          <img src="./images/fond-mea-3.jpg" alt="" class="item"><span class="pub-2">Machin</span></a>
          </article>

          <article class="mise-en-avant-2">
            <a href="">
          <img src="./images/fond-mea-4.jpg" alt="" class="item"><span class="pub-2">Machin</span></a>
          </article>

          <article class="mise-en-avant-2">
            <a href="">
          <img src="./images/fond-mea-6.jpg" alt="" class="item"><span class="pub-2">Machin</span></a>
          </article>
        </div>
      </section>
    </div>
    <section>
      <article class="insta-storie">
        <div class="title">
          <img src="./images/insta.png" alt="">
          <h2>Découvrez les stories de nos voyageurs en direct</h2>
        </div>

        <ul class="rslides">
          <li><img class="insta-1" src="./images/mock-up-insta-1.png" alt=""></li>
          <li><img class="insta-2" src="./images/mock-up-insta-2.png" alt=""></li>
          <li><img class="insta-3" src="./images/mock-up-insta-3.png" alt=""></li>
        </ul>

      </article>
    </section>

    <section>
      <article class="argument">
        <p>C'est bien beau, mais pourquoi nous ?</p>
        <p>Pour savoir s’il y a du vent, il faut mettre son doigt dans le cul du coq. Si Kadoc il surveille bien, il aura des p'tits cubes de fromage.Il faut pas respirer la compote, ça fait tousser.</p>

        <iframe width="660" height="415" src="https://www.youtube.com/embed/jRgjVS6IPM0?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        


      </article>
    </section>
    <div class="container">
      <section>
        <article class="twitter">
          <div class="title">
            <img src="./images/picto-twitter.png" alt="">
            <h2>Venez sur twitter, pour connaître les dernières nouvelles !</h2>
          </div>
          <ul class="rslides">
            <li><img src="./images/Tweet-1.jpg" alt=""></li>
            <li><img src="./images/tweet-2.jpg" alt=""></li>
            <li><img src="./images/tweet-3.jpg" alt=""></li>
          </ul>
        </article>
      </section>
    </div>

  </main>

  <?php getFooter(); ?>



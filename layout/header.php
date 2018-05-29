<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/jquery.sidr.light.min.css">
  <link rel="stylesheet" href="./css/styles.css">
  <title>AZTREK</title>
</head>

<body>

  <header>
   
<?php getMenu(); ?>

      <div class="header-content">

        <div class="logo">
          <img src="./images/logo.png" alt="">
        </div>


        <p>Un voyage sur mesure ?</p>
        <div class="btn"><a href="#">En savoir plus</a></div>
        <span class="ou"><p>ou</p></span>


        <p></p>

        <form action="#" method="GET">
          <p><label for="inspi">Besoin d'inspiration ?</label><br/>
            <select name="pays" id="pays">
          <option value="type">TYPE DE VOYAGE</option>
           <option value="mexique">Mexique</option>
           <option value="honduras">Honduras</option>
           <option value="costa rica">Costa Rica</option>
           <option value="yucatan">Yucatan</option>
       </select></p>
          <input type="submit" value="Go !" class="btn-go btn-primary" />
        </form>

      </div>
    </div>
  </header>
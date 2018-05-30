


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/jquery.sidr.light.min.css">
  <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="./css/styles.css">
  <title>AZTREK | <?php echo $title; ?></title>
</head>

<body>

  <header>
   
<?php getMenu(); ?>

      <div class="header-content">

        <div class="logo">
          <a href="<?php echo SITE_URL; ?>"><img src="./images/logo.png" alt=""></a>
        </div>


       <?php if ($title == 'Accueil') {
    getConfigurateur();
} else {
    '';
}
       ?>


      </div>
    </div>
  </header>
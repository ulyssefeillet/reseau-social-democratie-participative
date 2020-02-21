<!DOCTYPE html>
<html lang="fr">
      <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="Ulysse Feillet">
      <title>Accueil</title>
      <!-- Bootstrap core CSS -->
      <!--link rel="stylesheet" href="./css/bootstrap/4.2.1/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"-->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
      <!-- Custom styles for this page -->
      <link rel="stylesheet" href="index.css">
      <link href="./css/bootstrap/4.2.1/carousel.css" rel="stylesheet">
      <link rel="icon" href="favicon.ico" />
    </head>
         <?php $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'admin', 'admin'); ?>
        <?php $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); ?>
    <body>

        <main>

             <header>
         <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">Titre</a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                     <a class="nav-link" href="index.html">Accueil</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="actus.html">Actualités</a>
                  </li>

                  <li class="nav-item">
                     <a class="nav-link" href="blog.html">Temoignages</a>
                  </li>
                 </ul>
                  <div class="headerRight">

                  <form class="form-inline mt-2 mt-md-0">

                  <button type="button" class="btn btn-primary my-2 mr-3 créerCompte">Connexion</button>

                     <input class="form-control mr-sm-3" type="text" placeholder="Search" aria-label="Search">

                     <button class="btn my-2 my-sm-0 btn-primary" type="submit">Search</button>

                 </form>
          </div>

            </div>
         </nav>
      </header>

  <body>


    <aside>
        <div class="aside">
            <h4><p>Trier par </p></h4>
           <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
               <label class="form-check-label" for="inlineCheckbox1">catégorie</label>
          </div>
          <div class="form-check form-check-inline">
             <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
             <label class="form-check-label" for="inlineCheckbox2">popularité</label>
          </div>
          </div>
    </aside>



    <div class="blog-header">
      <div class="container col-sm-8">
        <h1 class="blog-title">Propositions</h1>
        <hr> <hr>
      </div>
    </div>


    <?php $reponse = $bdd->query('SELECT nomProposition, numProposition, DesDetaillee, DateAjout, DesCourte FROM proposition'); ?>
    <?php while ($donnees = $reponse->fetch()) { ?>

    <div class="container col-sm-8">
      <div class="row">
        <div class="col-sm-12 blog-main">

          <div class="blog-post">

            <h2 class="blog-post-title"><?php echo $donnees['nomProposition']; ?></h2>
            <p class="blog-post-meta"><?php echo $donnees['DateAjout']; ?></p>
            <p> <?php echo $donnees['DesCourte']; ?> </p>



          </div><!-- /.blog-post -->
          <div class="form-group col-md-2 bloc2">
              <button class="btn btn-sm btn-primary" type="submit" value="Envoyer">Signaler</button>
             <a href="affiche_commentaires.php?idP='<?php echo $donnees['numProposition'] ?>'"> <button class="btn btn-sm ml-2 btn-primary" type="submit" value="Envoyer">Commenter</button> </a>


        </div>

        </div><!-- /.blog-main -->

      <hr>
      </div><hr>
  </div><?php }  ?>




    </main>

        <script src="/js/jquery.min.js"></script>
        <script src="/js/drawer.js"></script>
  <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    </body>

</html>

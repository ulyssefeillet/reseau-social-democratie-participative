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
        <?php $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'admin', 'admin'); ?>
        <?php $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); ?>
      <link rel="icon" href="favicon.ico" />
	</head>

	<body id="body">

		<div id="fb-root"></div>

		<main>

			 <header>
         <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		   <img id="logo" src="logo.png" width="60" height="55" alt="logo"/>
            <a class="navbar-brand" href="#">Titre</a>
          
            <div class="collapse navbar-collapse" id="navbarCollapse">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                     <a class="nav-link" href="index.html">Accueil</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="actus.html">Actualités</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nouveautés</a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="nouveautes.html">Nouveautés</a>
                        <a class="dropdown-item" href="automne.html">Sorties Automne 2018</a>
                     </div>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Album</a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                        <a class="dropdown-item" href="album.html">Animes</a>
                        <a class="dropdown-item" href="incontournables.html">Incontournables</a>
                     </div>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="blog.html">Temoignages</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="ressources.html">Ressources</a>
                  </li></ul>
				  <div class="headerRight">
                  <form class="form-inline mt-2 mt-md-0">
				  <button type="button" class="btn btn-primary my-2 mr-3 créerCompte">Connexion</button>
            <input class="form-control mr-sm-3" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0 btn-primary" type="submit">Search</button>
          </form> </div>
               
            </div>
         </nav>
      </header>
			 <div class="blog-header">
      <div class="container col-sm-8">
        <h1 class="blog-title">Création de proposition</h1>
        <hr> <hr>
      </div>
    </div>

		 <div class="container bloc">

    </br>
  </br>
  <h4 class="mb-3">Créer une proposition</h4>
  <form action="../controleurs/proposition.php" method="POST">

    <div class="row">

      <div class="form-group col-md-4">
        <label for="address">Nom</label>
        <input type="text" name="nom" class="form-control"  required>

      </div>

      <div class="form-group col-md-4 col-md-offset-1">
        <label for="address">Description courte</label>
        <input type="text" class="form-control" id="address" name="descC" required>

      </div>


      <div class="form-group col-md-4">
        <label for="username">Description longue</label>
        <div class="input-group">

          <input type="text" class="form-control" id="username" name="descL">

        </div>
      </div>


      <div class="form-group col-md-4 col-md-offset-1">
        <label for="address">Date clôture</label>
        <input type="text" class="form-control" id="address" name="DateCloture" required>

      </div>

<?php $reponse = $bdd->query('SELECT nomCategorie FROM categorie'); ?>
 
      <div class="form-group col-md-8">
        <label for="email">Associer à une catégorie</label>
   <?php while ($req = $reponse->fetch()) { ?>
       
          <div> <input type="radio" id="huey" name="radioB" >
             <label for="huey"><?php echo $req['nomCategorie']; ?></label>
            </div>
           <?php } ?>
      </div>

		
      <div class="form-group col-md-4">
        <button class="btn btn-info" type="submit" value="Envoyer">Envoyer</button>
      </div>

    </div>
  </div>
</form>

		</main>

		
  <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

	</body>

</html>

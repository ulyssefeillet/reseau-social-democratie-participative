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
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


	  <!-- Custom styles for this page -->
      <link rel="stylesheet" href="index.css">
      <link href="./css/bootstrap/4.2.1" rel="stylesheet">
      <link rel="icon" href="favicon.ico" />
	</head>
	 	<?php $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', ''); ?>
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


    <div class="blog-header">
      <div class="container col-sm-10">
        <h1 class="blog-title">Description</h1>
		<hr> <hr>
      </div>
    </div>




    <?php $proposition = $_GET['idP'];?>

    <?php $reponse = $bdd->query("SELECT nomProposition, DesDetaillee, ResultatPour, ResultatContre FROM proposition WHERE numProposition = $proposition "); ?>
    <?php $req = $reponse->fetch() ?>

    <?php $reponse2 = $bdd->query("SELECT numMembre, texte, dateCommentaire FROM commentaire WHERE numProposition = $proposition"); ?>




<main role="main" class="container col-sm-10">

   <div class="jumbotron">
    <h1><?php echo $req['nomProposition']; ?></h1>
    <p class="lead"> <?php echo $req['DesDetaillee']; ?></p>
	Vote :
	   <button class="btn btn-sm mb-4 bloc2 ligne" type="submit" value="Envoyer"><img src="pouceRouge2.png" width="60" height="65">J'aime pas <button class="btn btn-sm btn-success" ><?php echo $req['ResultatContre']; ?></button></button>
	   <button class="btn btn-sm mb-4 bloc2 ligne" type="submit" value="Envoyer"><img src="pouceVert2.png" width="60" height="65">J'aime <button class="btn btn-sm btn-danger"><?php echo $req['ResultatPour']; ?></button></button><br><br>
	<a class="btn btn-lg btn-primary mb-4 mt-4 but2" data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapse1">Montrer les commentaires &raquo;</a>

	<div class="collapse " id="collapse1">
	<?php while ($req2 = $reponse2->fetch()) { ?>
	<div class="panel panel-success">
      <div class="panel-heading ligne"><?php echo $req2['numMembre']; ?> le <?php echo $req2['dateCommentaire']; ?></div>
      <div class="panel-body"> <p><?php echo $req2['texte']; ?></p>
	    <button class="btn btn-sm ml-2 btn-primary " type="submit" value="Envoyer">Répondre</button>

	  </div>
    </div>  <?php }  ?>
	<!-- Poster un commentaire -->
	<form action="" id="form-content" method="post" >
		<h4> Poster un commentaire </h4>
		<div class="form-group">
			 <textarea class="form-control" id="exampleFormControlTextarea1" name="texte" rows="3"></textarea>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Commenter</button>
		</div>
	</form>
	</div>
	    <?php // if (isset($_POST['texte'])) { $comment = $_POST['texte']; } else { $comment = ""; } ?>
	    <?php //$sql =  $bdd->prepare("INSERT INTO `commentaire`(`texte`,`numMembre`,`numProposition`,`dateCommentaire` ) VALUES (?,?,?,?)"); ?>
		<?php //$sql->execute(array($comment,"",$proposition, "")); ?>


  </div>



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

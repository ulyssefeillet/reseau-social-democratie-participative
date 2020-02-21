<!doctype html>
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
   <body>
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
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Propositions</a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="propositions.html">Propositions</a>
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
                     <a class="nav-link" href="propositions.html">Propositions</a>
                  </li>
                 </ul>
				  <div class="headerRight">
                  <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-3" type="text" placeholder="Search" aria-label="Search">
            <button class="btn my-2 my-sm-0 btn-primary" type="submit">Search</button>
          </form> </div>
               
            </div>
         </nav>
      </header>
      <main>
        
		
      
	  <h1> Bienvenue sur (...) </h1>
	  
	  <main role="main" class=" container bloc">
  <div class="row">
    <div class="col-md-12 blog-main">
      <h3 class="blog-post-title center ">
	  <hr>
        Groupes
	  <hr><hr>
      </h3>
		
        <?php 

      <div class="blog-post">
        <h2 class="pb-4 mb-4 font-italic"><?php echo $rep['nomGroupe']; ?></h2>
        <p class="blog-post-meta"><?php echo $rep['dateCreation']; ?> </p>
	
	  </div>
	  
		<div class="form-group col-md-4 bloc2">
              <button class="btn btn-lg btn-primary" type="submit" value="Envoyer">Accéder aux groupes</button>
         
	    </div> 
	 <br><br>
	  
	   </div> 
	  </div> <hr><br><br>
	  
	  <div class="row">
    <div class="col-md-12 blog-main">
      <h3 class="blog-post-title center ">
	  <hr>
        Propositions
	  <hr><hr>
      </h3>
		
      <div class="blog-post">
        <h2 class="pb-4 mb-4 font-italic">Proposition1</h2>
        <p class="blog-post-meta">January 1, 2014 by <a href="#">Utilisateur1</a></p>
	
	  </div>
	  <div class="blog-post">
        <h2 class="pb-4 mb-4 font-italic">proposition2</h2>
        <p class="blog-post-meta">January 1, 2014 by <a href="#">Utilisateur2</a></p>

	  </div>
		<div class="form-group col-md-4 bloc2">
              <button onclick="window.location.href='propositions.html'" class="btn btn-lg btn-primary" type="submit" value="Envoyer">Accéder aux propositions</button>
         
	    </div> 
	 <br><br>
	  
	   </div> 
	  </div> <hr>
	  
      </main>
	  
    
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
   </body>
</html>

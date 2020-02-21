<!DOCTYPE html>
<html lang="fr">

	<head>
        <meta charset="utf-8">
        <title> Premier script </title>

	</head>

    <body>
    
           <form method="post" action="../controleurs/connexion.php">
            </br>
            <label class=pseudo> Pseudo : </label>
            <input type="text" name="login" id="pseudo"></br></br>
            <label class=mdpasse> Mot de passe </label>
            <input type="text" name="motdepasse" id="mdp"></br></br>

            <input type="submit" name="connecter" id="connecter" value="Se connecter"></br>
            </form>
    </body>
</html>

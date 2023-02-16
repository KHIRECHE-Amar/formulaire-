<?php

session_start();
$bdd = new PDO('mysql:host=localhost;dbname=minitchat;','root','root');

if(isset($_POST['insc'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
    
        $pseudonyme_saisi = htmlspecialchars($_POST['pseudo']);
		$salt = "Amirouche12345474"; 
		$mdp = $_POST['mdp'].$salt;
        $motdepasse_saisi = password_hash($mdp, PASSWORD_DEFAULT);
		
        

        

        $inscription = $bdd->prepare('INSERT INTO utilisateursss(pseudonyme, motdepasse)VALUES(?, ?)');

        $inscription->execute(array($pseudonyme_saisi, $motdepasse_saisi));
        

        header('Location: conexion.php');
    }else 
    {
        echo "erreure d'inscription";
    }
}
?>
<html> 
<head>
	<title>Espace de connexion admin</title>
	<meta charset="utf-8">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
</head>
<body>
<div class="p-3 mb-2 bg-secondary text-white">
<header>
  <nav>
  <ul>
    <li><a href="conexon.php" class="btn btn-primary">connexion</a></li>
  </ul>
  </nav>
</header>
<body>
                <div style="text-align: center;">
         
		<img src="photo.png" style="width: 100px; height: 100px;" >
		</div>
            
    </body>
	
	<form method="POST" action="">
		<div align="center">
			<br><br>
			<h1>Inscription</h1>
			<br><br>
			<input type="text" name="pseudo" placeholder=" pseudonyme">
			<br><br>
			<input type="password" name="mdp" placeholder="motdepasse">
			<br><br>
			<input type="submit" name="insc" value="inscription" class="btn btn-success">
		</div>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		
	</form>
	
</body>
</html>

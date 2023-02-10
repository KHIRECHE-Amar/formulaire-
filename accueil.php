<?php
session_start();
if(!$_SESSION['admin'] AND !$_SESSION['mdp']){
    header('Location: conexion.php');
}else{ 

	




?>

<!DOCTYPE html >
<html> 
<head>
	<title>accueil</title>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
</head>
<body>
	<div align="center" class="p-3 mb-2 bg-info text-dark">
		<h1>Accueil</h1>
	</div>
	<header>
  <nav>
  <ul>
    <li><a href="deconnexion.php" class="btn btn-primary">Deconnexion</a></li>
  </ul>
  </nav>
</header>
	
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	
</body>

</html><?php }  ?>
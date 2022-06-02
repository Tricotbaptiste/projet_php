<?php
// Initialiser la session
session_start();
// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); 
}
?>
<!DOCTYPE html>
<html>
<head>

<link rel="nofollow" href='' />
</head>
<body style="border: thick double; background-color:https://runiacorp.eu/logo1.png">
<div class="sucess">
<h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
<p>C'est votre espace utilisateur.</p>
<br>

<a href='login.php'>Déconnexion</a>
</div>
</body>
</html>
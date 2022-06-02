<html>
<head>
  
<link rel="stylesheet" href="styl.css" >
</head>
<body>

<?php
//recherche:
//SELECT * FROM `champions` WHERE `name` LIKE 'N%';

// Informations d'identification
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'lol');
 
// Connexion à la base de données MySQL 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);



// On créé la requête
$req = "SELECT * FROM champions";
 
// on envoie la requête
$res = $conn->query($req);
 
/*
$compteur=0;

echo "<h1 align='center'>Champions</h1>";
echo "<table style='border:thick double' align='center'>";
//echo "<tr><td style='border: solid'>Image</td><td style='border: solid'>Nom</td><td style='border: solid'>Titre</td><td style='border: solid'>Tags</td></tr>";
while ($data = mysqli_fetch_array($res)) {
    // on affiche les résultats
    
    echo "<td><img src='icons/".$data['id'].".jpg' class='center'><br><p align='center'>".$data['name']."</p></td>";
    ++$compteur;
    if ($compteur==12){
        echo "</tr>";
        $compteur =0; }
}
echo "</table>"; */
?>
</body>

</html>

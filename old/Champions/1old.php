<html>
<head>
  

<style>
    body { background-image: url('../wp1.jpg');
        background-color:black;
        background-repeat: no-repeat;;}
    table { background-color:#177F9B;
        color:white;
    
    }
    button { color:white}

    .button {
  display: inline-block;
  padding: 15px 15px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: white;
  background-color: black;
  border: none;
  border-radius: 5px;
  box-shadow: 0 7px #999;
}

.button:hover {background-color: blue}

.button:active {
  background-color:#2a8ddd;
  box-shadow: 0 4px #666;
  transform: translateY(4px);
}





    </style>
</head>
<body>
<div  class="dropdown">
  <button class="dropbtn">Menu</button>
  <div class="dropdown-content">
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
    <a href="main.php">Main Menu</a>
  </div>
</div>
<?php
//recherche:
//SELECT * FROM `champions` WHERE `name` LIKE 'N%';

// Informations d'identification

 
require('../config.php');



// On créé la requête
$req = "SELECT * FROM champions";
 
// on envoie la requête
$res = $conn->query($req);
 

$compteur=0;
$data = mysqli_fetch_array($res);
echo "<h1 align='center'>".$data['name']."</h1>";
echo "<table style='border:thick double' align='center'>";
//echo "<tr><td style='border: solid'>Image</td><td style='border: solid'>Nom</td><td style='border: solid'>Titre</td><td style='border: solid'>Tags</td></tr>";

    // on affiche les résultats
    
    echo "<tr><td style='border:5px solid'><img src='../portraits/".$data['id'].".jpg'/><br><h1>".$data['name']."</h1></td><td>test</td></tr>";

echo "</table>";
?>
</body>

</html>

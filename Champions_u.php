<html>
<head>
  
<!-- <link rel="stylesheet" href="style.php" media="screen">-->
<style>
    body { background-image: url('wp1.jpg');
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
div {
 text-align:center;
}



.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
  };



  .dropbtn {
    background-color: blue;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    margin:left;
  }
  
  .dropdown {
    position: relative;
    display: inline-block;
    margin: 0 auto;
  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }
  
  .dropdown-content a:hover {background-color: rgb(248, 72, 140);}
  
  .dropdown:hover .dropdown-content {display: block;}
  
  .dropdown:hover .dropbtn {background-color: #f501c0;}


  .box {
    background-color: #ff0783;
  }






    </style>
</head>
<body>
<div style='border: 4px solid'>
<div  class="dropdown">
  <button class="dropbtn">Menu</button>
  <div class="dropdown-content">
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
    <a href="main.php">Main Menu</a>
  </div>
</div>
<div style='border: 4px solid; width: 200px; margin: auto;  background-color:white;'
 ><h1 style='color:black;'>Champions</h1></div></br>
 <a href="champ_recherche.php"><input type='text' placeholder="Rechercher un Champion" style='margin:auto'></a>
</div>
<?php





//recherche:
//SELECT * FROM `champions` WHERE `name` LIKE 'N%';

// Informations d'identification

 
require('config.php');



// On créé la requête
$req = "SELECT * FROM champions";
 
// on envoie la requête
$res = $conn->query($req);
 

$compteur=0;
//echo "";
//echo "<div style='border: 4px solid; width: 200px; margin: auto;
//' align='center'><h1 style='color:black' align='center'>Champions</h1></div></br>";
// echo "</div>";
 echo "<table style='border:thick double' align='center'>";
//echo "<tr><td style='border: solid'>Image</td><td style='border: solid'>Nom</td><td style='border: solid'>Titre</td><td style='border: solid'>Tags</td></tr>";
while ($data = mysqli_fetch_array($res)) {
    // on affiche les résultats
    
    echo "<td><a href='Champions/uni.php?idd=".$data['id']."' style='color:white'><input type='image' src='icons/".$data['id'].".jpg' class='button'/><br><p align='center'>".$data['name']."</p></a></td>";
    ++$compteur;
    if ($compteur==8){
        echo "</tr>";
        $compteur =0; }
}
echo "</table>";
?>


                   







</body>

</html>




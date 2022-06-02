<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" media="screen" type="text/css" href="styl.css"/>
<meta charsert='UTF-8'>
</head>
<body class='body-item'>

<div  class="dropdown">
  <button class="dropbtn">Menu</button>
  <div class="dropdown-content">
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
    <a href="main.php">Main Menu</a>
  </div>
</div>
<div align='center'>
<h1 class='title-ia'>Items</h1>
</div>
<?php


 
require('config.php');



// On créé la requête
$req = "SELECT * FROM items";
 
// on envoie la requête
$res = $conn->query($req);
 

$compteur=0;



echo "<table class='table-ia' align='center'>";

while ($data = mysqli_fetch_array($res)) {


    echo "<td><a href='items/items-forme.php?idd=".$data['id']."' style='color:white'><input type='image' src='items/".$data['id'].".png' class='button-ia'/><br><p align='center'>".$data['name']."</p></a></td>";
    ++$compteur;
    if ($compteur==7){
        echo "</tr>";
        $compteur =0; }
}
echo "</table>";
?>
</body>

</html>
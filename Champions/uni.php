<html>
<head>
<link rel="stylesheet" media="screen" type="text/css" href="../styl.css"/>
</head>
<body class='register-body'>


<div  class="dropdown">
  <button class="dropbtn">Menu</button>
  <div class="dropdown-content">
    <a href="../login.php">Login</a>
    <a href="../register.php">Register</a>
    <a href="../main.php">Main Menu</a>
    <a href="../Champions.php">Page champions</a>
  </div>
</div>
<?php

require('../config.php');
    
$id=$_GET['idd'] ;
    
$req = "SELECT * FROM champions WHERE id=".$id;
 
// on envoie la requête
$res = $conn->query($req);
$resi = $conn->query("SELECT * FROM items WHERE id=".$id);
$data = mysqli_fetch_array($res);
$datai = mysqli_fetch_array($resi);
$resa = $conn->query("SELECT * FROM champion_abilities");
$dataa = mysqli_fetch_array($resa);


$id1=$data['id'];
//settype($id1, "integer");
//$id2=$id1+1;
//$id3=$id1+2;
//$id4=$id1+3;
//$id5=$id1+4;


$requin = "SELECT * FROM champion_abilities WHERE champion=$id1 AND id=1";
$req2 = "SELECT * FROM champion_abilities WHERE champion=$id1 AND id=2";
$req3 = "SELECT * FROM champion_abilities WHERE champion=$id1 AND id=3";
$req4 = "SELECT * FROM champion_abilities WHERE champion=$id1 AND id=4";
$req5= "SELECT * FROM champion_abilities WHERE champion=$id1 AND id=5";
//faire pareil avec $resa12345 et $dataa12345
$resa1 = $conn->query($requin);
$resa2 = $conn->query($req2);
$resa3 = $conn->query($req3);
$resa4 = $conn->query($req4);
$resa5 = $conn->query($req5);

$dataa1 = mysqli_fetch_array($resa1);
$dataa2 = mysqli_fetch_array($resa2);
$dataa3 = mysqli_fetch_array($resa3);
$dataa4 = mysqli_fetch_array($resa4);
$dataa5 = mysqli_fetch_array($resa5);

/*
$stats = "SELECT * FROM champion_stats WHERE id=$id1 AND name='Damage'";
$res_statss = $conn->query($stats);
$data_stats = mysqli_fetch_array($res_statss);

*/




echo (
"<div align='center'>
<h1 class='title-ia'>".$data['name']."</h1>
<h3 class='subtitle-ia' >".$data['title']."</h3>
<h5 class='subtitle-ia'>".$data['tags']."</h5>
<div class='box-table'>


<table>

<colgroup>
    <col span='1' >
    <col span='1' >
</colgroup>


    <th scope='col'><img class='portrait' src='../portraits/".$data['id'].".jpg'></th>

</br>
<th scope='col'>


<h1 class='spell-box'>
<img src='../spells/".$data['id']."-5.png'>
".$dataa5['name']."
</h1>

</td>
 

<h1 class='spell-box'>
<img src='../spells/".$data['id']."-1.png'>
".$dataa1['name']."
</h1>

</td>


<h1 class='spell-box'>
<img src='../spells/".$data['id']."-2.png'>
".$dataa2['name']."
</h1>

</td>


<h1 class='spell-box'>
<img src='../spells/".$data['id']."-3.png'>
".$dataa3['name']."
</h1>

</td>


<h1 class='spell-box'>
<img src='../spells/".$data['id']."-4.png'>
".$dataa4['name']."
</h1>

</th>

</table>
<p class='spell-box'>

</p>

</div>
</div>");
$compteur=0;
while ($data = mysqli_fetch_array($res)) {
  // on affiche les résultats
  
  echo "<input type='image' src='../items/".$data['id'].".jpg' class='button'/><br><p align='center'>".$data['name']."</p>";
  ++$compteur;
  if ($compteur==8){
      echo "</tr>";
      $compteur =0; }
}
?>
<?php
$reee= $res_stats->num_rows;
if($reee>0){
    echo "<table style='border:thick double' align='center'>";
    while($data = mysqli_fetch_array($res_stats)){
        echo(
       // "<p>".$data['name']."</p>
       // <p>".$data['title']."</p>
       // "
       "<td><a href='Champions/".$data['id'].".php' style='color:white'><input type='image' src='icons/".$data['id'].".jpg' class='button'/><br><p align='center'>".$data['name']."</p></a></td>"



        );
        }
        echo "</table>";
      }
      ?>
</body>
</html>
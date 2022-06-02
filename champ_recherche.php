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
    background-color: #fa00e5;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    margin:left;
  }
  
  .dropdown {
    position: relative;
    display: inline-block;
    margin: left;
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
<?php
require('config.php');
$req = "SELECT * FROM champions";
 
// on envoie la requête
$res = $conn->query($req);




if(isset($_GET['q']) AND !empty($_GET['q'])){
            $rechercher=htmlspecialchars($_GET['q']);
            $champ = $conn->query('SELECT * FROM champions WHERE name LIKE "'.$rechercher.'%"  ORDER BY id DESC');
        }

        ?>
        <form method="GET" align="center">
        <input type="search" name="q" placeholder="Rechercher un Champion" autocomplete='off'  size="100"/>
    </br>
    </br>
        <input type="submit" value="Valider" style="width:200px ; height:40px" />
        </form>

    <section class="jsp">
        <?php
            $res= $champ->num_rows;
            if($res>0){
                echo "<table style='border:thick double' align='center'>";
                while($data = mysqli_fetch_array($champ)){
                    echo(
                   // "<p>".$data['name']."</p>
                   // <p>".$data['title']."</p>
                   // "
                   "<td><a href='Champions/uni.php?idd=".$data['id']."' style='color:white'><input type='image' src='icons/".$data['id'].".jpg' class='button'/><br><p align='center'>".$data['name']."</p></a></td>"



                    );
                    }
                    echo "</table>";
                  }
                  ?>
                </section>
                </body>
                </html>
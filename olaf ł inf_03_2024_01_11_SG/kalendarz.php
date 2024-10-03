<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadania na lipiec</title>
    <link rel="stylesheet" href="styl6.css">
    <title>Zadania na lipiec</title>
</head>
<body>
    <header>
    <div class="baner1">
    <img src="logo1.png" height="140px" alt="lipiec">
    </div>
    <div class="baner2">
    <h1>TERMINARZ</h1>
    <p>najbliższe zadanie
     <?php
    $serwer = 'localhost';
    $uzytkownik = 'root';
    $password = '';
    $dbname = 'terminarz';

     $db = mysqli_connect ($serwer,$uzytkownik,$password,$dbname);
     
     $q = 'SELECT DISTINCT wpis FROM `zadania` WHERE dataZadania BETWEEN "2020-07-01" and "2020-07-07" and wpis <> "";';
     
     $zadania ="";
     $r = mysqli_query($db,$q);
     while($row = mysqli_fetch_array($r)) {
        $zadania .= $row["wpis"] . "; " ;
     }
     echo $zadania;
    ?>
    </p>
    </div>
</header>
<main> 
    
    
        <?php

         $serwer = 'localhost';
         $uzytkownik = 'root';
         $password = '';
         $dbname = 'terminarz';
         $db = mysqli_connect ($serwer,$uzytkownik,$password,$dbname);
         $q = 'SELECT dataZadania , wpis FROM `zadania` WHERE miesiac = "lipiec";'; 
         $r = mysqli_query($db,$q);
         while($row = mysqli_fetch_array($r)) {
        echo '<section class="blokg">
        <h6>'.$row["dataZadania"].'</h6>
        <p>' .$row["wpis"].'</p> </section>';
        }      
        ?>
        
</main>
    
    
   


    <div class="stopka">
<a href="sierpien.html">Terminarz na sierpień</a>
<p>Stronę Wykonał Olaf Łukaszewicz</p>
    </div>

</body>
</html>
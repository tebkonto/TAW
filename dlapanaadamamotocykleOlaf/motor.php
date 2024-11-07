<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Motocykle</title>
        <link rel="stylesheet" href="styl.css">
    </head>
    <body>
        <img src="motor.png" alt="motocykl" id="motor">
        <header>
            <h1>Motocykle - moja pasja</h1>

        </header>
        <main id="lewy">
            <h2>Gdzie pojechać?</h2>
            <dl>
                <?php
                $serwer ='localhost';
                $uzytkownik ='root';
                $password = '';
                $baza='motory';
                $db = mysqli_connect($serwer, $uzytkownik, $password, $baza);
                $q = 'SELECT nazwa, opis, poczatek, zrodlo FROM wycieczki JOIN zdjecia ON zdjecia_id = zdjecia.id;';
                $result = mysqli_query($db, $q);
                while($row = mysqli_fetch_array($result)){
                    echo '<dt>'.$row['nazwa'].' rozpoczyna sie '.$row['poczatek'].'<a href="'.$row['zrodlo'].'"> zobacz zdjecie</a></dt>';
                    echo '<dd>'.$row['opis'];
                    
                }
                ?>
             
            </dl>

        </main>
        <main id="prawy">
            <h2>Co kupić?</h2>
            <ol>
                <li>Honda CBR125R</li>
                <li>Yamaha YBR125</li>
                <li>Honda VFR800i</li>
                <li>Honda CBR1100XX</li>
                <li>BMW R1200GS LC</li>
            </ol>
        </main>
        <main id="prawy2">
            <h2>Statystyki</h2>
            <p>
                <?php
                $q = 'SELECT COUNT(*) AS ilosc FROM wycieczki;';
                $result = mysqli_query($db, $q);
                while($row = mysqli_fetch_array($result)){
                    echo '<p>Wpisanych wycieczek: '.$row['ilosc'];
                    
                }

                
                ?>
            </p>
            <p>
                Użytkowników forum: 200
            </p>
            <p>
                Przesłanych zdjęć: 1300
            </p>

        </main>
        <footer>
            <p>
                Stronę wykonał Olaf 69696969696969
            </p>

        </footer>

    </body>
</html>

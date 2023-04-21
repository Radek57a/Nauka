<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwiaty</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <section class="baner">
        <h3>Moje kwiaty</h3>
    </section>
    <section class="panele">
        <section class="panellewy">
            <h3>Kwiaty dla ciebie</h3>
            <a href="https://www.swiatkwiatow.pl/">Rozpoznaj kwiaty</a><br>
            <a href="znajdz.php">Znajdź kwiaciarnię</a><br>
            <img src="gozdzik.jpeg" alt="Goździk">
        </section>
        <section class="panelprawy">
            <section class="kwiatki">
                <img src="gerbera.jpeg" alt="gerbera">
                <img src="gozdzik.jpeg" alt="gozdzik">
                <img src="roza.jpeg" alt="roza">  
            </section>
            <p>Podaj miejscowość, w której poszukujesz kwiaciarni:</p>

            <form action="znajdz.php" method="post">
            <input type="text" name="miasto">
            <button name="wyslij">SPRAWDŹ</button>
            </form>

            <?php

            if(isset($_POST ['wyslij']))
                {
                    $miasto= $_POST['miasto'];
                    $conn = mysqli_connect('localhost','root','','kwiaciarnia');
                
                    $zapytanie1 = "SELECT `nazwa`, `ulica` FROM `kwiaciarnie` WHERE miasto='$miasto';";
                    $wynik = mysqli_query($conn,$zapytanie1);

                    while ($row = mysqli_fetch_array($wynik)){
                        echo "$row[0],$row[1]";
                    }
                }
            ?>

        </section>
    </section>
    <footer class="stopka">
        <h3>Stronę opracował:03333310900</h3>
    </footer>
</body>
</html>
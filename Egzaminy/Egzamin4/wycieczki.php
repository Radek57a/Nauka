<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki i urlopy</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <section class="baner">
        <h1>BIURO PODRÓŻY</h1>
    </section>
    <section class="bloki">
        <section class="bloklewy">
            <h2>KONTAKT</h2>
            <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
            <p>telefon: 555666777</p>
        </section>
        <section class="bloksrodek">
            <h2>GALERIA</h2>
            <?php
                $conn = mysqli_connect('localhost','root','','egzamin3');
                $zapytanie2 = "SELECT `nazwaPliku`,`podpis` FROM `zdjecia` ORDER BY `podpis` ASC";
                $wynik = mysqli_query($conn,$zapytanie2);

                while($row=mysqli_fetch_array($wynik)){
                    echo "<img src='$row[0]' alt='$row[1]'/>";
                }
                mysqli_close($conn);
            ?>
        </section>
        <section class="blokprawy">
            <h2>PROMOCJE</h2>
            <table>
                <tr><td>Jesień</td><td>Grupa 4+</td><td>Grupa 10+</td></tr>
                <tr><td>5%</td><td>10%</td><td>15%</td></tr>
            </table>
        </section>
    </section>
    <section class="blokdane">
        <h2>LISTA WYCIECZEK</h2>
        <?php
            $conn = mysqli_connect('localhost','root','','egzamin3');
            $zapytanie1 = "SELECT `id`, `dataWyjazdu`,`cel`, `cena`, `dostepna` FROM `wycieczki` WHERE dostepna=TRUE";
            $wynik2 = mysqli_query($conn,$zapytanie1);

            while($row=mysqli_fetch_array($wynik2)){
                echo $row[0].' '.$row[1].','.$row[2].', cena: '.$row[3].'<br>';
            }
            mysqli_close($conn);
        ?>
    </section>
    <footer class="stopka">
        <p>Stronę wykonał: 03222210911</p>
    </footer>
    
</body>
</html>

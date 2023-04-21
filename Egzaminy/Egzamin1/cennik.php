<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokoje</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <section class="banner1">
        <h2>WYNAJEM POKOI</h2>
    </section>
    <section class="menu">
        <section class="menu1">
            <a href="index.html">POKOJE</a>
        </section>
        <section class="menu2">
            <a href="cennik.php">CENNIK</a>
        </section>
        <section class="menu3">
            <a href="kalkulator.html">KALKULATOR</a>
        </section>
    </section>
    <section class="banner2"></section>
    <section class="menud">
        <section class="lewy"></section>
        <section class="srodek">
            <H1>Cennik</H1>
            <table>
                <?php
                $conn = mysqli_connect('localhost','root','','wynajem');

                $zapytanie1="SELECT `id`, `nazwa`, `cena` FROM `pokoje`";
                $wynik = mysqli_query($conn, $zapytanie1);
                while($row=mysqli_fetch_array($wynik)){
                    echo '<tr>
                    <td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td>
                    </tr>';
                }

                ?>
            </table>
        </section>
        <section class="prawy"></section>
    </section>
    <footer class="stopka">
        <p>Stronę opracował:00000000000</p>
    </footer>
</body>
</html>
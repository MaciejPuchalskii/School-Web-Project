<?php

session_start();
if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == true)
{
    $napis = "KONTO";
}
else
{
  $napis = "LOGOWANIE";
}

?>
<!doctype html>
<html lang="pl-PL">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Strona o układzie słonecznym oraz planetach">
    <meta name="Autor" content="Maciej Puchalski">
    <title>Planety</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a54d2cbf95.js"></script>

</head>

<body>
    <header>
        <h1>PLANETY</h1>
        <nav>
        <ul>
                <li> <a href="index.php">STRONA GŁÓWNA</a></li>
                <li> <a href="planety.php">PLANETY</a></li>
                <li><a href="forum.php">NEWS</a> </li>
                <li> <a href="logowanie.php">  <?php echo $napis;?></a></li>
            </ul>   
        </nav>
    </header>
    <main>
        <div>

            <table class="planety">
                <tbody>
                    <tr>
                        <td>
                            <img src="Planety/merkury.png" alt="Merkury">
                        </td>
                        <td>
                            <h1 id="Merkury"> Merkury </h1>
                            <p><b>Typ planety:</b> Skalista </p>
                            <p><b>Masa:</b>3,285E23kg</p>
                            <p><b>Średnica na równiku:</b> 4879 [km]</p>
                            <p><b>Ciśnienie atmosferyczne:</b> 10<sup>-12</sup> [hPa]</p>
                            <p><b>Liczba naturalnych saletitów:</b> Brak</p>
                            <p><b>Temperatura na powierzchni:</b> od -173&#8451; do +427&#8451;</p>
                            <p><b>Grawitacja na powierzchni: </b> 3,7 m/s²</p>
                            <p id="Wenus"><b>Czas trwania doby:</b>58dni 15godzin 30 minut</p>
                            <p><b>Czas trwania roku:</b>88ziemskich dni</p>
                            <p><b>Liczba ludności:</b>0</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="image">
                            <img src="Planety/wenus.png" alt="Wenus">
                        </td>
                        <td>
                            <h1> Wenus </h1>
                            <p><b>Typ planety:</b> Skalista </p>
                            <p><b>Masa:</b> 4,867E24 kg</p>
                            <p><b>Średnica na równiku:</b> 12103 [km]</p>
                            <p><b>Ciśnienie atmosferyczne:</b> 92 000 [hPa]</p>
                            <p><b>Liczba naturalnych saletitów:</b> Brak</p>
                            <p><b>Temperatura na powierzchni:</b> od +380&#8451; do +480&#8451;</p>
                            <p><b>Grawitacja na powierzchni: </b> 8,87 m/s²</p>
                            <p id="Ziemia"><b>Czas trwania doby:</b> 243dni</p>
                            <p><b>Czas trwania roku:</b> 225 ziemskich dni</p>
                            <p><b>Liczba ludności:</b> 0</p>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="Planety/ziemia.png" alt="Ziemia">
                        </td>
                        <td>
                            <h1> Ziemia </h1>
                            <p><b>Typ planety:</b> Skalista </p>
                            <p><b>Masa:</b> 5,972E24 kg</p>
                            <p><b>Średnica na równiku:</b> 12 756 [km]</p>
                            <p><b>Ciśnienie atmosferyczne:</b> 1013,25 [hPa]</p>
                            <p><b>Liczba naturalnych saletitów:</b> 1 - księżyc</p>
                            <p><b>Temperatura na powierzchni:</b> od -88,15&#8451; do +57,85&#8451;</p>
                            <p><b>Grawitacja na powierzchni: </b> 9,807 m/s²</p>
                            <p id="Mars"><b>Czas trwania doby:</b> 24h</p>
                            <p><b>Czas trwania roku:</b>365 dni</p>
                            <p><b>Liczba ludności:</b> 7,837 miliarda</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="Planety/mars.png" alt="Mars">
                        </td>
                        <td>
                            <h1> Mars </h1>
                            <p><b>Typ planety:</b> Skalista </p>
                            <p><b>Masa:</b> 6,39E23 kg</p>
                            <p><b>Średnica na równiku:</b> 6 779 [km]</p>
                            <p><b>Ciśnienie atmosferyczne:</b>od 30 do 1155 [Pa]</p>
                            <p><b>Liczba naturalnych saletitów:</b> 2-księżyce</p>
                            <p><b>Temperatura na powierzchni:</b> od -133&#8451; do +27&#8451;</p>
                            <p><b>Grawitacja na powierzchni: </b> 3,721 m/s²</p>
                            <p id="Jowisz"><b>Czas trwania doby:</b> 24h 39minut</p>
                            <p><b>Czas trwania roku:</b>686 dni</p>
                            <p><b>Liczba ludności:</b> 0</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="image">
                            <img src="Planety/jowisz.png" alt="Jowisz">

                        <td>
                            <h1> Jowisz </h1>
                            <p><b>Typ planety:</b> Gazowy Olbrzym </p>
                            <p><b>Masa:</b> 1,898E27 kg</p>
                            <p><b>Średnica na równiku:</b> 139 820 [km]</p>
                            <p><b>Ciśnienie atmosferyczne:</b> 10 130 [hPa]</p>
                            <p><b>Liczba naturalnych saletitów:</b> 80-księżyców</p>
                            <p><b>Temperatura na powierzchni:</b> od -145&#8451; do +21&#8451;</p>
                            <p><b>Grawitacja na powierzchni: </b> 24,79 m/s²</p>
                            <p id="Saturn"> <b>Czas trwania doby:</b> 9,84h</p>
                            <p><b>Czas trwania roku:</b>11 lat 315 dni</p>
                            <p><b>Liczba ludności:</b> 0</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="Planety/saturn.png" alt="Saturn">
                        </td>
                        <td>
                            <h1> Saturn </h1>
                            <p><b>Typ planety:</b> Gazowy Olbrzym </p>
                            <p><b>Masa:</b> 5,683E26 kg</p>
                            <p><b>Średnica na równiku:</b> 116 460 [km]</p>
                            <p><b>Ciśnienie atmosferyczne:</b> 140 [kPa]</p>
                            <p><b>Liczba naturalnych saletitów:</b> 62-księżyce</p>
                            <p><b>Temperatura na powierzchni:</b> min. -191°C , śred. -130 °C</p>
                            <p><b>Grawitacja na powierzchni: </b> 10,44 m/s²</p>
                            <p id="Uran"> <b>Czas trwania doby:</b> 10 godzin, 33 minuty i 38 sekund</p>
                            <p><b>Czas trwania roku:</b> 29,46 </p>
                            <p><b>Liczba ludności:</b> 0</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="Planety/uran.png" alt="Uran">
                        </td>
                        <td>
                            <h1> Uran </h1>
                            <p><b>Typ planety:</b> Gazowy Olbrzym </p>
                            <p><b>Masa:</b> 8,681E25 kg</p>
                            <p><b>Średnica na równiku:</b> 50 724 [km]</p>
                            <p><b>Ciśnienie atmosferyczne:</b> 8 [mBar]</p>
                            <p><b>Liczba naturalnych saletitów:</b> 27-księżyce</p>
                            <p><b>Temperatura na powierzchni:</b> śred. -210 °C</p>
                            <p><b>Grawitacja na powierzchni: </b> 8,87 m/s²</p>
                            <p id="Neptun"><b>Czas trwania doby:</b> 17,24 godzin</p>
                            <p><b>Czas trwania roku:</b> 84 lat </p>
                            <p><b>Liczba ludności:</b> 0</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="Planety/neptun.png" alt="Neptun">
                        </td>
                        <td>
                            <h1> Neptun </h1>
                            <p><b>Typ planety:</b> Gazowy Olbrzym </p>
                            <p><b>Masa:</b> 1,024E26 kg</p>
                            <p><b>Średnica na równiku:</b> 49 244 [km]</p>
                            <p><b>Ciśnienie atmosferyczne:</b> - </p>
                            <p><b>Liczba naturalnych saletitów:</b> 14-księżycy</p>
                            <p><b>Temperatura na powierzchni:</b> śred. –220°C </p>
                            <p><b>Grawitacja na powierzchni: </b> 11,15 m/s²</p>
                            <p><b>Czas trwania doby:</b> 16,11 godzin</p>
                            <p><b>Czas trwania roku:</b> 165 lat </p>
                            <p><b>Liczba ludności:</b> 0</p>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

    </main>
    <a href="#" class="to-top">
        <i class="fas fa-chevron-up"></i>
    </a>
    <script src="skrypty/gotoup.js"></script>
</body>

</html>
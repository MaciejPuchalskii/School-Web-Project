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
        <title>Strona Główna</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <script src="https://kit.fontawesome.com/a54d2cbf95.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    </head>
    <body>
        <div class="intro">
            <h2 class="przywitanie">
                <span class="welcome">Witamy Na </span>
                <span class="welcome"> Naszej stronie</span>
            </h2>
        </div>
        <header>
            <h1>UKŁAD SŁONECZNY</h1>
            <nav>
            <ul>
                <li> <a href="index.php">STRONA GŁÓWNA</a></li>
                <li> <a href="planety.php">PLANETY</a></li>
                <li><a href="forum.php">NEWS</a> </li>
                <li> <a href="logowanie.php"><?php echo $napis;?></a></li>
            </ul>         
            </nav>
        </header>
        <main>
            <hr class="kreska">

            <div class ="uklad">
                <div class="column" style="width:20%" >
                    <a href="planety.html"><img src="planety/slonce.png" style="height:100%; width:100%;" alt="Słońce"><span class="wyswietl">Słońce</span></a>
                    
                </div>
                <div class="column" >
                    <a href="planety.html#Merkury"><img src="planety/merkury.png" style="height:50px; width:50px;" alt="Merkury"><span class="wyswietl">Merkury</span></a>
                </div>
                <div class="column"><a href="planety.html#Wenus" > <img src="planety/wenus.png"  style="height:60px; width:60px;" alt="Wenus" >
                <span class="wyswietl">Wenus</span></a></div>
                <div class="column"><a href="planety.html#Ziemia" ><img src="planety/ziemia.png" style="height:70px; width:70px; " alt="Ziemia"><span class="wyswietl">Ziemia</span></a></div>
                <div class="column" ><a href="planety.html#Mars" ><img src="planety/mars.png" style="height:50px; width:50px;" alt="Mars"><span class="wyswietl">Mars</span></a></div>
                <div class="column"><a href="planety.html#Jowisz"><img src="planety/jowisz.png"  style="height:230px; width:230px;" alt="Jowisz"><span class="wyswietl">Jowisz</span></a></div>
                <div class="column"><a href="planety.html#Saturn" ><img src="planety/saturn.png" style="height:250px; width:250px; " alt="Saturn"><span class="wyswietl">Saturn</span></a></div>
                <div class="column"><a href="planety.html#Uran" ><img src="planety/uran.png" style="height:90px; width:90px;" alt="Uran"><span class="wyswietl">Uran</span></a></div>
                <div class="column"><a href="planety.html#Neptun" ><img src="planety/neptun.png" style="height:90px; width:90px;" alt="Neptun"><span class="wyswietl">Neptun</span></a></div>
            </div>
            <hr class="kreska">
            
                <div class="galeria">
                    <div class="zdjecia">
                        <div class="big-screen">
                            <img src="kosmos/1.png" alt="zdjecie1">
                        </div>
                        <div class="slides">
                             <img src="kosmos/1.png" alt="zdjecie1" >
                             <img src="kosmos/2.png" alt="zdjecie2">
                             <img src="kosmos/3.png" alt="zdjecie3">
                             <img src="kosmos/4.png" alt="zdjecie4">
                             <img src="kosmos/5.png" alt="zdjecie5">
                        </div>
                    </div>
                </div>
                
            <div class="opis">
                <h2>Droga mleczna</h2>
                
                <p style="color: gold">
                    Jest galaktyką spiralna, w której znajduje się m.in. Układ Słoneczny.<br><br>
                    Zawiera aż do 400 miliardów gwiazd. Ma średnicę około 100 000 lat świetlnych i grubość ok. 1000 lat świetlnych. <br><br>
                    Wiek gakaktyki został oszacowany na podstawie pomiaru zawartości berylu w gwiazdach gromady kulistej NGC 6397 na 13,6 ± 0,8 miliarda lat.<br><br>
                    Droga Mleczna, Galaktyka Andromedy oraz Galaktyka Trójkąta są głównymi elementami Grupy Lokalnej Galaktyk. Jest to zbiór co najmniej 54 
                    galaktyk położonych blisko siebie i związanych grawitacyjnie. Większość z nich to galaktyki karłowate lub nieregularne. Wiele 
                    spośród tych pierwszych z powodu małej jasności pozostaje zapewne nieodkryta.
                </p>
            </div>
            
            <div class="rakieta">
                <img src="glowna/rakietasw.png" id="launch" alt="rakieta">
            </div>
            <hr class="kreska">
            
                
                <div class="formularz">
                    
                        <h2 > O NAS </h2>
                        <p>
                            Witaj na naszej stronie. Naszym hobby jest astronomia i dlatego stworztliśmy tą stronę.
                            Nasza strona ma na celu przedstawienie wiedzy na temat Układu Słonecznego oraz ciekawostek związanych z kosmosem.
                            Znajdziesz tutaj również sekcję Wiadomości gdzie będziemy umieszczać najciekawsze wydarzenia w świecie astronomii sprzed tygodnia. <br>
                        </p>
                        <h3>Zapraszamy do zapoznania się z naszą stroną. </h3>
                </div>

            </div>
            <hr class="kreska">
        </main>
        <footer>
            <p>ZNAJDŹ NAS NA:</p>
            <div>
                <div >
                    <a class="socials" href="https://www.facebook.com/" target="blank" title="Sprawdź naszego facebooka!"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a class="socials"  href="https://www.instagram.com/" target="blank" title="Sprawdź naszego instagrama!"><ion-icon name="logo-instagram"></ion-icon></a>
                    <a  class="socials" href="https://www.youtube.com/" target="blank"  title="Sprawdź naszego youtuba!"><ion-icon name="logo-youtube"></ion-icon></a>
                    <a  class="socials" href="https://twitter.com/home"  target="blank" title="Sprawdź naszego twittera!"><ion-icon name="logo-twitter"></ion-icon></a>
                </div>
            </div>
        </footer>
        <a href="#" class="to-top">
            <i class="fas fa-chevron-up"></i>
        </a>
        <script src="skrypty/welcome.js"></script>
        <script src="skrypty/gotoup.js"></script>
        <script src="skrypty/launchrocket.js"></script>
        <script src="skrypty/galeria.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>


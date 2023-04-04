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



    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a54d2cbf95.js"></script>
    <title>Aktualności</title>
</head>

<body>
    <header>
        <h1>WIADOMOŚCI</h1>
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
        <div class="naglowekwiadomosci">
            <h2>Codzienne Wiadomości</h2>
        </div>

        <div class="artykuly">
            <table class="artykuly">
                <tbody>
                    <tr>
                        <td>
                            <img src="artykuly/1.png" alt="Zdjęcie ELona Muska.">
                            <h4>Elon Musk</h4>
                        </td>

                        <td>
                            <h3>Elon Musk:Twitter stonks</h3>
                            <p>
                                W ramach tzw. Twitter 2.0 uwzględnione jest również ponowne uruchomienie Twitter
                                Blue oraz dodatkowe płatności. Jakie? Tego Musk nie zdradzał. 
                            </p>
                                    <p>Miliarder nie był
                                        też wylewny na temat pozostałych zapowiedzianych funkcji, które pojawią się w
                                        najbliższej przyszłości. jest jednak zpewny sukcesu odświeżonego Twittera i
                                        przewiduje, że w 2024 r. w serwisie będzie już ponad miliard aktywnych
                                        użytkowników. 
                                    </p>
                                        <p>
                                            Miliarder uważa, że wystarczy 12-18 miesięcy, do osiągnięcia tego
                                            celu. Redakcja przypomina jednocześnie, że w zeszłym miesiącu pojawiły się
                                            oficjalne dane związane z aktywnością na Twitterze.
                                        </p>
                                
                            
                            <a href="">Dowiedz się więcej!</a>
                        </td>
                    </tr>
                    <tr>
                        
                        <td>
                            <img src="artykuly/2.png" alt="Zdjęcie rakiety SPACEX.">
                            <h4>SpaceX</h4>
                        </td>
                        <td>
                            <h3>SpaceX dzisiaj wystrzeli rakiety Falcon 9 </h3>
                            <p>
                                SpaceX przygotowuje się do wystrzelenia rakiety Falcon 9 wcześnie w środę rano.
                                Misja, która obejmuje prywatne i publiczne ładunki, jest przykładem obecnego
                                stanu branży lotów kosmicznych i zmieniającego się sposobu, w jaki badamy
                                kosmos.
                            </p>
                           
                                    <p>To dość rutynowy start dla SpaceX, ale misja ma duży wpływ.
                                        Na pokładzie rakiety Falcon 9 znajduje się statek kosmiczny Hakuto-R firmy ispace,
                                        który sam w sobie jest pełen różnych księżycowych gadżetów związanych z powierzchnią.
                                    </p>
                                    <p>
                                            Na pokładzie znajduje się również księżycowa latarka NASA Jet Propulsion Laboratory,
                                            sonda na Księżycu poszukująca wody. Lód z punktu widzenia rzadko używanej orbity.
                                    </p>
                                
                            
                                <a href="">Dowiedz się więcej!</a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="artykuly/3.png" alt="Zdjęcie Marsa.">
                            <h4>Mars</h4>
                        </td>
                        <td>
                            <h3>Mars jest asymetryczny.</h3>
                            <p>
                                Północna półkula Marsa położona jest o pięć do dziesięciu
                                kilometrów niżej od półkuli południowej. Naukowcy od dziesięcioleci
                                zastanawiają się nad powodem tej asymetrii. Jedna z hipotez głosi, że
                                niedługo po uformowaniu się Marsa uderzył w niego bolid o średnicy około
                                dwóch tysięcy kilometrów, niemal niszcząc czwartą planetę od Słońca.
                            </p>
                            <a href="">Dowiedz się więcej!</a>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <img src="artykuly/4.png" alt="Zdjęcie rakiety NASA.">
                            <h4>NASA</h4>
                        </td>
                        <td>
                            <h3>Start rakiety SLS znowu przesunięty przez huragan</h3>
                            <p>
                                NASA od kilku miesięcy próbuje wykonać pierwszy lot superciężkiej
                                rakiety SLS i statku Orion. Celem misji Artemis I jest wyniesienie statku bez
                                załogi na jego pokładzie w misję wokół Księżyca. Jeżeli ten lot się powiedzie, to
                                już w 2024 roku taki sam zestaw SLS-Orion przeprowadzi misję Artemis II. Wtedy w
                                statku znajdą się astronauci i polecą w kierunku Księżyca - pierwszy raz od czasu
                                programu Apollo!
                            </p>
                            <a href="">Dowiedz się więcej!</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="artykuly/5.png" alt="Zdjęcie STARLINKÓW widzianych z Ziemii">
                            <h4>Starlinki</h4>
                        </td>
                        <td>
                            <h3>Nowe 53 satelity Starlink na orbicie</h3>
                            <p>
                                27 października z kosmodromu Vandenberg na zachodnim wybrzeżu USA wystartowała rakieta
                                Falcon 9 z misją Starlink 4-31. Na niską orbitę okołoziemską wysłano 53 nowe satelity
                                telekomunikacyjne budowanej przez firmę SpaceX sieci.
                                Firma SpaceX przeprowadziła 27 października 2022 r. misję Starlink 4-31. Dwustopniowa
                                rakieta Falcon 9 wystartowała ze stanowiska SLC-4E na kosmodromie Vandenberg o 3:14 w
                                nocy czasu polskiego. Lot przebiegł pomyślnie i już kilkanaście minut po starcie
                                wszystkie
                                satelity zostały wypuszczone na wstępnej orbicie.
                            </p>
                            <a href="">Dowiedz się więcej!</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="naglowekwiadomosci">
                <h2>Zapraszamy już jutro po nowe artykuły.</h2>
            </div>
        </div>

    </main>
    <a href="#" class="to-top">
        <i class="fas fa-chevron-up"></i>
    </a>
    <script src="skrypty/gotoup.js"></script>
   
</body>

</html>
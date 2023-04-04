<?php

session_start();
if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == true)
{
  header('Location: profil.php');
  exit();
}
?>

<!doctype html>

<html lang="pl-PL">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Strona o układzie słonecznym oraz planetach">
    <meta name="Autor" content="Maciej Puchalski">
    <title>Logowanie</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    
    

</head>
<body>

    <header>
        <h1>LOGOWANIE</h1>
        <nav>
        <ul>
                <li> <a href="index.php">STRONA GŁÓWNA</a></li>
                <li> <a href="planety.php">PLANETY</a></li>
                <li><a href="forum.php">NEWS</a> </li>
                <li> <a href="logowanie.php">LOGOWANIE</a></li>
            </ul>        
        </nav>
    </header>
    <hr class="kreska">


    <div class="bdlogowanie">
        <div class="container">
            <div class="forms">
                <div class="form login">
                    <span class="title">Logowanie</span>
                    <form action="zaloguj.php" method="POST">
                        <div class="input-field">
                            <input name="emailLogowanie" type="text" placeholder="Wprowadź adres mail" required>
                            <i class="uil uil-envelope icon"></i>
                        </div>
                        <div class="input-field">
                            <input name="hasloLogowanie" type="password" placeholder="Wprowadź hasło" required >
                            <i class="uil uil-lock icon"></i>
                            <i class="uil uil-eye-slash showHidePass"></i>
                        </div>
                        <div class="blad">
                        <?php
                        if(isset($_SESSION['blad'])) echo $_SESSION['blad'];
                        ?>
                        </div>
                        <div class="checkbox-text">
                            <div class="checkbox-content">
                                <input type="checkbox" id="logCheck">
                                <label for="logCheck">Zapamiętaj mnie</label>
                            </div>
                            <a href="#" class="text">Zapomniałeś hasła?</a>
                        </div>
                        <div class="input-field button">
                            <input type="submit" value="Zaloguj się">
                        </div>
                    </form>
                    <div class="login-singup">
                        <span class="text">Nie masz konta?
                            <a href="rejestracja.php" class="text signup-text">Załóż konto</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="kreska">

    <div class="clickme">
        <button id="open">DZIĘKUJEMY</button>
    </div>

    <div class="clickme-open">
        <div class="model">
            <i class="uil uil-rocket"></i>
            <h3>Cześć</h3>
            <p>Dziękujemy Ci za to
                <i class="uil uil-heart"></i><br>
                że jesteś z nami i działasz na rzecz naszej społeczności.
               Dzięki Tobie możemy rozwijać się i robić to, co najlepsze.
            </p>
            <button id="close" ><i class="uil uil-heart"></i><br></button>
        </div>
    </div>
        
   
    
    <script src="skrypty/script.js"></script>
    <script src="skrypty/dziekujemy.js"></script>

</body>

</html>
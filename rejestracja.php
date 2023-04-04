<?php
    session_start();

    if(isset($_POST['login']))
    {
        //udana walidacja
        $wszystko_OK = true;

        //sprawdzanie loginu
        $login = $_POST['login'];

        //sprawdzenie długości loginu

        if(strlen($login)<3 || strlen($login)>20)
        {
            $wszystko_OK = false;
            $_SESSION['e_login'] = "Login musi posiadać od 3 do 20 znaków!";
        }
        if(ctype_alnum($login)==false)
        {
            $wszystko_OK = false;
            $_SESSION['e_login'] = "Login może składać się tylko z liter i cyfr(bez PL znaków)";
        }
        //Sprawdzenie poprawnosci adresu mail

        $email = $_POST['email'];

        $emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
        
        if((filter_var($emailB,FILTER_VALIDATE_EMAIL)==false || ($emailB!=$email)))
        {
            $wszystko_OK = false;
            $_SESSION['e_email'] = "Podaj poprawny adres email!";
        }



        // Sprawdzenie poprawnosci hasla
        $haslo1 = $_POST['haslo1'];
        $haslo2 = $_POST['haslo2'];


        if(strlen($haslo1)<3 || (strlen($haslo1)>20))
        {
            $wszystko_OK = false;
            $_SESSION['e_haslo'] = "Haslo musi posiadac od 3 do 20 znakow!";
        }
        if($haslo1!= $haslo2)
        {
            $wszystko_OK = false;
            $_SESSION['e_haslo'] = "Podane hasla nie sa identyczne!";
        }

        // sprawdzenie numeru telefonu

        $nr_telefonu = $_POST['nr_telefonu'];
        if($nr_telefonu == "")
        {
            $wszystko_OK = false;
            $_SESSION['e_nr_telefonu'] = "Podaj numer telefonu!";
        }
        if(strlen($nr_telefonu)<9 || strlen($nr_telefonu)>9)
        {
            $wszystko_OK = false;
            $_SESSION['e_nr_telefonu'] = "Podaj poprawny numer telefonu! 9-cyfrowy";
        }
        // sprawdzanie id_planety
        $id_planety = $_POST['id_planety'];

        if($id_planety<1 || $id_planety>9 )
        {
            $wszystko_OK = false;
            $_SESSION['e_id_planety'] = "Wybierz planete spośród 1-8!";
        }
        
        // sprawdzanie checkboxa
        if(!isset($_POST['regulamin']))
        {
            $wszystko_OK = false;
            $_SESSION['e_regulamin'] = "Potwierdź akceptacje regulaminu!";
        }
        
        // bot or not

        $secret = "6Ldc7T4kAAAAAP8RdD5TK5BWJhUHbeSUFf6PSA4g";

        $sprawdz = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);

        $odpowiedz = json_decode($sprawdz);


        $_SESSION['fr_login'] = $login;
        $_SESSION['fr_email'] = $email;
        $_SESSION['fr_haslo1'] = $haslo1;
        $_SESSION['fr_haslo2'] = $haslo2;
        $_SESSION['fr_nr_telefonu'] = $nr_telefonu;
        $_SESSION['fr_id_planety'] = $id_planety;
        
        if(isset($_POST['regulamin'])) $_SESSION['fr_regulamin'] = true;        



        if($odpowiedz->success== false)
        {
            $wszystko_OK = false;
            $_SESSION['e_bot'] = "Potwierdź, że nie jesteś botem!";
        }


        // data

        $birthdate = $_POST['data_urodzenia'];
        if($birthdate == ""){
            $wszystko_OK = false;
            $_SESSION['e_data_urodzenia'] = "Podaj datę urodzenia!";
        }

        // sprawdzanie pliku
        
        $plik = $_FILES['file']['tmp_name'];

        $file_content = file_get_contents($plik);
        $file_content = base64_encode($file_content);

        $premium = $_POST['premium'];

        try
        {
            $connection = new mysqli('localhost', 'root', '', 'ukladsloneczny');
            if($connection -> connect_errno != 0)
            {
              throw new Exception(mysqli_connect_errno());
            }
            else
            {

                $rezultat = $connection->query("SELECT id_uzytkownika FROM uzytkownik WHERE email='$email'");
                if(!$rezultat) throw new Exception($connection->error);

                $ile_takich_maili = $rezultat->num_rows;
                if($ile_takich_maili>0)
                {
                    $wszystko_OK = false;
                    $_SESSION['e_email'] = "Istnieje juz konto przypisane do tego adresu email!";
                }

                
                $rezultat = $connection->query("SELECT id_uzytkownika FROM uzytkownik WHERE login='$login'");
                if(!$rezultat) throw new Exception($connection->error);

                $ile_takich_loginow = $rezultat->num_rows;
                if($ile_takich_loginow>0)
                {
                    $wszystko_OK = false;
                    $_SESSION['e_login'] = "Istnieje juz konto z takim loginem!";
                }



                if($wszystko_OK==true)
                {
                    $haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);
                    if($connection->query("INSERT INTO uzytkownik VALUES ('$login', '$haslo_hash', '$email', '$nr_telefonu', '$id_planety',NULL,$premium, '$file_content','$birthdate')"))
                    {
                       $_SESSION['udanarejestracja'] = true;
                       header('Location: witamy.php');
                    }
                    else
                    {
                        throw new Exception($connection->error);
                    }


                }
                $connection->close();
            }

        }
        catch(Exception $e)
        {
            echo "Błąd serwera - Przepraszamy za niedogodności i prosimy o rejestracje w innym terminie";
            echo $e;
        }




        
    }
?>

<!doctype html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Strona o układzie słonecznym oraz planetach">
    <meta name="Autor" content="Maciej Puchalski">
    <title>Rejestracja</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://kit.fontawesome.com/a54d2cbf95.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
 </head>
 <body >

    <header>
        <h1>REJESTRACJA</h1>
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
                <!--  Rejestracja -->
                <div class="form login">
                    <span class="title">Rejestracja</span>
                    <form method="post" enctype="multipart/form-data">
                        <div class="input-field">
                            <input type="text" id="login" name="login" value="<?php 
                            if(isset($_SESSION['fr_login']))
                            {
                                echo $_SESSION['fr_login'];
                                unset($_SESSION['fr_login']);
                            } ?>"
                             placeholder="Wprowadź nazwę użytkownika*" >
                            <i class="uil uil-user-circle icon"></i>
                        </div>
                        <?php

                        if(isset($_SESSION['e_login']))
                        {
                            
                            echo '<div style="color: red;font-size: 20px;font-weight: bold; text-align: left; margin-top: 5px; margin-bottom: 5px;">'.$_SESSION['e_login'].'</div>';
                            unset($_SESSION['e_login']);
                        }
                        ?>
                        <div class="input-field">
                            <input type="text" id="email" name="email" value="<?php 
                            if(isset($_SESSION['fr_email']))
                            {
                                echo $_SESSION['fr_email'];
                                unset($_SESSION['fr_email']);
                            } ?>" placeholder="Wprowadź adres mail*" >
                            <i class="uil uil-envelope icon"></i>
                        </div>
                        <?php
                        if(isset($_SESSION['e_email']))
                        {
                            
                            echo '<div style="color: red;font-size: 20px;font-weight: bold; text-align: left; margin-top: 5px; margin-bottom: 5px;">'.$_SESSION['e_email'].'</div>';
                            unset($_SESSION['e_email']);
                        }
                        ?>
                        <div class="input-field">
                            <input type="password" id="haslo1" name="haslo1" placeholder="Wprowadź hasło*" >
                            <i class="uil uil-lock icon"></i>      
                        </div>
                        <?php
                        if(isset($_SESSION['e_haslo']))
                        {
                            
                            echo '<div style="color: red;font-size: 20px;font-weight: bold; text-align: left; margin-top: 5px; margin-bottom: 5px;">'.$_SESSION['e_haslo'].'</div>';
                            unset($_SESSION['e_haslo']);
                        }
                        ?>
                        <div class="input-field">
                            <input type="password" id="haslo2" name="haslo2" placeholder="Powtórz hasło*" >
                            <i class="uil uil-lock icon"></i>      
                        </div>
                        
                        <div class="input-field">
                            <input type="tel" name="nr_telefonu" id="nr_telefonu" value="<?php 
                            if(isset($_SESSION['fr_nr_telefonu']))
                            {
                                echo $_SESSION['fr_nr_telefonu'];
                                unset($_SESSION['fr_nr_telefonu']);
                            } ?>" placeholder="Wprowadź numer telefonu" >
                            <i class="uil uil-phone icon"></i>
                        </div>
                        <?php
                        if(isset($_SESSION['e_nr_telefonu']))
                        {
                            
                            echo '<div style="color: red;font-size: 20px;font-weight: bold; text-align: left; margin-top: 5px; margin-bottom: 5px;">'.$_SESSION['e_nr_telefonu'].'</div>';
                            unset($_SESSION['e_nr_telefonu']);
                        }
                        ?>
                        <div class="input-field">
                            <input type="number" name="id_planety" value="<?php 
                            if(isset($_SESSION['fr_id_planety']))
                            {
                                echo $_SESSION['fr_id_planety'];
                                unset($_SESSION['fr_id_planety']);
                            } ?>" id="id_planety" placeholder="Wprowadź id planet" >
                            <i class="uil uil-globe icon"></i>
                        </div>
                        <?php
                        if(isset($_SESSION['e_id_planety']))
                        {
                            
                            echo '<div style="color: red;font-size: 20px;font-weight: bold; text-align: left; margin-top: 5px; margin-bottom: 5px;">'.$_SESSION['e_id_planety'].'</div>';
                            unset($_SESSION['e_id_planety']);
                        }
                        ?>
                        <div>
                            <p>Data urodzenia: <input type="date" value="<?php 
                            if(isset($_SESSION['fr_data_urodzenia']))
                            {
                                echo $_SESSION['fr_data_urodzenia'];
                                unset($_SESSION['fr_data_urodzenia']);
                            } ?>" name="data_urodzenia"></p>
                        </div>
                        <?php
                        if(isset($_SESSION['e_data_urodzenia']))
                        {
                            
                            echo '<div style="color: red;font-size: 20px;font-weight: bold; text-align: left; margin-top: 5px; margin-bottom: 5px;">'.$_SESSION['e_data_urodzenia'].'</div>';
                            unset($_SESSION['e_data_urodzenia']);
                        }
                        ?>
                        <div class="input-field">
                            <p>Dołącz plik</p>
                            <input type="file" name="file" value="<?php 
                            if(isset($_SESSION['fr_zdjecie_profilowe']))
                            {
                                echo $_SESSION['fr_zdjecie_profilowe'];
                                unset($_SESSION['fr_zdjecie_profilowe']);
                            } ?>" name="zdjecie_profilowe" accept="image/*">
                        </div>
                        
                        <div class="input-field">
                            <select name="premium">
                                <option value="" disabled selected>Chcesz konto premium?</option>
                                <option value="1">Tak</option>
                                <option value="0">Nie</option>
                            </select>
                        </div>
                        <div class="checkbox-text">
                            <div class="checkbox-content">
                                <label>
                                    <input type="checkbox" name="regulamin" id="logCheck">Zapoznałem się z regulaminem
                                </label>
                            </div>
                        </div>
                        <?php
                        if(isset($_SESSION['e_regulamin']))
                        {
                            
                            echo '<div style="color: red;font-size: 20px;font-weight: bold; text-align: left; margin-top: 5px; margin-bottom: 5px;">'.$_SESSION['e_regulamin'].'</div>';
                            unset($_SESSION['e_regulamin']);
                        }
                        ?>
                       <div class="g-recaptcha" data-sitekey="6Ldc7T4kAAAAAA2jAMXoj1JOb72g4a4pOb8LwtPQ"></div>
                       <?php
                        if(isset($_SESSION['e_bot']))
                        {
                            
                            echo '<div style="color: red;font-size: 20px;font-weight: bold; text-align: left; margin-top: 5px; margin-bottom: 5px;">'.$_SESSION['e_bot'].'</div>';
                            unset($_SESSION['e_bot']);
                        }
                        ?>
                        <div class="input-field button">
                            <input type="submit" value="Zarejestruj się">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr class="kreska">

   <div class="regulamin">
    <div id="demo">
        <h2>Regulamin</h2>
        <button type="button" onclick="loadDoc()">Kliknij</button>
    </div>
   </div>
   <a href="#" class="to-top">
       <i class="fas fa-chevron-up"></i>
    </a>
<script src="skrypty/script.js"></script>
<script src="skrypty/gotoup.js"></script>
<script src="skrypty/regulamin.js"></script>
</body>

</html>


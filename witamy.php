<?php


session_start();

if(isset($_SESSION['fr_login']))
{
    unset($_SESSION['fr_login']);
}
if(isset($_SESSION['fr_email']))
{
    unset($_SESSION['fr_email']);
}
if(isset($_SESSION['fr_nr_telefonu']))
{
    unset($_SESSION['fr_nr_telefonu']);
}
if(isset($_SESSION['fr_id_planety']))
{
    unset($_SESSION['fr_id_planety']);
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
        <h1>Witamy</h1>
    </header>


   
    <p style='color:gold; font-size:50px; text-align:center;'>Dziękujemy za rejestrację w serwrisie</p>
    <a style='color:gold; font-size:30px; text-align:center; margin-left:41%;' href="logowanie.php">Zaloguj się na swoje konto</a>
    
        
   
    
    <script src="skrypty/script.js"></script>
    <script src="skrypty/dziekujemy.js"></script>
    <script src="skrypty/gotoup.js"></script>
</body>

</html>
<?php
session_start();

if(!isset($_SESSION['zalogowany']))
{
    header('Location: index.php');
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
    <style>
        .daneuzytkownika
        {
         
            border: 1px solid gold;
            border-collapse: collapse;
            width: 20%;
            color: gold;
            font-size: 20px;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            
        }
        .daneuzytkownika th,td
        {
            border: 1px solid gold;
            
            text-align: left;
            background-color: #000;
            color: gold;
            
        }
        .konto
        {
            width: 80%;
            margin-right:10%;
            margin-left:10%;
        }
        .wyloguj 
        {
            font-size 20px;
            list-style: none;
        display: block;
        padding: 10px;
        border-radius: 100px;
        text-decoration: none;
        font-size: 30px;
        text-align: center;
        background-color: gold;
        color: black;
        width: 20%;
        margin-left: 40%;
        margin-right: 40%;
        }
        .wyloguj:hover
        {
            background-color: black;
            color: gold;
        }
        .center
        {
            display: block;
            margin-left: auto;
            margin-right: auto;
            border-radius:50px;
        }
    </style>
</head>
<body>

<header>
        <h1>KONTO</h1>
        <nav>
        <ul>
                <li> <a href="index.php">STRONA GŁÓWNA</a></li>
                <li> <a href="planety.php">PLANETY</a></li>
                <li><a href="forum.php">NEWS</a> </li>
                <li><a href="placzabaw.php">KREATOR</a></a> </li>
            </ul>       
        </nav>
    </header>
<div class="konto">
    
    
    <hr class="kreska">
    
    <h2 style="color:gold; text-align:center;">Dzień Dobry <?php echo $_SESSION['login']; ?> </h2>
      <?php 
        $file_content = $_SESSION['Zdjecie'];
        echo '<img src="data:image/jpeg;base64,'.$file_content. '" alt="Zdjęcie profilowe" class="center">';
        ?> 
        <br><br>

      <table class="daneuzytkownika">
      <tr>
        <th>Email:</th>
        <th><?php echo $_SESSION['email']; ?></th>
      </tr>
      <tr>
        <td>Login:</td>
        <td><?php echo $_SESSION['login']; ?></td>
      </tr>
      <tr>
        <td>Telefon:</td>
        <td><?php echo $_SESSION['telefon']; ?></td>
      </tr>
      <tr>
        <td>Ulubiona planeta::</td>
        <td><?php echo $_SESSION['NazwaPlanety']; ?></td>
      </tr>
      <tr>
        <td>Premium:</td>
        <td><?php 
            
            if( $_SESSION['Premium'] == 1)
            {
                echo "Tak";
            }
            else
            {
                echo "Nie";
            }
            
    
            ?></td>
      </tr>
      <tr>
        <td>Data urodzenia:</td>
        <td><?php echo $_SESSION['data_urodzenia']; ?></td>
      </tr>
    </table>
  <h2 style="color:gold; text-align:center;">Ulubiona Planeta</h2>

  <table class="daneuzytkownika">
  <tr>
 
    <th>Nazwa:</th>
    <th> <?php echo $_SESSION['NazwaPlanety']; ?></th>
  </tr>
  <tr>
  
        
    <td>Typ:</td>
    <td><?php echo $_SESSION['TypPlanety']; ?></td>
  </tr>
  <tr>
    <td>Masa:</td>
    <td><?php echo $_SESSION['telefon']; ?></td>
  </tr>
  <tr>
    <td>Srednica:</td>
    <td><?php echo $_SESSION['Srednica']." dni"; ?></td>
  </tr>
  <tr>
    <td>Czas trwania roku:</td>
    <td><?php echo $_SESSION['CzasTrwaniaRoku']." dni"; ?></td>
  </tr>
  
</table>
        
    
<h2 style="color:gold; text-align:center;">Opis</h2>
  <table class="daneuzytkownika">
    <tr>
        <td>
            <p style="text-align:center;"><?php echo $_SESSION['Opis']; ?></p>
        </td>
    </tr>
  </table>
      
    <br>
    <a class="wyloguj" href='logout.php'>Wyloguj się</a>
    <br>
    <br>
    <a class="wyloguj" href='usunKonto.php'>Usuń Konto</a>
    <hr class="kreska">
</div>

    
            
   
    
    <script src="skrypty/script.js"></script>
   

</body>

</html>

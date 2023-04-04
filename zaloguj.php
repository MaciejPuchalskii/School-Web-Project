<?php

  session_start();

  if(!isset($_POST['emailLogowanie']) || !isset($_POST['hasloLogowanie']))
  {
    header('Location: logowanie.php');
    exit();
  }

  $connection = @new mysqli('localhost', 'root', '', 'ukladsloneczny'  );

  if($connection -> connect_errno != 0)
  {
    echo "Error: ".$connection -> connect_errno;
  }
  else
  {
    $email = $_POST['emailLogowanie'];
    $haslo = $_POST['hasloLogowanie'];
    
    $sql = "SELECT * FROM uzytkownik JOIN planety ON (planety.id_planety=uzytkownik.id_planety) JOIN opis ON (opis.id_planety=planety.id_planety) WHERE email='$email';";
    
    if($result = @$connection->query($sql))
    {
      $ilu_userow = $result->num_rows;
      
      if($ilu_userow>0)
      {
        $wiersz = $result->fetch_assoc(); // pobranie danych z rezultaatu zapytania
        if(password_verify($haslo, $wiersz['haslo']))
        {
          $_SESSION['zalogowany'] = true;
          $_SESSION['id'] = $wiersz['id'];
          $_SESSION['login'] = $wiersz['login'];
          $_SESSION['email'] = $wiersz['email'];
          $_SESSION['data_urodzenia'] = $wiersz['data_urodzenia'];
          $_SESSION['telefon'] = $wiersz['telefon'];
          $_SESSION['id_planety'] = $wiersz['id_planety'];
          $_SESSION['Premium'] = $wiersz['Premium'];
          $_SESSION['profilepicture'] = $wiersz['profilepicture'];
          $_SESSION['NazwaPlanety'] = $wiersz['NazwaPlanety'];
          $_SESSION['TypPlanety'] = $wiersz['TypPlanety'];
          $_SESSION['Masa'] = $wiersz['Masa'];
          $_SESSION['Srednica'] = $wiersz['Srednica'];
          $_SESSION['CzasTrwaniaRoku'] = $wiersz['CzasTrwaniaRoku'];
          $_SESSION['Opis'] = $wiersz['opis_planety'];
          $_SESSION['Zdjecie'] = $wiersz['profilepicture'];
          unset($_SESSION['blad']);
          $result->free_result();
          header('Location: profil.php');
        }
        else
        {
          $_SESSION['blad'] = '<br><span style="color:red"> login lub hasło!</span>';
          header('Location: logowanie.php');
        }
      }
      else
      {
        $_SESSION['blad'] = '<br><span style="color:red">Nieprawidłowy login lub hasło!</span>';
        header('Location: logowanie.php');
      }

    }

    $connection->close();
  }



  



?>
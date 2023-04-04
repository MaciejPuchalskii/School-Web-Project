<?php
    session_start();
    $connection = @new mysqli('localhost', 'root', '', 'ukladsloneczny'  );

    $login= $_SESSION['login'];
    if($connection -> connect_errno != 0)
    {
        echo "Error: ".$connection -> connect_errno;
    }
    else
    {
        if($connection->query("DELETE FROM uzytkownik WHERE login = '$login'"))
        {
            header('Location: index.php');
            unset($_SESSION['zalogowany']);
            unset($_SESSION['id']);
        }
        else
        {
            echo "Error: ".$connection -> connect_errno;
        }
    }


?>
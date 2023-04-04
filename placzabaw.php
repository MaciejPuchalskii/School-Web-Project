<?php
session_start();

class ObslugaTablicy {
    public  $tablica;

    public function __construct($tablica) {
        $this->array = $tablica;
    }

    public function add($element) {
        array_push($this->array, $element);
    }

    public function remove($index) {
        unset($this->array[$index]);
        $this->array = array_values($this->array);
    }

    public function sort() {
        sort($this->array);
    }

    public function edit($index, $newElement) {
        $this->array[$index] = $newElement;
    }
}
    if(isset($_POST['usun']))
    {
        $_SESSION['array']->remove(count($_SESSION['array']->array) - 1);
        unset($_POST['usun']);
    }
    elseif(isset($_POST['sortuj']))
    {
        $_SESSION['array']->sort();;
        unset($_POST['sortuj']);
    }
    elseif(isset($_POST['reset']))
    {
        unset($_SESSION['array']);
        
    }
    elseif(isset($_POST['edytuj']))
    {
      $edytowanie= true;
     

    }
    if (isset($_POST['Nazwa'] ) && isset($_POST['Typ']) && isset($_POST['Masa']) && isset($_POST['Ludnosc']) ) {

            $temp = [$_POST['Nazwa'],$_POST['Typ'],$_POST['Masa'],$_POST['Ludnosc']];
            $_SESSION['array']->add($temp); 
            
    } 
    if (!isset($_SESSION['array']))
    {
        $_SESSION['array'] =new ObslugaTablicy([
            ['Nazwa','Skalista/Gazowa','WAGA','LUDNOŚĆ']
           

            
        ]);
    }  
?>

<!doctype html>

<html lang="pl-PL">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Strona o układzie słonecznym oraz planetach">
    <meta name="Autor" content="Maciej Puchalski">
    <title>KREATOR</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <style>
        .daneuzytkownika
        {
            border: 1px solid gold;
            border-collapse: collapse;
            width: 50%;
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

        .guziki
        {
            width: 40%;
            color: gold;
            font-size: 20px;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }

        .guziki table
        {
            display: inline-block;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            width: 20%;
        }
        
        .guziki td
        {
            border:none;    
        }
        .guziki button {
            background-color: gold;
            border: none;
            color: black;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            transition: all 0.5s;
        }

        button:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.25);

        }
    </style>
</head>
<body>
    <header>
        <h1>KREATOR</h1>
        <nav>
            <ul>
                <li> <a href="index.php">STRONA GŁÓWNA</a></li>
                <li> <a href="planety.php">PLANETY</a></li>
                <li><a href="forum.php">NEWS</a> </li>
                <li> <a href="profil.php">KONTO</a></li>
            </ul>        
        </nav>
    </header>
    <hr class="kreska">
    <table class="daneuzytkownika">
        <thead>
            <th>Nazwa Planety</th>
            <th>Typ Planety</th>
            <th>Masa [kg]</th>
            <th>Liczba Ludności</th>
        </thead>
        <?php
        foreach($_SESSION['array']->array as $value)
        {
            echo "<tr>";
            echo "<td>" . $value[0] . "</td>";
            echo "<td>" . $value[1] . "</td>";
            echo "<td>" . $value[2] . "</td>";
            echo "<td>" . $value[3] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <table class= "guziki">
        <tr>
            <td>
                <form method="post">
                    <button name='usun' >Usuń ostatnią Planete</button>
                </form>
            </td>
            <td>
                <form method="post">
                    <button name='sortuj'>Sortuj Planety</button>
                </form>
            </td>
            <td>
                <form method="post">
                    <button  name='reset' >Resetuj Planety</button>
                </form>
            </td>
            <td>
                <form method="post">
                    <button  name='edytuj' >Edytuj Planete</button>
                </form>
            </td>
        </tr>
    </table>
    <hr class="kreska">
    <?php if($edytowanie==true)
    { 
        $lastRecord = end($_SESSION['array']->array);
        $_SESSION['array']->remove(count($_SESSION['array']->array) - 1);
        unset($_POST['usun']);
        ?>
    <div class="bdlogowanie">
        <div class="container">
            <div class="forms">
                <div class="form login">
                    <span class="title">Edytuj</span>
                    <form method="POST">
                    <div class="input-field">
                        <input name="Nazwa" type="text" value="<?php echo $lastRecord[0]; ?>" required>
                        <i class="uil uil-telescope icon"></i>
                    </div>
                    <div class="input-field">
                        <input name="Typ" type="text" value="<?php echo $lastRecord[1]; ?>" required>
                        <i class="uil uil-football icon"></i>
                    </div>
                    <div class="input-field">
                        <input name="Masa" type="text" value="<?php echo $lastRecord[2]; ?>" required>
                        <i class="uil uil-weight icon"></i>
                    </div>
                    <div class="input-field">
                        <input name="Ludnosc" type="text" value="<?php echo $lastRecord[3]; ?>" required>
                        <i class="uil uil-users-alt icon"></i>
                    </div>
                    
                        <div class="input-field button">
                            <input type="submit" value="Edytuj">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    else
    {
    ?>
    <div class="bdlogowanie">
        <div class="container">
            <div class="forms">
                <div class="form login">
                    <span class="title">Dodaj</span>
                    <form method="POST">
                        <div class="input-field">
                            <input name="Nazwa" type="text" placeholder="Wprowadź nazwę Planety" required>
                            <i class="uil uil-telescope icon"></i>
                        </div>
                        <div class="input-field">
                            <input name="Typ" type="text" placeholder="Wprowadź Typ Planety " required >
                            <i class="uil uil-football icon"></i>

                        </div>
                        <div class="input-field">
                            <input name="Masa" type="text" placeholder="Wprowadź Masę Planety " required >
                            <i class="uil uil-weight icon"></i>

                        </div>
                        <div class="input-field">
                            <input name="Ludnosc" type="text" placeholder="Wprowadź Liczbę Ludności" required >
                            <i class="uil uil-users-alt icon"></i>

                        </div>
                    
                        <div class="input-field button">
                            <input type="submit" value="Dodaj">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    
    }
    ?>

    <hr class="kreska">
</body>

</html>
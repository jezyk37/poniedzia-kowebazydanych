<?php 
//polaczenie z bazą danych
include_once("polaczenie.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Osoby19_50</title>
</head>
<body>
    
    <nav>
        Wszystkie Osoby, Osoby od 19 do 50, Osoby od 10 do 18
        <ul>
            <li>
                <a href="all.php">Wszystkie osoby</a>
            </li>
            <li>
                <a href="Osobyod19_50.php">Osoby od 19 do 50</a>
            </li>
            <li>
                <a href="Osoby10_18.php">Osoby od 10 do 18</a>
            </li>
        </ul>
    </nav>
    <h3>
        Ilość rekordów w zapytaniu:
        <?php 
        $ile = $polaczenie->query("SELECT count(baza.ID) as 'ilerokordow' from baza where wiek between 19 and 50");
        list($ilerokordow)=mysqli_fetch_row($ile);
        echo("$ilerokordow");
        ?>
    </h3>
    <div class="Osoby19_50">
        <?php 
        //SELECT baza.ID, baza.IMIE, baza.NAZWISKO, baza.WIEK from baza;
        $zapytanie = $polaczenie->query("SELECT baza.ID, baza.IMIE, baza.NAZWISKO, baza.WIEK from baza where wiek between 19 and 50;");
        echo "<ul>";
        while(list($id,$imie,$nazwisko,$wiek)=mysqli_fetch_row($zapytanie)){
            echo("<li><b>$id</b> <i>$imie, $nazwisko, $wiek</i> </li>");
        }
        echo "</ul>";
        ?>
    </div>
</body>
</html>
<?php
    //rozłączenie z bazy danych
    $polaczenie->close();
?>
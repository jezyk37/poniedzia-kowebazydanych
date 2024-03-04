<?php
include_once("polaczenie.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Towary Z Kategori nr1</title>
</head>
<body>

    <h1>Towary Z Kategori nr1</h1>
    <nav>
    <ul>
        <li>
            <a href="towary_kat_nr1.php">Towary z kategori nr1</a>
        </li>
        <li>
            <a href="towary_kat_nr4.php">Towary z kategori nr4</a>
        </li>
        <li>
            <a href="Wszystkie_towary.php">Wszystkie Towaty</a>
        </li>
    </ul>
    </nav>

    <div class="towarykatnr1">
    <?php
    $zapytanie = $polaczenie->query("Select towary.ID, towary.NAZWA, towary.CENA, count(towary.ID) from towary where KATEGORIA = 1;")
    echo("<ul>");
    while(list($id, $nazwa, $cena, $iletowarow)=mysqli_fetch_row($zapytanie)){
        echo("<li><b>$id</b> $nazwa, $cena, $iletowarow</li>")
    }
    echo("</ul>");
    ?>
    </div>


</body>
</html>
<?php
include_once("polaczenie.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Wszystkie Towary</title>
</head>
<body>

    <h1>Wszystkie Towary</h1>
    <nav>
    <ul>
        <li>
            <a href="kategorianr1.php">Towary z kategori nr1</a>
        </li>
        <li>
            <a href="kategorianr4.php">Towary z kategori nr4</a>
        </li>
        <li>
            <a href="Wszystkie.php">Wszystkie Towaty</a>
        </li>
    </ul>
    </nav>

    <section>
        <div class="sumacen">
            <h1>Suma cen wszystkiech towarów:</h1>
            <?php
            $ile = $polaczenie->query("Select SUM(towary.cena) from towary;");
            list($iletowarow)=mysqli_fetch_row($ile);
            echo("$iletowarow");
            ?>
        </div>

        <div class="wszystkietowary">
            <?php
            $zapytanie = $polaczenie->query("Select towary.ID, towary.NAZWA, towary.CENA from towary;");
            echo("<ul>");
            while(list($id, $nazwa, $cena)=mysqli_fetch_row($zapytanie)){
                echo("<li><b>$id,</b> $nazwa, $cena</li>");
            }
            echo("</ul>");
            ?>
        </div>
    </section>
</body>
</html>
<?php
$polaczenie->close()
?>
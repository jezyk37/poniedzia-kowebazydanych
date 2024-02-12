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
    <title>Ćwiczenie nr 1</title>
</head>
<body>
    <h1>Strona startowa</h1>
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
</body>
</html>
<?php
    //rozłączenie z bazy danych
    $polaczenie->close();
?>
<?php
include_once("polaczenie.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Strona Główna</title>
</head>
<body>

    <h1>Strona Główna</h1>
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
</body>
</html>
<?php
$polaczenie->close()
?>
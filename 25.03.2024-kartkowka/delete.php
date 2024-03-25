<?php

include_once("polaczenie.php");


if(isset($_POST['uczen']) && $_POST['uczen'] !=0)
{
    include_once("polaczenie.php");
    $idu = $_POST['uczen'];
    $polaczenie->query("DELETE FROM Uczniowie WHERE idu=$idu");
    $polaczenie=null;
}
header("location: index.php");

$polaczenie=null;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Strona Główna</a>
</body>
</html>
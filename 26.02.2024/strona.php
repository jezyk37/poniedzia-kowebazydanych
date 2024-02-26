<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        include_once("polaczenie.php");
    ?>

    <div class="box">
            <?php 
            $zapytanie = "Select imie,nazwisko,adres from uczniowie";
            foreach($polaczenie->query($zapytanie) as $wiersz){
                echo $wiersz["imie"]." ".$wiersz["nazwisko"]." ".$wiersz["adres"]."<br>";
            }
            ?>

    </div>

    <?php $polaczenie=null;//zamykanie polaczenie z pdo do msql?>

</body>
</html>
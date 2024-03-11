<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Autorem jest Jakub Jezy Jan Jezyk Moliński który lubi kolekcjonowac skiny, grac w fortnite i roblox</h1>
    <?php
        include_once("polaczenie.php");
    ?>

    <form action="jeden.php" method="post">
        <select name="efekt" id="efect" onchange="this.form.submit();">
        <option values="bomba">Wybierz opcję</option>
            <?php

            $zapytanie = "Select IDE,Nazwa,IDD from efekt";
            foreach($polaczenie->query($zapytanie) as $wiersz){
                echo("<option values=".$wiersz["IDE"]." />".$wiersz["Nazwa"]."</option>");
            }

            ?>
        </select>
    </form>

    <?php $polaczenie=null;//zamykanie polaczenie z pdo do msql?>

</body>
</html>
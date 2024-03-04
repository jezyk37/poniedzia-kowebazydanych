<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        .tabela_head{
            font-weight: bold;
        }
        td{
            padding: 10px;
        }
        .formularz{
            width: 600px;
            margin: auto;
        }
        input[name='imie'],input[name='nazwisko'],input[name='adres']{
            width: 400px;
            height: 25px;
            margin: 10px;
        }
        input[type="submit"]{
            float: right;
            background-color: orange;
            width: 80px;
        }
        .box{
            width: 300px;
            margin: auto;
        }
        .polaczenie{
            text-align: center;
        }
    </style>
</head>
<body>

        <div class="formularz">
            <fieldset>
                <legend>Dodaj do bazy danych</legend>
                <form action="dodaj_do_bazy.php" method="post">
                    <input type="text" name="imie" placeholder="podaj imie..." required><br>
                    <input type="text" name="nazwisko" placeholder="podaj nazwisko..." required><br>
                    <input type="text" name="adres" placeholder="podaj adres..." required><br>
                    <input type="submit" value="Dodaj">

                </form>
            </fieldset>
        </div>
        

    <?php
        include_once("polaczenie.php");
    ?>

    <div class="box">
            <?php 
            echo"<table border=1>";
            echo"<tr class='tabela_head'><td>Imię</td><td>Nazwisko</td><td>Adres</td>";
            $zapytanie = "Select imie,nazwisko,adres from uczniowie";
            foreach($polaczenie->query($zapytanie) as $wiersz){
                echo "<tr><td>". $wiersz["imie"]."</td><td>".$wiersz["nazwisko"]."</td><td>".$wiersz["adres"]."</td></tr><br>";
            }
            ?>

    </div>
    <?php $polaczenie=null;//zamykanie polaczenie z pdo do msql?>

</body>
</html>
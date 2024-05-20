<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projekt webowy</title>
    <script src="skrypt.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
include_once("connect.php")
?>

    <div class="menu">
        <h3>Menu</h3>    
        <ul>
            <li><a href="calc.php">Kalkulator spalania</a></li>
            <li><a href="cars.php">informacje nt. pojazdu</a></li>
            <li><a href="contact.php">Kontakt</a></li>
        </ul>
    </div>

    <div class="window">

        <div class="header">
            <?php
            include_once("header.php")
            ?>
        </div>

        <div class="content">
            <div class="formCars">
                <form action="cars.php" method="post">
                    <h3>Wybierz pojazd z listy:</h3>
                    <select>
                        <option>Wybierz...</option>
                        <?php

                        $zapytanie = "SELECT ids, nazwa, opis FROM samochody";
                        foreach($conn->query($zapytanie)as $wiersz)
                        {
                            $ids = $wiersz ['ids'];
                           $nazwa = $wiersz ['nazwa'];
                           $opis = $wiersz ['opis']; 
                           echo  <<<TX
                                <option value="$ids">$nazwa</option>
                                TX;

                        }
                        
                        ?>
                    </select>
                    
                </form>

                        

            </div>
            <div class="sigma">
                 <?php
                 
                 echo("<h1>$nazwa</h1><br>
                     <h3>$opis</h3>")

        
                 ?>
             </div> 
        </div>

                        

        <div class="footer">
        <?php
            include_once("footer.php")
            ?>
        </div>

    </div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>kartkówka</title>

</head>
<body>

    <?php include_once("polaczenie.php");?>
        <form action="delete.php" method="post">
        <select name="uczen" onchange="this.form.submit()">


        <option value="">Wybierz ucznia</option>
        <?php
        $zapytanie = "SELECT idu, imie, nazwisko FROM uczniowie";
        foreach($polaczenie->query($zapytanie)as $wiersz)
        {
            $idu = $wiersz ['idu'];
           $imie = $wiersz ['imie'];
           $nazwisko = $wiersz ['nazwisko']; 
           echo  <<<TX
                <option value="$idu">$imie $nazwisko</option>
                TX;
        } 
        ?>

        <?php 
            $polacznie = null;
        ?>
</select>
</form>
</body>
</html>
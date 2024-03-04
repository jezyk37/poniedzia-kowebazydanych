<?php 

if(isset($_POST["imie"]) && isset($_POST["nazwisko"]) && isset($_POST["adres"])){
    $imie = $_POST["imie"];
    $nazwisko = $_POST["nazwisko"];
    $adres = $_POST["adres"];
    echo "$imie, $nazwisko, $adres";    
    include_once("polaczenie.php");
    $dodaj_do_bazy = "INSERT INTO uczniowie(imie, nazwisko, adres) values('$imie', '$nazwisko', '$adres');";

    if($polaczenie->exec($dodaj_do_bazy)){
        echo "<h4>Dodano do bazy danych</h4>";
    }else{
        echo"Błąd dodania do bazy";
    }

    $polaczenie = null;
    header("refresh: 3; url=index.php");
    

}else {
    header("Location:index.php");
}


?>
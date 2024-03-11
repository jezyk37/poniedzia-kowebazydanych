<?php
$serwer = "localhost";
$port = 3306;
$username = "root";
$password = "";
$bazadanych = "Radosc";

try{
    $polaczenie = new PDO('mysql:host='.$serwer.';dbname='.$bazadanych.';port='.$port.';charset=utf8',$username,$password);
    echo("<h1 class='polaczenie'>Połączono z bazą danych przez PDO</h1>");
}catch(PDOException $event){
    echo("Błąd połączenia z bazą danych przez PDO");
    echo($event);
    die();//jeśli nie połącze się z bazą to rozłącz połączenie 
}
?>
<?php
$serwer = "localhost";
$port = 3306;
$username = "root";
$password = "";
$bazadanych = "baza25032024";

try{
    $polaczenie = new PDO('mysql:host='.$serwer.';dbname='.$bazadanych.';port='.$port.';charset=utf8',$username,$password);
    echo("<h1>Połączono z bazą danych przez PDO</h1>");
}catch(PDOException $event){
    echo("Błąd połączenia z bazą danych przez PDO");
    echo($event);
    die();
}
?>
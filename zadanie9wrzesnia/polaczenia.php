<?php
$host = 'localhost';
$user = 'uzytkownik';
$password = 'haslo';
$database = 'nazwa_bazy';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Polaczenie nieudane: " . $conn->connect_error);
}
echo "Polaczenie udane!";

$conn->close();
?>
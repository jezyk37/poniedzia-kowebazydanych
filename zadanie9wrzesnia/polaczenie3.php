<?php
$dsn = 'pgsql:host=localhost;port=5432;dbname=nazwa_bazy';
$user = 'uzytkownik';
$password = 'haslo';

try {
    $pdo = new PDO($dsn, $user, $password);
    echo "Polaczenie z PostgreSQL udane!";
} catch (PDOException $e) {
    echo "Polaczenie nieudane: " . $e->getMessage();
}
?>


<?php
$host = "host=localhost";
$port = "port=5432";
$dbname = "dbname=database_name";
$credentials = "user=username password=password";

$db = pg_connect("$host $port $dbname $credentials");

if (!$db) {
    echo "Połączenie nieudane!";
} else {
    echo "Połączenie udane!";
}

pg_close($db);
?>

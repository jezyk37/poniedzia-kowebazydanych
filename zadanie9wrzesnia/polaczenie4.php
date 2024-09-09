<?php
$serverName = "localhost";
$database = "database_name";
$user = "username";
$password = "password";

try {
    $conn = new PDO("sqlsrv:server=$serverName;Database=$database", $user, $password);
    echo "Połączenie z MS SQL Server Express udane!";
} catch (PDOException $e) {
    echo "Połączenie nieudane: " . $e->getMessage();
}
?>


<?php
$serverName = "localhost";
$connectionOptions = array(
    "Database" => "database_name",
    "Uid" => "username",
    "PWD" => "password"
);

$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}
echo "Połączenie udane!";

sqlsrv_close($conn);
?>
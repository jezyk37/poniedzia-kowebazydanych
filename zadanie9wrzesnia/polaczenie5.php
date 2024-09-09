<?php
$dsn = 'DSN=my_odbc_data_source';
$user = 'username';
$password = 'password';

$conn = odbc_connect($dsn, $user, $password);

if (!$conn) {
    die("Połączenie nieudane: " . odbc_errormsg());
}
echo "Połączenie z ODBC udane!";

odbc_close($conn);
?>
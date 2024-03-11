<?php
if(isset($_POST['efekt'])){
    echo"<hr/>";
    echo"<h2>{$_POST['efekt']}</h2>";
    echo"<hr/>";
}else{
    echo("ni ma co kukać chopie");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Powrót</a>
</body>
</html>
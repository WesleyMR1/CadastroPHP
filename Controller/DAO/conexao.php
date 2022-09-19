<?php
$dsn = "mysql:dbname=Cadastro;host=localhost";
$username = "root";
$password = "";

try {
    $pdo = new PDO($dsn, $username, $password);

} catch (PDOException $e) {
    echo "Error!<br> Error num: ".$e->getMessage()."<br/>";
}


?>

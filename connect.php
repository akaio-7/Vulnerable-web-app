<?php 

$dsn = 'mysql:host=localhost;dbname=school;';
$user = 'root';
$passwd = '';

try {
    $conn = new PDO($dsn,$user,$passwd);

} catch (PDOException $e) {
    echo $e;
}


?>
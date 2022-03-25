<?php require "connect.php"; ?>
<?php require "header.php"; ?>

<?php

$fullname = $_POST['fullname'] ;
$username = $_POST['user'] ;
$password = $_POST['passwd'] ;

$sql = "INSERT INTO users(fullname,username,password) VALUES('".$fullname."','".$username."','".$password."')";

if ($conn->exec($sql)) {
    header('Location:login.php');
}

?>

<?php require "footer.php"; ?>
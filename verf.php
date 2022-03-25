
<?php require "connect.php"; ?>
<?php require "header.php"; ?>
<?php 

$sql = "SELECT * FROM users WHERE username='".$_POST['user']."' AND password='".$_POST['passwd']."'";

$queryy = $conn->query($sql);

$accts = $queryy->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="container-fluid p-5 bg-primary text-white text-center">
  <h3>Welcome !</h3>
  <h1><?php echo $accts[0]['username']; ?></h1> 
</div>
  
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h3>Fullname</h3>
      <h5><?php echo $accts[0]['fullname']; ?></h5>
    </div>
    <div class="col-sm-4">
      <h3>Username</h3>
      <h5><?php echo $accts[0]['username']; ?></h5>
    </div>
    <div class="col-sm-4">
      <h3>Password</h3>        
      <h5><?php echo $accts[0]['password']; ?></h5>
    </div>
  </div>
</div>

<?php require "footer.php"; ?>
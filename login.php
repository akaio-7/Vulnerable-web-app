<?php require "connect.php"; ?>
<?php require "header.php"; ?>

<div class="container mt-3">
  <h2>Sign In Form</h2>
  <form action="verf.php" method=post>
    <div class="mb-3 mt-3">
      <label for="user">Username:</label>
      <input type="text" class="form-control" id="user" placeholder="Enter username" name="user">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="passwd">
    </div>
    <button type="submit" class="btn btn-primary">Log In</button>
  </form>
</div>

<br>
<hr class="text-primary">
<br>

<div class="container mt-3">
  <h2>Sign Up Form</h2>
  <form action="add.php" method=post>

    <div class="mb-3 mt-3">
      <label for="fn">Fullname:</label>
      <input type="text" class="form-control" id="fn" placeholder="Enter fullname" name="fullname">
    </div>
    <div class="mb-3 mt-3">
      <label for="user">Username:</label>
      <input type="text" class="form-control" id="user" placeholder="Enter username" name="user">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="passwd">
    </div>
    <button type="submit" class="btn btn-primary">Sign Up</button>
  </form>
</div>

<?php require "footer.php"; ?>
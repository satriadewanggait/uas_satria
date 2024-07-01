<?php
session_start();
if($_SESSION["auth"]) header("Location: http://localhost:8000/dashboard");

include './views/layouts/header.php';
?>

<div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4">
    <div class="form-box">
      <div class="form-top">
        <div class="form-top-left">
          <h3>Login</h3>
          <p>Enter email and password to login:</p>
        </div>
        <div class="form-top-right">
          <i class="fa fa-key"></i>
        </div>
      </div>
      <div class="form-bottom">
        <form role="form" action="models/login.php" method="post" class="login-form">
          <div class="form-group">
            <label class="sr-only" for="form-email">Email</label>
            <input type="email" name="email" placeholder="example@gmail.com" class="form-email form-control" id="form-email">
          </div>
          <div class="form-group">
            <label class="sr-only" for="form-password">Password</label>
            <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
          </div>
          <button type="submit" class="btn" name="login">Login</button>
        </form>
      </div>
    </div>
  </div>
  <div class="col-sm-4"></div>
</div>

<?php include './views/layouts/footer.php'; ?>
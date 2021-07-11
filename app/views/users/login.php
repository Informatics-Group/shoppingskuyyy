<?php
require APPROOT . '/views/includes/head.php';
?>
<div class="container">
  <div class="col d-flex justify-content-center mt-5 mb-5">
    <div class="card card-signin flex-row my-3 mt-5 mb-4">
      <div class="card-body">
        <h5 class="card-title text-center fw-bold">Login</h5>
        <form class="form-signin" action="<?php echo URLROOT; ?>/users/login" method="POST">
          <div class="form-label-group">
            <input type="text" id="inputUserame" class="form-control" placeholder="Username *" name="username" autofocus>
            <label for="inputUserame">Username or Email</label>
            <span class="invalidFeedback">
              <?php echo $data['usernameError']; ?>
            </span>
          </div>
          <div class="form-label-group">
            <input type="password" id="inputPassword" class="form-control" placeholder="Password *" name="password">
            <label for="inputPassword">Password</label>
            <span class="invalidFeedback">
              <?php echo $data['passwordError']; ?>
            </span>
          </div>
          <div class="text-center mt-4 d-flex justify-content-between">
            <a href="<?php echo URLROOT; ?>/users/register" class="btn btn-lg btn-outline-primary btn-block text-uppercase" type="submit" value="submit">Register?</a>
            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="submit">Sign-in</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
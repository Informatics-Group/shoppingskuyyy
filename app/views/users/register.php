<?php
require APPROOT . '/views/includes/head.php';
?>
<div class="container">
  <div class="col d-flex justify-content-center mt-4">
    <div class="card card-signout flex-row my-3">
      <div class="card-body">
        <h5 class="card-title text-center fw-bold">Register Now</h5>
        <form class="form-signout" method="POST" action="<?php echo URLROOT; ?>/users/register">
          <div class="form-label-group">
            <input type="text" id="inputUserame" class="form-control" placeholder="Username *" name="username" autofocus>
            <label for="inputUserame">Username</label>
            <span class="invalidFeedback">
              <?php echo $data['usernameError']; ?>
            </span>
          </div>

          <div class="form-label-group">
            <input type="email" id="inputEmail" class="form-control" placeholder="Email *" name="email">
            <label for="inputEmail">Email address</label>
            <span class="invalidFeedback">
              <?php echo $data['emailError']; ?>
            </span>
          </div>
          <hr>
          <div class="form-label-group">
            <input type="password" id="inputPassword" class="form-control" placeholder="Password *" name="password">
            <label for="inputPassword">Password</label>
            <span class="invalidFeedback">
              <?php echo $data['passwordError']; ?>
            </span>
          </div>

          <div class="form-label-group">
            <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Confirm Password *" name="confirmPassword">
            <label for="inputConfirmPassword">Confirm password</label>
            <span class="invalidFeedback">
              <?php echo $data['confirmPasswordError']; ?>
            </span>
          </div>
          <div class="text-center mt-4 d-flex justify-content-between">
            <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-lg btn-outline-primary btn-block text-uppercase" type="submit" value="submit">Sign-in?</a>
            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="submit">Register</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
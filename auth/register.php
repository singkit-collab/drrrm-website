<?php include "../layouts/header.php" ?>
<div class="login-page bg-body-secondary">

<div class="register-box">
      <div class="register-logo">
        <a href="login.php"><b>Admin</b>LTE</a>
      </div>
      <!-- /.register-logo -->
    <div class="card">
  <div class="card-body register-card-body">
    <p class="register-box-msg">Register a new membership</p>

    <form action="../index3.html" method="post" enctype="multipart/form-data">
      
      <!-- Full Name -->
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Full Name" name="full_name" required />
        <div class="input-group-text"><span class="bi bi-person"></span></div>
      </div>

      <!-- Address -->
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Address" name="address" required />
        <div class="input-group-text"><span class="bi bi-geo-alt"></span></div>
      </div>

      <!-- Contact Number -->
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Contact Number" name="contact" required />
        <div class="input-group-text"><span class="bi bi-telephone"></span></div>
      </div>

      <!-- Email -->
      <div class="input-group mb-3">
        <input type="email" class="form-control" placeholder="Email" name="email" required />
        <div class="input-group-text"><span class="bi bi-envelope"></span></div>
      </div>

      <!-- Password -->
      <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="Password" name="password" required />
        <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
      </div>

      <!-- Upload Image -->
      <div class="input-group mb-3">
        <input type="file" class="form-control" name="profile_image" accept="image/*" />
        <div class="input-group-text"><span class="bi bi-image"></span></div>
      </div>

      <!-- Submit Button -->
      <div class="row">
        <div class="col-12">
          <button type="submit" class="btn btn-primary btn-block w-100">Register</button>
        </div>
      </div>
    </form>
  </div>
</div>


            <!--begin::Row-->
            <div class="row">
              <div class="col-8">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                  <label class="form-check-label" for="flexCheckDefault">
                    I agree to the <a href="#">terms</a>
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary">Sign In</button>
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!--end::Row-->
          </form>
          <!-- /.social-auth-links -->
          <p class="mb-0">
            <a href="login.php" class="text-center"> I already have a membership </a>
          </p>
        </div>
        <!-- /.register-card-body -->
      </div>
    </div>

<?php include "../layouts/footer.php" ?>
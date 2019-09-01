<div class="container">
<!-- Material form login -->
<div class="card col-6 offset-3 mt-5 mb-5">

  <h5 class="card-header info-color white-text text-center py-4 mt-4">
    <strong>Sign in</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 p-5">

    <!-- Form -->
    <form class="text-center" style="color: #757575;" action="<?= base_url('auth') ?>" method="post">

      <!-- Email -->
      <div class="md-form">
        <input type="email" id="" class="form-control" placeholder="Masukan Email" name="email">
      </div>

      <!-- Password -->
      <div class="md-form">
        <input type="password" id="" class="form-control" placeholder="Masukan Password" name="password">
      </div>

      <div class="d-flex justify-content-around">
        <div>
          <!-- Remember me -->
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="materialLoginFormRemember"> Remember Me
          </div>
        </div>
      </div>

      <!-- Sign in button -->
      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>

    </form>
    <!-- Form -->

  </div>

</div>
<!-- Material form login -->
</div>
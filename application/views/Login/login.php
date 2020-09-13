<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-lg-6">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">

            <div class="col-lg">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                </div>

                <?= $this->session->flashdata('message'); ?>
                <form class="user" method="POST" action="<?= base_url('index.php/Login'); ?>">
                  <div class="form-group">
                    <?php if (form_error('email')) : ?>
                      <input type="text" class="form-control form-control-user is-invalid" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                      <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                    <?php else : ?>
                      <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                    <?php endif; ?>
                  </div>
                  <div class="form-group">
                    <?php if (form_error('password')) : ?>
                      <input type="password" class="form-control form-control-user is-invalid" id="password" name="password" placeholder="Password">
                      <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                    <?php else : ?>
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                    <?php endif ?>
                  </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block">
                    Login
                  </button>
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="<?= base_url('index.php/Login/forgotPassword'); ?>">Lupa Password?</a>
                </div>
                <div class="text-center">
                  <a class="small" href="<?= base_url('index.php/Login/registration'); ?>">Buat akun jika belum terdaftar!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>
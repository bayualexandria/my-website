<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                    </div>
                    <form class="user" method="POST" action="<?= base_url('auth/registration'); ?>">
                        <div class="form-group">
                            <?php if (form_error('name')) : ?>
                                <input type="text" class="form-control form-control-user is-invalid" id="name" name="name" placeholder="Full name" value="<?= set_value('name'); ?>">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                            <?php else : ?>
                                <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full name" value="<?= set_value('name'); ?>">
                            <?php endif; ?>

                        </div>
                        <div class="form-group">
                            <?php if (form_error('email')) : ?>
                                <input type="text" class="form-control form-control-user is-invalid" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                            <?php else : ?>
                                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                            <?php endif; ?>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <?php if (form_error('password1')) : ?>
                                    <input type="password" class="form-control form-control-user is-invalid" id="password1" name="password1" placeholder="Password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
                                <?php else : ?>
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                <?php endif; ?>
                            </div>
                            <div class="col-sm-6">
                                <?php if (form_error('password2')) : ?>
                                    <input type="password" class="form-control form-control-user is-invalid" id="password2" name="password2" placeholder="Repeat Password">
                                <?php else : ?>
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                <?php endif; ?>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Register Account
                        </button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="<?= base_url('Login/forgotPassword'); ?>">Lupa Password?</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="<?= base_url('Login'); ?>">Akun sudah dibuat? Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
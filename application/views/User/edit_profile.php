<div class="dashboard-wrapper">
    <div class="dashboard-influence">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="card card-default">
                    <div class="card-header with-border">
                        <h3 class="card-title pull-center"> <?= $title; ?></h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <?= form_open_multipart('user/edit_profile'); ?>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
                                    <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="picture">Picture</label>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="<?= base_url('asset/img/') . $user['image']; ?>" class="img-thumbnail">
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="cusom-file col-sm-3">
                                                <input type="file" class="custom-file-input" name="image" id="image">
                                                <label for="image" class="custom-file-label"><small class="pt-2" style="font-size:11px; font-family:Arial, Helvetica, sans-serif;"> Choose file</small></label>
                                            </div>
                                            Max 2 Mega Bytes
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <button class="btn btn-sm btn-success"><i class="fas fa-edit"></i> Update</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <!-- <?= $this->session->flashdata('message'); ?> -->
                                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
                                <form action="<?= base_url('user/changepassword') ?>" method="post">
                                    <div class="form-group">
                                        <label for="current_password">Current Password</label>
                                        <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Current Password">
                                        <?= form_error('current_password', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="new_password1">New Password</label>
                                        <input type="password" class="form-control" id="new_password1" name="new_password1" placeholder="New Password">
                                        <?= form_error('new_password1', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="new_password2">Repeat Password</label>
                                        <input type="password" class="form-control" id="new_password2" name="new_password2" placeholder="Repeat Password">
                                        <?= form_error('new_password2', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-key"></i> Change Password</button>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content
<div class="dashboard-wrapper">
    <div class="dashboard-influence">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-21 col-sm-12 col-12">
                    <?= $this->session->flashdata('message'); ?>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data <?= $title; ?></h3>
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <input type="hidden" name="id" value="<?= $brain['id']; ?>">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Users name" value="<?= $brain['name']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Users email" value="<?= $brain['email']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Users password" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="repassword" id="repassword" placeholder="Users re-password" requied>
                                        </div>
                                        <div class="form-group">
                                            <select name="role_id" id="role_id" class="form-control" required>
                                                <option value="">Select Menu</option>
                                                <?php foreach ($role as $r) : ?>
                                                    <option value="<?= $r['id']; ?>"><?= $r['role']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" value="1" name="is_active" id="is_active" checked>
                                                <label for="is_active" class="form-check-label">
                                                    Active?
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer md-3">
                                        <a href="<?= base_url(); ?>Admin/brain" type="button" class="btn bg-silver" data-dismiss="modal"> <i class="fas fa-arrow-left"></i> Close</a>
                                        <button class="btn bg-blue"> <i class="fas fa-sync"></i> Update to data</button>
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
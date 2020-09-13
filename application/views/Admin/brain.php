<div class="dashboard-wrapper">
  <div class="dashboard-influence">
    <div class="container-fluid dashboard-content">
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <!-- <?= $this->session->flashdata('message'); ?> -->
          <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
          <div class="card page-body" style="font-size:12px;">
            <div class="card-header">
              <h3 class="card-title">Data <?= $title; ?></h3>
            </div>
            <div class="card-body">
              <table id="example1" class=" table table-bordered table-responsive-md">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Aktif</th>
                    <th scope="col">
                      <a href="" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#add">
                        <i class="fas fa-plus"></i>
                      </a>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($brain as $m) : ?>
                    <tr>
                      <th><?= $i ?></th>
                      <th><?= $m['name']; ?></th>
                      <th><?= $m['email']; ?></th>
                      <th><?= $m['password']; ?></th>
                      <th><?= $m['is_active']; ?></th>
                      <th>


                        <a href="<?= base_url(); ?>Admin/editBrain/<?= $m['id']; ?>" class="btn btn-circle btn-sm btn-primary"><i class="fas fa-pencil-alt"></i></a>

                        <a href="<?= base_url(); ?>Admin/hapusBrain/<?= $m['id']; ?>" class="btn btn-circle btn-sm btn-danger hapus"><i class="fas fa-trash"></i></a>

                        <a href="<?= base_url(); ?>Admin/detailBrain/<?= $m['id']; ?>" class="btn btn-circle btn-sm btn-secondary"><i class="fas fa-eye"></i></a>

                      </th>
                    </tr>
                    <?php $i++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="add">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add New Users</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>
      <form action="<?= base_url('index.php/Admin/brain'); ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" name="name" id="name" placeholder="Users name" required>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Users email" required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="password" id="password" placeholder="Users password" required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="repassword" id="repassword" placeholder="Users re-password" required>
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
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="form-check-input" value="1" name="is_active" id="is_active" checked>
              <label for="is_active" class="form-check-label">
                Active?
              </label>
            </div>
          </div>
        </div>
        <div class="modal-footer md-3">
          <button type="button" class="btn bg-silver" data-dismiss="modal"> <i class="glyphicon glyphicon-arrow-left"></i> Close</button>
          <button class="btn bg-blue"> <i class="glyphicon glyphicon-plus"></i> Add to data</button>
        </div>
      </form>
    </div>
  </div>
</div>
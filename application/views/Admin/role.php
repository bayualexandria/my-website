<div class="dashboard-wrapper">
  <div class="dashboard-influence">
    <div class="container-fluid dashboard-content">
      <div class="row">
        <div class="col-lg-6">
          <div class="flash-data" style="width:12rem;font-size:small;" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
          <div class="box" style="margin-top:15px;">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Data <?= $title; ?></h3>
              </div>
              <div class="box-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Role</th>
                      <th scope="col" class="text-center">
                        <a href="" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#add">
                          <i class="fas fa-plus"></i>
                        </a>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($role as $r) : ?>
                      <tr>
                        <th><?= $i ?></th>
                        <th><?= $r['role']; ?></th>
                        <th class="text-center">

                          <a href="<?= base_url('admin/roleaccess/') . $r['id']; ?>" class="btn btn-circle btn-sm btn-warning"><i class="fas fa-check"></i></a>

                          <a href="" class="btn btn-circle btn-sm btn-primary"><i class="fas fa-pencil-alt"></i></a>

                          <a href="" class="btn btn-circle btn-sm btn-danger hapus"><i class="fas fa-trash"></i></a>

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
</div>

<div class="modal fade" id="add">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add New Role</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
      </div>
      <form action="<?= base_url('index.php/Admin/role'); ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" name="role" placeholder="Role Name">
          </div>
        </div>
        <div class="modal-footer md-3">
          <button type="button" class="btn bg-silver" data-dismiss="modal">Close</button>
          <button class="btn bg-blue">Add</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="dashboard-wrapper">
  <div class="dashboard-influence">
    <div class="container-fluid dashboard-content">
      <div class="row">
        <div class="col-md">
          <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
          <!-- <?= $this->session->flashdata('message'); ?> -->
          <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
          <div class="card" style="margin-top:15px;">
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            <div class="card-header">
              <h3 class="card-title">Data <?= $title; ?></h3>
            </div>
            <div class="card-body">
              <table id="example2" class=" table table-bordered table-responsive-md">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Menu</th>
                    <th scope="col" class="text-center">
                      <a href="" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#add">
                        <i class="fas fa-plus"></i>
                      </a>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($menu as $m) : ?>
                    <tr>
                      <th><?= $i ?></th>
                      <th><?= $m['menu']; ?></th>
                      <th class="text-center">
                        <a href="" class="btn btn-circle btn-sm btn-primary"><i class="fas fa-pencil-alt"></i></a>
                        <a href="<?= base_url(); ?>Menu/hapusUserMenu<?= $m['id']; ?>" class="btn btn-circle btn-sm btn-danger hapus"><i class="fas fa-trash"></i></a>
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
<!-- MOdal -->
<div class="modal fade" id="add">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add New Menu</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>
      <form action="<?= base_url('index.php/Menu'); ?>" method="post">
        <div class="modal-body">
          <div class="form-group">

            <input type="text" class="form-control" name="menu" placeholder="Menu Name">
          </div>
        </div>

        <div class="modal-footer md-3">
          <button type="button" class="btn bg-silver" data-dismiss="modal">Close</button>
          <button class="btn bg-blue">Add</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
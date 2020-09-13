<div class="dashboard-wrapper">
  <div class="dashboard-influence">
    <div class="container-fluid dashboard-content">
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <?= $this->session->flashdata('message'); ?>
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data <?= $title; ?></h3>
              </div>
              <div class="card-body">
                <table id="example1" class=" table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Title</th>
                      <th scope="col">Menu</th>
                      <th scope="col">Url</th>
                      <th scope="col">Icon</th>
                      <th scope="col">Active</th>
                      <th scope="col">
                        <a href="" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#add">
                          <i class="fas fa-plus"></i>
                        </a>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($subMenu as $sm) : ?>
                      <tr>
                        <th><?= $i ?></th>
                        <th><?= $sm['title']; ?></th>
                        <th><?= $sm['menu']; ?></th>
                        <th><?= $sm['url']; ?></th>
                        <th><?= $sm['icon']; ?></th>
                        <th><?= $sm['is_active']; ?></th>
                        <th>

                          <a href="<?= base_url(); ?>Menu/editSubMenu/<?= $sm['id']; ?>" class="btn btn-circle btn-sm btn-primary"><i class="fas fa-pencil-alt"></i></a>

                          <a href="<?= base_url(); ?>Menu/hapusSubMenu/<?= $sm['id']; ?>" class="btn btn-circle btn-sm btn-danger hapus"><i class="fas fa-trash"></i></a>
                          
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
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add New Sub Menu</h4>
      </div>
      <form action="<?= base_url('index.php/Menu/submenu'); ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" name="title" id="title" placeholder="Submenu title">
          </div>
          <div class="form-group">
            <select name="menu_id" id="menu_id" class="form-control">
              <option value="">Select Menu</option>
              <?php foreach ($menu as $m) : ?>
                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="url" id="url" placeholder="Submenu url">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="icon" id="icon" placeholder="Submenu icon">
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
          <button type="button" class="btn bg-silver" data-dismiss="modal"> <i class="glyphicon glyphicon-arrow-left"></i> Close</button>
          <button class="btn bg-blue"> <i class="glyphicon glyphicon-plus"></i> Add to data</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->


</div>
<!-- MOdal -->
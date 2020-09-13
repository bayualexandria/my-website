<div class="dashboard-wrapper">
  <div class="dashboard-influence">
    <div class="container-fluid dashboard-content">
  <!-- Content Header (Page header) -->
        <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                  <h3 class="mb-2"><?= $title; ?></h3>
                  <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link"><?= $menu1; ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"> <?= $title; ?></li>
                      </ol>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
  <!-- /.content -->
  <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" >


      <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
          <?= validation_errors(); ?>
        </div>
      <?php endif; ?>

      <?= $this->session->flashdata('message'); ?>
      <div class="col-md-12">
        <div class="card">

          <div class="card-header">
            <h3 class="card-title">Data <?= $title; ?></h3>
          </div>
          <div class="card-body">
            <form action="" method="post">
              <input type="hidden" name="id"  value="<?= $sub_menu['id'];?>">
              <div class="modal-body">
                <div class="form-group">
                  <input type="text" class="form-control" name="title" id="title" value="<?= $sub_menu['title']; ?>">
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
                  <input type="text" class="form-control" name="url" id="url" value="<?= $sub_menu['url']; ?>">
                </div>
                <div class=" form-group">
                  <input type="text" class="form-control" name="icon" id="icon" placeholder="Submenu icon" value="<?= $sub_menu['icon']; ?>">
                </div>
                <div class=" form-group">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="1" name="is_active" id="is_active" checked>
                    <label for="is_active" class="form-check-label">
                      Active?
                    </label>
                  </div>
                </div>
              </div>

              <div class="modal-footer md-3">
                <button type="button" class="btn bg-silver"> <i class="glyphicon glyphicon-arrow-left"></i> Close</button>
                <button class="btn bg-blue"> <i class="glyphicon glyphicon-plus"></i> Update to data</button>
              </div>
            </form>

          </div>
        </div>
      </div>
</div>
    </div>
  </div>

</div>
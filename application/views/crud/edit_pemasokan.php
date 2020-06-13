<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("admin/admin_pemasokan/head.php") ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!--sidebar-->
    <?php $this->load->view("admin/admin_pemasokan/sidebar.php") ?>
    <!--end ofsidebar-->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view("admin/admin_pemasokan/topbar.php") ?>
        <!--End of Topbar -->
        
        <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>

    <div class="container-fluid">
        <div class="card shadow mb-4">
    <div class="card-header">
    <a href="<?php echo site_url('admin/products/') ?>"><i class="fas fa-arrow-left"></i>
              Back</a>
    </div>
    <div class="card-body">
    <form action="<?php base_url("Pemasokan/edit") ?>" method="post"
              enctype="multipart/form-data" >
    
    <input type="hidden" name="id_pemasokan" value="<?php echo $tb_pemasokan->id_pemasokan?>" />

    <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Tanggal</label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control"
                 type="date" value="<?=date('Y-m-d')?>" name="tgl" placeholder="Pilih tanggal" value="<?php echo $tb_pemasokan->tgl ?>"/>
                <div class="invalid-feedback">
                </div>
              </div>
              </div>

              <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Nama</label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
                 type="text" name="nama" placeholder="Masukkan nama" value="<?php echo $tb_pemasokan->nama ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('nama') ?>
                </div>
              </div>
              </div>

              <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Nomer TLP</label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control <?php echo form_error('nmr') ? 'is-invalid':'' ?>"
                 type="text" name="nmr" placeholder="Masukkan nomor telepon" value="<?php echo $tb_pemasokan->nmr ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('nmr') ?>
                </div>
              </div>
              </div>

              <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Alamat</label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
                 type="text" name="alamat" placeholder="Masukkan alamat" value="<?php echo $tb_pemasokan->alamat?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('alamat') ?>
                  </div>
                </div>
              </div>

              <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Berat (TON)</label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control <?php echo form_error('Berat') ? 'is-invalid':'' ?>"
                 type="text" name="Berat" placeholder="Masukkan berat" value="<?php echo $tb_pemasokan->Berat ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('Berat') ?>
                </div>
              </div>
              </div>

              <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Harga</label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control <?php echo form_error('harga') ? 'is-invalid':'' ?>"
                 type="text" name="harga" min="0" placeholder="Masukkan harga" value="<?php echo $tb_pemasokan->harga ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('harga') ?>
                </div>
                </div>
              </div>
              <br><br>
        <input class="btn btn-success" type="submit" name="btn" value="Update" onclick="return confirm('Anda yakin ingin mengupdate data?');" />
              <br><br>
            </form>

          </div>
</div>
</div>
  

      </div>
       <!-- End of Main Content -->


       <!-- Footer -->
       <?php $this->load->view("admin/admin_pemasokan/footer.php") ?>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url('Login/logout');?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('asset/admin/vendor/jquery/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('asset/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('asset/admin/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('asset/admin/js/sb-admin-2.min.js')?>"></script>

</body>

</html>





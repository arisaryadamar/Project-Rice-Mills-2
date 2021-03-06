<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("admin/admin_penggilingan/head.php") ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!--sidebar-->
    <?php $this->load->view("admin/admin_penggilingan/sidebar3.php") ?>
    <!--end ofsidebar-->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view("admin/admin_penggilingan/topbar.php") ?>
        <!--End of Topbar -->
    
    <div class="card shadow mb-4">
           <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-dark" align="text-center">Tambah Stok Beras</h6> <!--membuat judul pada card-->
           </div>
         <div class="card-body">
          <div class="row align-items-center justify-content-center">
  <div class="row">
  <div class="col-lg-11">
    <div class="p-5">
      <div class="text-center">
        <form class="user" action="<?php echo site_url('Hasilgiling/input/')?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label style="margin-right: 430px"><b>Kode Barang</b></label>
            <input type="text" style="width: 600px" class="form-control <?php echo form_error('kode_barang') ? 'is-invalid':'' ?>" id="kode_barang" name="kode_barang" placeholder="Masukkan Kode Barang">
            <div class="invalid-feedback">
                  <?php echo form_error('kode_barang') ?>
                </div>
          </div>

          <div class="form-group">
            <label style="margin-right: 520px"><b>Berat</b></label>
            <input type="text" style="width: 600px" class="form-control <?php echo form_error('ukuran_sak') ? 'is-invalid':'' ?>" id="ukuran_sak" name="ukuran_sak" placeholder="Masukkan ukuran sak">
            <div class="invalid-feedback">
                  <?php echo form_error('ukuran_sak') ?>
                </div>
          </div>

          <div class="form-group">
            <label style="margin-right: 520px"><b>Stok</b></label>
            <input type="text" style="width: 600px" class="form-control <?php echo form_error('stok') ? 'is-invalid':'' ?>" id="stok" name="stok" placeholder="Masukkan stok" >
            <div class="invalid-feedback">
                  <?php echo form_error('stok') ?>
                </div>
          </div>

          <br><br>
          
        <input class="btn btn-success" type="submit" name="btn" value="Save" />
              <br><br>
            </form>
</div>
</div>
  </div>
</div>
</div>

      </div>
       <!-- End of Main Content -->


       <!-- Footer -->
       <?php $this->load->view("admin/admin_penggilingan/footer.php") ?>
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
          <h5 class="modal-title" id="exampleModalLabel">Yakin ingin Keluar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih "Logout" untuk keluar dari sistem.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url('Login/logout')?>">Logout</a>
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





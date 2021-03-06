<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("admin/admin_penjualan/head.php") ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!--sidebar-->
    <?php $this->load->view("admin/admin_penjualan/sidebar.php") ?>
    <!--end ofsidebar-->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view("admin/admin_penjualan/topbar.php") ?>
        <!--End of Topbar -->
        <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>
        <div class="container-fluid">
    <div class="card shadow mb-4">
           <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-dark" align="text-center">Edit Data Penjualan</h6> <!--membuat judul pada card-->
           </div>
         <div class="card-body">
  
        <div class="row align-items-center justify-content-center">
        </div><?php foreach($penjualan as $baris){ ?>
        <form action="<?php base_url("Penjualan/update") ?>" method="post"
              enctype="multipart/form-data" >

              <input type="hidden" name="No" value="<?php echo $baris->No; ?>">

            <div class="form-group">
            <label style="margin-right: 500px"><b>Tanggal</b></label>
            <input type="date" style="width: 600px" class="form-control <?php echo form_error('tanggal') ? 'is-invalid':'' ?>" id="tanggal" name="tanggal" placeholder="Masukkan Tanggal" value="<?php echo $baris->tanggal; ?>" required>
            <div class="invalid-feedback">
              <?php echo form_error('tanggal') ?>
                </div>
          </div>


            <div class="form-group">
            <label style="margin-right: 500px"><b>Kode Barang</b></label>
            <input type="text" style="width: 600px" class="form-control <?php echo form_error('kode_barang') ? 'is-invalid':'' ?>" id="kode_barang" name="kode_barang" placeholder="Masukkan Kode Barang" value="<?php echo $baris->kode_barang; ?>" required>
            <div class="invalid-feedback">
              <?php echo form_error('kode_barang') ?>
                </div>
          </div>

          <div class="form-group">
            <label style="margin-right: 510px"><b>Jumlah</b></label>
            <input type="text" style="width: 600px" class="form-control <?php echo form_error('Jumlah') ? 'is-invalid':'' ?> " id="Jumlah" name="Jumlah" placeholder="Masukkan Jumlah" value="<?php echo $baris->Jumlah;?>">
            <div class="invalid-feedback">
                  <?php echo form_error('Jumlah') ?>
                </div>
          </div>

          <div class="form-group">
            <label style="margin-right: 510px"><b>Harga (per pcs)</b></label>
            <input type="text" style="width: 600px" class="form-control <?php echo form_error('Harga') ? 'is-invalid':'' ?> " id="Harga" name="Harga" placeholder="Masukkan Harga per pcs" value="<?php echo $baris->Harga;?>">
            <div class="invalid-feedback">
                  <?php echo form_error('Harga') ?>
                </div>
          </div>

          <div class="form-group">
            <label style="margin-right: 510px"><b>Total Harga</b></label>
            <input type="text" style="width: 600px" class="form-control <?php echo form_error('Total_harga') ? 'is-invalid':'' ?> " id="Total_harga" name="Total_harga" placeholder="Masukkan total harga" value="<?php echo $baris->Total_harga;?>">
            <div class="invalid-feedback">
                  <?php echo form_error('Total_harga') ?>
                </div>
          </div>
          
          
        <input class="btn btn-success" type="submit" name="btn" value="Update" onclick="return confirm('Anda yakin ingin mengupdate data?');" />
              <br><br>
            </form>
            <?php } ?>
          </div>
          </div>
</div>
</div>

      </div>
       <!-- End of Main Content -->


       <!-- Footer -->
       <?php $this->load->view("admin/admin_penjualan/footer.php") ?>
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





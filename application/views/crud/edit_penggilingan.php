<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("admin/admin_penggilingan/head.php") ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!--sidebar-->
    <?php $this->load->view("admin/admin_penggilingan/sidebar.php") ?>
    <!--end ofsidebar-->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view("admin/admin_penggilingan/topbar.php") ?>
        <!--End of Topbar -->
        <div class="container-fluid">
    <div class="card shadow mb-4">
           <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-dark" align="text-center">Edit Data Penggilingan</h6> <!--membuat judul pada card-->
           </div>
         <div class="card-body">
  
        <div class="row align-items-center justify-content-center">
<<<<<<< HEAD
        </div><?php foreach($penggilingan as $baris){ ?>
    <form action="<?php echo base_url().'Penggilingan/update'; ?>" method="post"
=======
          <?php foreach($penggilingan as $baris){ ?>
        <form action="<?php base_url("Penggilingan/update") ?>" method="post"
>>>>>>> 113c9a1a9a517665fab9c43a903a8d5b72fac137
              enctype="multipart/form-data" >
          
            <input type="hidden" name="id_penggilingan" value="<?php echo $baris->id_penggilingan; ?>">

            <div class="form-group">
            <label style="margin-right: 500px"><b>Tanggal</b></label>
<<<<<<< HEAD
            <input type="date" value="<?=date('Y-m-d')?>" style="width: 600px" class="form-control" id="Tanggal" name="Tanggal" placeholder="Masukkan Tanggal" value="<?php echo $baris->Tanggal; ?>" required>
=======
            <input type="date" style="width: 600px" class="form-control" id="Tanggal" name="Tanggal" placeholder="Masukkan Tanggal" value="<?php echo $baris->Tanggal; ?>" required>
>>>>>>> 113c9a1a9a517665fab9c43a903a8d5b72fac137
            <div class="invalid-feedback">
                </div>
          </div>

          <div class="form-group">
            <label style="margin-right: 510px"><b>Berat</b></label>
<<<<<<< HEAD
            <input type="text" style="width: 600px" class="form-control <?php echo form_error('Berat') ? 'is-invalid':'' ?> " id="Berat" name="Berat" placeholder="Masukkan nama" value="<?php echo $baris->Berat;?>">
            <div class="invalid-feedback">
                  <?php echo form_error('Berat') ?>
                </div>
=======
            <input type="text" style="width: 600px" class="form-control" id="Berat" name="Berat" placeholder="Masukkan nama" value="<?php echo $baris->Berat;?>" required>
>>>>>>> 113c9a1a9a517665fab9c43a903a8d5b72fac137
          </div>

          <div class="form-group">
            <label style="margin-right: 420px"><b>Biaya Penggilingan</b></label>
<<<<<<< HEAD
            <input type="text" style="width: 600px" class="form-control <?php echo form_error('Biaya_Penggilingan') ? 'is-invalid':'' ?>" id="Biaya_Penggilingan" name="Biaya_Penggilingan" placeholder="Masukkan nomor" value="<?php echo $baris->Biaya_Penggilingan; ?>">
            <div class="invalid-feedback">
                  <?php echo form_error('Biaya_Penggilingan') ?>
                </div>
=======
            <input type="text" style="width: 600px" class="form-control" id="Biaya_Penggilingan" name="Biaya_Penggilingan" placeholder="Masukkan nomor" value="<?php echo $baris->Biaya_Penggilingan; ?>" required>
>>>>>>> 113c9a1a9a517665fab9c43a903a8d5b72fac137
          </div>

          <br><br>
          
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





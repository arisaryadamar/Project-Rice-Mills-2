<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("admin/admin_penggilingan/head.php") ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!--sidebar-->
    <?php $this->load->view("admin/admin_penggilingan/sidebar2.php") ?>
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
              <h6 class="m-0 font-weight-bold text-dark">Input Data Penggilingan</h6> <!--membuat judul pada card-->
           </div>
         
         <div class="card-body">
<<<<<<< HEAD

         <form action="<?php echo site_url('Penggilingan/input') ?>" method="post" enctype="multipart/form-data">
=======
          <div class="penggilingan">
          
            <form action="<?php echo site_url('Penggilingan/input') ?>" method="post" enctype="multipart/form-data">
>>>>>>> 113c9a1a9a517665fab9c43a903a8d5b72fac137
            <!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
              oleh controller tempat vuew ini digunakan. Yakni index.php/admin/products/edit/ID --->

              <div class="form-group">
                <label for="Tanggal">Tanggal</label>
                <input class="form-control"
                 type="date" value="<?=date('Y-m-d')?>" name="Tanggal" placeholder="Pilih tanggal"/>
                <div class="invalid-feedback">
                </div>
              </div>

              <div class="form-group">
                <label for="Berat">Berat</label>
                <input class="form-control"
                 type="text" name="Berat" id="Berat" placeholder="Masukkan berat" value="<?php echo form_error('Berat') ? 'is-invalid':'' ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('Berat') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="Biaya_Penggilingan">Biaya Penggilingan</label>
                <input class="form-control"
                 type="text" id="Biaya_Penggilingan" name="Biaya_Penggilingan" placeholder="Masukkan biaya penggilingan" value="<?php echo form_error('Biaya_Penggilingan') ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('Biaya_Penggilingan') ?>
                </div>
              </div>

              <input class="btn btn-success" type="submit" name="btn" value="Tambah" />
              <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
                      <script type ="text/javascript">
                        $(".penggilingan").keyup(function(){
                          var Berat = parseInt($("#Berat").val())
                          var Biaya_Penggilingan = 100000 * Berat;
                          $("#Biaya_Penggilingan").attr("value",Biaya_Penggilingan)
                        });
                      </script>
            </form>
            </div>
          </div>
<<<<<<< HEAD
=======
          <div class="card-footer small text-muted">
            * required fields
          </div>

>>>>>>> 113c9a1a9a517665fab9c43a903a8d5b72fac137
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






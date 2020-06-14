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
        
        <div class="container-fluid">
        <div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Table Penjualan</h6> <!--membuat judul pada card-->
  </div>
  <div class="card-body">
    <div class="table-responsive"><!--membuat tabel responsive-->
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead><!--membuat head pada tabel-->
          <tr><th>No</th>
            <th>Tanggal</th>
            <th>Kode Barang</th>
            <th>Jumlah</th>
            <th>Harga (per pcs)</th>
            <th>Total Harga(Rp)</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr><th>No</th>
            <th>Tanggal</th>
            <th>Kode Barang</th>
            <th>Jumlah</th>
            <th>Harga (per pcs)</th>
            <th>Total Harga(Rp)</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <?php $no = 1;
          foreach ($penjualan as $baris) {
          ?>
          <tr><td><?php echo $no++;?></td>
            <td><?php echo $baris->tanggal; ?></td>
            <td><?php echo $baris->kode_barang; ?></td>
            <td><?php echo $baris->Jumlah ?></td>
            <td><?php echo $baris->Harga ?></td>
            <td><?php echo $baris->Total_harga ?></td>
            <td><button class="btn btn-success btn-sm editbtn" type="button"><i class="fas fa-fw fa-edit"></i></button> <button class="btn btn-danger btn-sm" type="button" name="Kode"><i class="fas fa-fw fa-trash"></i></button></a></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
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

  <!-- Page level plugins -->
  <script src="<?php echo base_url('asset/admin/vendor/datatables/jquery.dataTables.min.js')?>"></script>
  <script src="<?php echo base_url('asset/admin/vendor/datatables/dataTables.bootstrap4.min.js')?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('asset/admin/js/demo/datatables-demo.js')?>"></script>

</body>

</html>










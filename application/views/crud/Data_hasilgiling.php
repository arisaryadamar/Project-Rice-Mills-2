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
        <div class="container-fluid">
        <div class="card shadow mb-4">
  <div class="card-header py-3">
    <h5 class="m-0 font-weight-bold text-dark">Data Stok Beras</h6> <!--membuat judul pada card-->
  </div>
  <div class="card-body">
    <div class="pull-right">
                <a href="<?php echo site_url('Hasilgiling/tambah')?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-fw fa-plus"></i>Tambah Data Beras</a>
             </div>
    <div class="table-responsive"><!--membuat tabel responsive-->
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead><!--membuat head pada tabel-->
          <tr><th><center>No</center></th>
            <th><center>Kode Barang</center></th>
            <th><center>Ukuran Sak</center></th>
            <th><center>Stok (per sak)</center></th>
            <th><center>Action</center></th>
          </tr>
        </thead>
        <tfoot>
          <tr><th><center>No</center></th>
            <th><center>Kode Barang</center></th>
            <th><center>Ukuran Sak</center></th>
            <th><center>Stok (per sak)</center></th>
            <th><center>Action</center></th>
          </tr>
        </tfoot>
        <tbody>
          <?php $no = 1;
          foreach ($hasilgiling as $baris) {
          ?>
          <tr><td align="center"><?php echo $no++;?></td>
            <td><center><?php echo $baris->kode_barang; ?></center></td>
            <td><center><?php echo $baris->ukuran_sak; ?></center></td>
            <td><center><?php echo $baris->stok ?></center></td>
            <td align="center">
              <a href="<?php echo site_url('Hasilgiling/EditStok/'.$baris->kode_barang)?>" class="btn btn-success btn-sm">Tambah Stok</a>
              <a href="<?php echo site_url('Hasilgiling/edit/'.$baris->kode_barang)?>" class="btn btn-warning btn-sm editbtn" type="button"><i class="fas fa-fw fa-edit"></i></a>
            <a href="#!" onclick="deleteConfirm('<?php echo site_url('Hasilgiling/hapus/'.$baris->kode_barang) ?>')" class="btn btn-danger btn-sm" type="button"><i class="fas fa-fw fa-trash"></i></a></td>
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

  <!-- Page level plugins -->
  <script src="<?php echo base_url('asset/admin/vendor/datatables/jquery.dataTables.min.js')?>"></script>
  <script src="<?php echo base_url('asset/admin/vendor/datatables/dataTables.bootstrap4.min.js')?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('asset/admin/js/demo/datatables-demo.js')?>"></script>
  <?php $this->load->view("Admin/admin_penggilingan/modal.php") ?>

  <script>
  function deleteConfirm(url){
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
  }
  </script>

</body>

</html>












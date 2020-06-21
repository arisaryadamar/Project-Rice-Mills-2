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
        <div class="container-fluid">
        <div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Table Pemasokan</h6> <!--membuat judul pada card-->
  </div>
  <div class="card-body">
    <div class="table-responsive"><!--membuat tabel responsive-->
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead><!--membuat head pada tabel-->
          <tr><th>No</th>
            <th>Tanggal</th>
            <th>Nama</th>
            <th>Nomor Telp</th>
            <th>Alamat</th>
            <th>Berat (ton)</th>
            <th>Harga</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($pmsk as $baris) {
          ?>
          <tr><td><?php echo $no++;?></td>
            <td><?php echo $baris->tgl; ?></td>
            <td><?php echo $baris->nama; ?></td>
            <td><?php echo $baris->nmr ?></td>
            <td><?php echo $baris->alamat ?></td>
            <td><?php echo $baris->berat ?></td>
            <td><?php echo $baris->harga ?></td>
            <td>
                      <a href="<?php echo site_url('pmsk/edit/'.$baris->id_pemasokan) ?>"
                       class="btn btn-success btn-icon-split"><i class="fas fa-edit" style="padding: 5px;"></i></a>
                      <a onclick="deleteConfirm('<?php echo base_url('pmsk/hapus/'.$baris->id_pemasokan) ?>')"
                       href="#!" class="btn btn-danger btn-icon-split"><i class="fas fa-trash" style="padding: 5px;"></i></a>
                    </td>
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

  <!-- Page level plugins -->
  <script src="<?php echo base_url('asset/admin/vendor/datatables/jquery.dataTables.min.js')?>"></script>
  <script src="<?php echo base_url('asset/admin/vendor/datatables/dataTables.bootstrap4.min.js')?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('asset/admin/js/demo/datatables-demo.js')?>"></script>

  <?php $this->load->view("Admin/admin_pemasokan/modal.php") ?>

  <script>
  function deleteConfirm(url){
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
  }
  </script>

</body>

</html>





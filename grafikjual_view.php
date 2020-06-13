<?php
$this->db->select('tanggal,Jumlah');
$dataPenjualanChart = $this->Penjualan_model->getAll();
//print_r($dataPemasokanChart);die();
foreach ($dataPenjualanChart as $k => $v) {
  $arrjual[] = ["label" => $v->tanggal, "y" => $v->Jumlah];
}
 //var_dump ($arrPasok);die();

  //print_r(json_encode($arrjual, JSON_NUMERIC_CHECK));die();
  //print_r($dataPemasokanChart);die();
?>

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
              <h5 class="m-0 font-weight-bold text-dark">Grafik Penjualan</h6>
                <!--membuat judul pada card-->
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <!--membuat tabel responsive-->
                <div id="chartContainer" style="height: 400px; width: 80%;"></div>
                <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
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
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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

      <script>
      window.onload = function () {

        var chart = new CanvasJS.Chart("chartContainer", {
          animationEnabled: true,
          theme: "light2", // "light1", "light2", "dark1", "dark2"
          title: {
            text: "PENJUALAN"
          },
          //axisY: {
          //title: "Reserves(MMbbl)"
          //},
          data: [{
            type: "column",
            showInLegend: true,
            legendMarkerColor: "grey",
            dataPoints: 
              <?php echo json_encode($arrjual, JSON_NUMERIC_CHECK); ?>
            

            //dataPoints: [
            //<php echo json_encode($arrPasok); ?>
            //]
            //dataPoints: [
            //<php $dataPemasokanChart; ?>
            // ]
          }]
        });
        chart.render();

      }
      </script>


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
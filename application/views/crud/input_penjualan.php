<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("admin/admin_penjualan/head.php") ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!--sidebar-->
    <?php $this->load->view("admin/admin_penjualan/sidebar2.php") ?>
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

        <div class="card shadow mb-4">
           <div class="card-body">
        <div class="row">
         <div class="col-xl-12 col-md-6 mb-4">
          <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
          <div class="clearfix">
            <div class="container-fluid"><br>
            <h3 style="text-align: center;"><strong>Form Input Penjualan</strong></h3>
            <br/></div>
           </div>
         <div class="card-body">

         <form action="<?php echo site_url('Penjualan/input') ?>" method="post" enctype="multipart/form-data">

              <div class="row">
                      <div class="col-12 col-xs-12 formsiswa">
                          <div class="form_group">
                            <label for="tgl">Tanggal</label>
                            <input type="date" name="tanggal" id="tgl" value="<?=date('Y-m-d')?>" class="form-control" required>
                            </div>

                <div class="form-group">
                    <label for="kode">Kode Barang</label>
                    <select  type="double" name="kode" id="kode" class="form-control" required>
                    <?php 
                                      foreach($kode as $row):
                                    ?>
                          <option value="<?php echo $row->kode_barang; ?>"><?php echo $row->kode_barang; ?></option>
                          <?php 
                            endforeach;
                          ?>
                       
                    </select>
                        </div>
                    </div>
                    </div>
                    <div class="penjualan">
                    <div class="form-row">
                        <div class="col">
                        <label for="Jumlah">Jumlah</label>
                            <input name="jumlah" type="text" class="form-control" id="Jumlah"
                                placeholder="Masukkan Jumlah" aria-describedby="inputGroupPrepend" required>
                        </div>
                    </div>  
                    <div class="form-row">
                        <div class="col">
                        <label for="Harga">Harga</label>
                            <input name="harga" type="text" class="form-control" id="Harga"
                                placeholder="Masukkan Harga" aria-describedby="inputGroupPrepend" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                        <label for="Total">Total Harga</label>
                            <input name="total" type="text" class="form-control" id="Total">
                            <input name="stok-awal" type="text" class="form-control" value="<?php echo $row->stok ?>">
                        </div>
                    </div> <br><br>
                    <center><button class="btn btn-primary" name="input" type="submit">Save</button></center>
                    <br><br>
                    <!-- koneksi kepada jQuery, popper.min.js, dan bootstrap.min.js -->
                    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
                      <script type ="text/javascript">
                        $(".penjualan").keyup(function(){
                          var Jumlah = parseInt($("#Jumlah").val())
                          var Harga = parseInt($("#Harga").val())
                          
                          var Total = Jumlah * Harga;
                          $("#Total").attr("value",Total)
                          
                          });
                      </script>
                      <!-- Begin Page Content -->
                            <div class="container-fluid">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                  <h4 class="m-0 font-weight-bold text-primary" style="text-align: center;">Data Stok Beras</h4>
                                </div>
                                  <div class="card-body">
                                  <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTable" width="100%" align="center">
                                    <thead>
                                        <tr>
                                            <th ><center>No.</center></th>
                                            <th ><center>Kode Barang</center></th>
                                            <th ><center>Ukuran Sak</center></th>
                                            <th ><center>Stok</center></th>
                                        </tr> 
                                    </thead>

                                    <?php 
                                    $nomor = 1;
                                     ?>
                                     <?php 
                                      foreach($kode as $row):
                                    ?>
                                    <tr>
                                    
                                      <!--variabel untuk menampung suatu data-->
                                      <td align="center"><?php echo $nomor++; ?></td>
                                      <td align="center"><?php echo $row->kode_barang;?></td>
                                      <td align="center"><?php echo $row->ukuran_sak; ?></td> <!--variabel nim-->
                                      <td align="center"><?php echo $row->stok; ?></td> <!--variabel nama-->
                                     
                                    </tr>
                                    <?php
                                        endforeach;
                                      ?>
                                </table>
                                    </div>
                                  </div>
                                </div>
                </form>
            </div>
        </div>

        </div>
    </div>
  </div>
</div>
</div>
</div>

  
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

</body>

</html>

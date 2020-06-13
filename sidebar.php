<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">
 
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-archive"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Pemasokan</div>
      </a>
 
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
 
      <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="../banker/indexadmin.php">
      <i class="fas fa-fw fa-home"></i>
      <span>Home</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('Pemasokan/add')?>">
      <i class="fas fa-fw fa-pencil-alt"></i>
      <span>Input Data Pemasokan</span></a>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item active">
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
      <i class="fas fa-fw fa-table"></i>
      <span>Data Tabel</span>
    </a>
    <div id="collapseUtilities" class="collapse show" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">View Data:</h6>
        <a class="collapse-item active" href="<?php echo base_url('Pemasokan/index')?>">Data Pemasokan</a>
        <a class="collapse-item active" href="<?php echo base_url('Pemasokan/chart')?>">Grafik</a>
        <a class="collapse-item" href="stok2.php">Stok Padi</a>
      </div>
    </div>
  </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
 
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
 
    </ul>
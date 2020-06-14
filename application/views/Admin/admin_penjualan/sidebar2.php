<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">
 
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-money-bill-wave"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Penjualan</div>
      </a>
 
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
 
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-home"></i>
          <span>Home</span></a>
      </li>
 
      <!-- Divider -->
      <hr class="sidebar-divider">
 
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('Penjualan/add')?>">
          <i class="fas fa-fw fa-pencil-alt"></i>
          <span>Input Data Penjualan</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Penjualan')?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Penjualan</span>
        </a>
      </li>

       <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="grafik-fix.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Grafik Penjualan</span>
        </a>
      </li>
 
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
 
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
 
    </ul>
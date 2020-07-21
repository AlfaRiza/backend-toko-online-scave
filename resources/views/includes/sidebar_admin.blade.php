    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
          </div>
          <div class="sidebar-brand-text mx-3">TOKO ONLINE</div>
        </a>
  
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
  
        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>
  
        <!-- Divider -->
        <hr class="sidebar-divider">
  
        <!-- Heading -->
        <div class="sidebar-heading">
          MENU
        </div>
  
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link" href="{{ route('category') }}">
            <i class="fas fa-list"></i>
            <span>Category</span></a>
        </li>
  
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link" href="{{ route('product') }}">
            <i class="fab fa-product-hunt"></i>
            <span>Product</span></a>
        </li>
  
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link" href="{{ route('transaction') }}">
            <i class="fas fa-random"></i>
            <span>Transaction</span></a>
        </li>
  
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">


        <li class="nav-item">
          <a class="nav-link" href="{{ route('setting') }}">
            <i class="fas fa-cogs"></i>
            <span>Settings</span></a>
        </li>
  
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
  
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
  
      </ul>
      <!-- End of Sidebar -->
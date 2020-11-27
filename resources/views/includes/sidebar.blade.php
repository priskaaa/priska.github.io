<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
{{-- <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
  <div class="sidebar-brand-icon ">
  <img src='img/Logo.png' alt="Image" height="100" width="100">
  </div>
  {{-- <div class="sidebar-brand-text mx-3"><sup>2</sup></div> --}}
{{-- </a> --}} 

<!-- Divider -->
{{-- <hr class="sidebar-divider my-0"> --}}


{{-- <!-- Nav Item - Pages Collapse Menu -->
<hr class="sidebar-divider">
<li class="nav-item">
  <a class="nav-link" href="charts.html">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Data Barang</span></a>
</li> --}}

<!-- Nav Item - Utilities Collapse Menu -->


<!-- Divider -->
<a class="justify-content-center">
  <center>
<img src='img/Logo.png' alt="Image" height="100" width="100"></center>
</a>

<li class="nav-item">
  <a class="nav-link" href="{{route('income.index')}}">
    <i class="fas fa-fw fa-book"></i>
      <span >Tambah Barang</span></a>
  </li>
  
<li class="nav-item" >
<a class="nav-link" href="{{'data'}}">
  <i class="fas fa-fw fa-indent"></i>
    <span>Data Barang Masuk</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="{{route('outcome.index')}}">
      <i class="fas fa-fw fa-outdent"></i>
      <span>Data Barang Keluar</span></a>
  </li>

<li class="nav-item">
  <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="nav-link btn btn-none">
      <i class="fas fa-fw fa-sign-out-alt"></i>
      <span>LogOut</span></button>
  </form>  
  </li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url()?>
">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-database"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Database Barang</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('home')?>">

        <i class="fas fa-fw fa-home"></i>
        <span>Home</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Data Master
</div>

<li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('admin')?>">

        <i class="fas fa-user"></i>
        <span>Admin</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('satuan')?>">

        <i class="fas fa-edit"></i>
        <span>Satuan</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Data Tabel
</div>
<li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('suplier')?>">

        <i class="fas fa-edit"></i>
        <span>Suplier</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('barang')?>">

        <i class="fas fa-edit"></i>
        <span>Barang</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('stok')?>">

        <i class="fas fa-edit"></i>
        <span>Stok</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->
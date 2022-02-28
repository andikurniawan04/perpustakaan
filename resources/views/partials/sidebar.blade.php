@extends('layouts/app')

@section('content')
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon" style="margin-left: 20px;" >
            <i class="fas fa-wind" ></i>
        </div>
        <div class="sidebar-brand-text mx-3">Perpustakaan KG2 </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/">
            <i class="fas fa-tv"></i>
            <span>Dashboard</span></a>
    </li>

        <!-- Nav Item - Daftar Buku -->
        <li class="nav-item active">
        <a class="nav-link" onclick="listbuku();">
            <i class="fas fa-book-dead"></i>
            <span>Daftar Buku</span></a>
    </li>

            <!-- Nav Item - Daftar Kategori -->
            <li class="nav-item active">
        <a class="nav-link" onclick="kategori();">
            <i class="fas fa-id-card"></i>
            <span>Daftar Kategori</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
<!-- End of Sidebar -->

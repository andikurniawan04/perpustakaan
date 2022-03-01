@extends('layouts/app')

@section('content')
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon" style="margin-left: 20px;">
                <i class="fas fa-wind"></i>
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
        {{-- Jika statusnya admin maka tampilan menu berikut --}}
        @if (Auth::user()->status == 'petugas')
            <!-- Nav Item - Daftar Buku -->
            <li class="nav-item active">
                <a class="nav-link" href="/buku">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Buku</span></a>
            </li>

            <!-- Nav Item - Daftar Kategori -->
            <li class="nav-item active">
                <a class="nav-link" href="/kategori">
                    <i class="fas fa-id-card"></i>
                    <span>Kategori</span></a>
            </li>
        @endif
        @if (Auth::user()->status == 'anggota')
            <!-- Nav Item - Daftar Buku -->
            <li class="nav-item active">
                <a class="nav-link" href="/buku">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>User</span></a>
            </li>
        @endif
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>


    </ul>
    <!-- End of Sidebar -->

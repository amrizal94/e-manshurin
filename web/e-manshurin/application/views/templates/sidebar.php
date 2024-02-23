<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">E-MANSHURIN
            <span class="small">Kediri Selatan 1</span>
        </div>
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
        Menu Master
    </div>

    <!-- Nav Item - Master -->
    <li class="nav-item">
        <a class="nav-link py-0" href="<?= base_url('masteruser'); ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Master User</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link py-0" href="<?= base_url('mastermasjid'); ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Master Masjid</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link py-0" href="<?= base_url('masterdaerah'); ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Master Daerah</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link py-0" href="<?= base_url('masterdesa'); ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Master Desa</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link py-0" href="<?= base_url(''); ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Master Kelompok</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link py-0" href="<?= base_url(''); ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Master Wil Pengurus</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link py-0" href="<?= base_url(''); ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Master Jenis Pengurus</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link py-0" href="<?= base_url(''); ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Master Mubaligh</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link py-0" href="<?= base_url(''); ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Master Kategori Usia</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link py-0" href="<?= base_url(''); ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Master Kelas</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link py-0" href="<?= base_url(''); ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Master Kurikulum</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link py-0" href="<?= base_url(''); ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Master Pengajian</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link pt-0" href="<?= base_url(''); ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Master Musyawaroh</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link pt-0" href="charts.html">
            <svg class="fa-fw" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm64 192c17.7 0 32 14.3 32 32v96c0 17.7-14.3 32-32 32s-32-14.3-32-32V256c0-17.7 14.3-32 32-32zm64-64c0-17.7 14.3-32 32-32s32 14.3 32 32V352c0 17.7-14.3 32-32 32s-32-14.3-32-32V160zM320 288c17.7 0 32 14.3 32 32v32c0 17.7-14.3 32-32 32s-32-14.3-32-32V320c0-17.7 14.3-32 32-32z" />
            </svg>
            <span>Sensus Jamaah</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item active">
        <a class="nav-link pt-0" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-user-check"></i>
            <span>Absensi</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="login.html">Pengajian</a>
                <a class="collapse-item active" href="register.html">Musyawaroh</a>
                <a class="collapse-item" href="forgot-password.html">Rekap Absensi</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link pt-0" href="charts.html">
            <i class="fas fa-fw fa-book"></i>
            <span>Broadcast WA</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link pt-0" href="charts.html">
            <i class="fas fa-fw fa-book"></i>
            <span>Notulen</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link pt-0" href="charts.html">
            <i class="fas fa-fw fa-book"></i>
            <span>Evaluasi Materi</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link pt-0" href="charts.html">
            <i class="fas fa-fw fa-book"></i>
            <span>Notulen</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Settings</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="buttons.html"><i class="fas fa-fw fa-cog"></i>
                    <span>Akun</span></a>
                <a class="collapse-item" href="cards.html"><i class="fas fa-fw fa-cog"></i>
                    <span>Master Data</span></a>
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
<!-- End of Sidebar -->
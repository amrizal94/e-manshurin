<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button type="button" id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>



            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="d-flex flex-column">
                            <div class="mr-2 d-none d-lg-inline text-gray-600"><?= $user['nama']; ?></div>
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin Daerah</span>
                        </div>

                        <img class="img-profile rounded-circle" src="<?= base_url('assets/'); ?>img/profile/<?= $user['foto']; ?>">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Akun
                        </a>
                        <div class="dropdown-divider"></div>
                        <button type="button" class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </button>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <?php
            foreach ($user as $key => $value) {
                $v = $value ? 'true' : 'false';
                if (!$value && $this->router->class != "user") {
            ?>
                    <a class="text-decoration-none" href="<?= base_url('user'); ?>">
                        <div class="alert alert-warning d-flex w-100 text-center justify-content-center align-items-center" style="gap: 15px;">
                            <img width="70px" height="70px" class="img-profile" src="<?= base_url('assets/'); ?>img/remainder_profile.jpg">
                            <div class="d-flex flex-column mb-0" role="alert">
                                Lengkapi profilmu yuk!
                                <small>
                                    Supaya kita saling kenal satu sama lain
                                </small>
                            </div>
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </a>
            <?php
                    break;
                }
            };

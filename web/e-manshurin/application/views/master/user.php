<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-4 text-gray-800 mr-auto"><?= $title; ?></h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mx-5">
        Export Excel</a>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah User</a>
</div>

<div class="d-flex flex-row-reverse">
    <div class="btn-group order-3 mr-1">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Level
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
        </div>
    </div>
    <div class="btn-group order-2 mr-1">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Status Akun
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
        </div>
    </div>
    <div class="btn-group order-1 mr-1">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Kelompok
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
        </div>
    </div>
</div>
<!-- DataTales Example -->
<div class="card shadow my-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">User Data</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Status Akun</th>
                        <th>Level</th>
                        <th>Kelompok</th>
                        <th class="text-right"><i class="fas fa-cog fa-sm"></i></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Status Akun</th>
                        <th>Level</th>
                        <th>Kelompok</th>
                        <th class="text-right"><i class="fas fa-cog fa-sm"></i></th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>
                            <img class="rounded-circle" style="width: 50px;" src="<?= base_url('assets/'); ?>img/profile/<?= $user['image']; ?>"><span class="mx-3"><?= $user['name']; ?></span>
                        </td>
                        <td class="align-middle">tokoira</td>
                        <td class="align-middle"><span class="badge badge-danger w-50">Tidak Aktif</span></td>
                        <td class="align-middle"><span class="badge badge-secondary w-50">Superadmin</span></td>
                        <td class="align-middle">Mangurejo Timur</td>
                        <td class="text-right">
                            <a class="nav-link dropdown-toggle" href="#" id="tableDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="fa-fw" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
                                </svg>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="tableDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-edit fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Edit
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-trash fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Hapus
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img class="rounded-circle" style="width: 50px;" src="<?= base_url('assets/'); ?>img/profile/<?= $user['image']; ?>"><span class="mx-3"><?= $user['name']; ?></span>
                        </td>
                        <td class="align-middle">System Architect</td>
                        <td class="align-middle"><span class="badge badge-success w-50">Aktif</span></td>
                        <td class="align-middle">61</td>
                        <td class="align-middle">2011/04/25</td>
                        <td class="text-right">
                            <a class="nav-link dropdown-toggle" href="#" id="tableDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="fa-fw" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
                                </svg>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="tableDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-edit fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Edit
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-trash fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Hapus
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
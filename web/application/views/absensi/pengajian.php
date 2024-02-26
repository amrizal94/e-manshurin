<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-4 text-gray-800 mr-auto"><?= $title; ?></h1>
    <button type="button" data-toggle="modal" data-target="#add-absensi-pengajian" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Absensi <?= $sub_title; ?></button>
</div>

<div class="modal fade" tabindex="-1" id="add-absensi-pengajian">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Isian Data Absensi <?= $sub_title; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-add-absensi-pengajian" class="p-3 d-flex flex-wrap" method="post" action="<?= base_url($this->router->class); ?>">
                    <div class="form-group w-50 px-1 order-1">
                        <label for="name">Nama Pengajian <span class="text-danger">*</span></label>
                        <select class="form-control" id="name" name="name">
                            <option>Pengajian Kelompok</option>
                        </select>
                    </div>
                    <div class="form-group w-50 px-1 order-3">
                        <label for="wilayah">Wilayah <span class="text-danger">*</span></label>
                        <select class="form-control" id="wilayah" name="wilayah">
                            <option>Kelompok Mangurejo Timur</option>
                        </select>
                    </div>
                    <div class="form-group w-50 px-1 order-4">
                        <label for="tempat">Tempat <span class="text-danger">*</span></label>
                        <select class="form-control" id="tempat" name="tempat">
                            <option>Masjid Baitul Makmur</option>
                        </select>
                    </div>
                    <div class="form-group w-50 px-1 order-5">
                        <label for="materi">Materi <span class="text-danger">*</span></label>
                        <select class="form-control" id="materi" name="materi">
                            <option>Kitabul Thalaq</option>
                        </select>
                    </div>
                    <div class="form-group w-50 px-1 order-2">
                        <label for="waktu_date">Waktu <span class="text-danger">*</span></label>
                        <div class="d-flex justify-content-between align-items-center">
                            <input type="date" id="waktu_date" class="py-1 px-4" name="waktu_date" value="<?= date('Y-m-d'); ?>">
                            <input type="time" id="waktu_time" class="py-1 px-4" name="waktu_time" value="<?= date('h:i'); ?>">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" form="form-add-absensi-pengajian" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

<div class="d-flex justify-content-between">
    <div class="rounded bg-primary text-white px-3">
        <h6 class="mt-2">List Pengajian</h6>
    </div>

    <form class="d-flex">
        <input type="text" class="form-control ml-3" style="min-width: 25vh;" id="nama_pengajian" name="nama_pengajian" placeholder="masukan nama pengajian">
        <input type="date" class="form-control ml-3" name="tanggal_awal" id="tanggal_awal">
        <input type="date" class="form-control" name="tanggal_akhir" id="tanggal_akhir" value="<?= date('Y-m-d'); ?>">
        <button type="submit" class="btn btn-primary ml-3"><i class="fas fa-search fa-fw"></i>
    </form>
</div>

<div class="card my-5">
    <div class="card-body">
        <div class="card shadow my-4">
            <div class="card-header py-3 d-flex justify-content-between">
                <div>
                    <h6 class="m-0 font-weight-bold text-primary"><?= $sub_title; ?> Kelompok Jetis 1 - <?= format_indo(date('Y-m-d')); ?></h6>
                    <h6 class="m-0 font-weight-bold text-primary">
                        <table border="0">
                            <tr>
                                <td>Waktu</td>
                                <td><span class="mx-1">:</span></td>
                                <td>19.30 - 20.00 WIB</td>
                            </tr>
                            <tr>
                                <td>Tempat</td>
                                <td><span class="mx-1">:</span></td>
                                <td>Masjid Baitul Makmur</td>
                            </tr>
                            <tr>
                                <td>Materi</td>
                                <td><span class="mx-1">:</span></td>
                                <td>Al Quran dan Nasehat Agama</td>
                            </tr>
                        </table>
                    </h6>
                </div>
                <div class="d-flex">
                    <div class="text-center mx-1">
                        <h6>Hadir</h6>
                        <span class="rounded px-4 text-white bg-info">0</span>
                    </div>
                    <div class="text-center mx-1">
                        <h6>Sakit</h6>
                        <span class="rounded px-4 text-white" style="background-color: deeppink;">0</span>
                    </div>
                    <div class="text-center mx-1">
                        <h6>Ijin</h6>
                        <span class="rounded px-4 text-white bg-success" style="background-color: blueviolet;">0</span>
                    </div>
                    <div class="text-center mx-1">
                        <h6>TK</h6>
                        <span class="rounded px-4 text-white bg-danger" style="background-color: blueviolet;">0</span>
                    </div>
                </div>
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
    </div>
</div>
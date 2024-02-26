<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-4 text-gray-800 mr-auto"><?= $title; ?></h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mx-5">
        <i class="fas fa-print fa-sm text-white-50"></i> Cetak</a>
    <button type="button" data-toggle="modal" data-target="#add-dokumentasi-kegiatan" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah <?= $sub_title; ?></button>
</div>

<div class="modal fade" tabindex="-1" id="add-dokumentasi-kegiatan">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Isian Data <?= $sub_title; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-add-dokumentasi-kegiatan" class="p-3 d-flex flex-wrap" method="post" action="<?= base_url($this->router->class); ?>">
                    <div class="form-group w-50 px-1">
                        <label for="name">Nama Kegiatan <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group w-50 px-1">
                        <label for="jenis_kegiatan">Jenis Kegiatan <span class="text-danger">*</span></label>
                        <select class="form-control" id="jenis_kegiatan" name="jenis_kegiatan">
                            <option>Jenis Kegiatan</option>
                        </select>
                    </div>
                    <div class="form-group w-50 px-1">
                        <label for="tanggal_kegiatan">Tanggal Kegiatan <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" id="tanggal_kegiatan" name="tanggal_kegiatan">
                    </div>
                    <div class="form-group w-50 px-1">
                        <label for="waktu_kegiatan_awal">Waktu Kegiatan <span class="text-danger">*</span></label>
                        <div class="d-flex justify-content-between align-items-center">
                            <input type="time" id="waktu_kegiatan_awal" class="py-1 px-4" name="waktu_kegiatan_awal">
                            <label for="waktu_kegiatan_akhir">sampai</label>
                            <input type="time" id="waktu_kegiatan_akhir" class="py-1 px-4" name="waktu_kegiatan_akhir">
                        </div>
                    </div>
                    <div class="form-group w-50 px-1">
                        <label for="wilayah">Wilayah <span class="text-danger">*</span></label>
                        <select class="form-control" id="wilayah" name="wilayah">
                            <option>Wilayah</option>
                        </select>
                    </div>
                    <div class="form-group w-50 px-1">
                        <label for="tempat">Tempat <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="tempat" name="tempat">
                    </div>
                    <div class="form-group w-100 px-1">
                        <label for="keterangan">Keterangan</label>
                        <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
                    </div>
                    <div class="form-group w-50 px-1">
                        <label for="video">Upload Video</label>
                        <input type="file" class="form-control-file" id="video" name="video">
                    </div>
                    <div class="form-group w-50 px-1">
                        <label for="foto">Upload Foto</label>
                        <input type="file" class="form-control-file" id="foto" name="foto">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" form="form-add-dokumentasi-kegiatan" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

<div class="d-flex justify-content-end">
    <div class="btn-group">
        <form class="d-flex">
            <select class="form-control ml-3 w-auto" id="wilayah" name="wilayah">
                <option>Wilayah</option>
            </select>
            <select class="form-control ml-3 w-auto" id="jenis_kegiatan" name="jenis_kegiatan">
                <option>Jenis Kegiatan</option>
            </select>
            <button type="submit" class="btn btn-primary ml-3 w-auto"><i class="fas fa-search fa-fw"></i>
        </form>
    </div>
</div>

<!-- DataTales Example -->
<div class="card shadow my-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data <?= $sub_title; ?></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Kegiatan</th>
                        <th>Jenis Kegiatan</th>
                        <th>Tanggal Waktu Kegiatan</th>
                        <th>Wilayah</th>
                        <th>Tempat</th>
                        <th>Foto Kegiatan</th>
                        <th class="text-right"><i class="fas fa-cog fa-sm"></i></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nama Kegiatan</th>
                        <th>Jenis Kegiatan</th>
                        <th>Tanggal Waktu Kegiatan</th>
                        <th>Wilayah</th>
                        <th>Tempat</th>
                        <th>Foto Kegiatan</th>
                        <th class="text-right"><i class="fas fa-cog fa-sm"></i></th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td class="align-middle">
                            Tour Barakah Jetis 2023
                        </td>
                        <td class="align-middle">Muda - Mudi</td>
                        <td class="align-middle"><?= date('d F Y', $user['date_created']); ?> | 08:00 - 13:00</td>
                        <td class="align-middle">Kelompok Jetis 1</td>
                        <td class="align-middle">Masjid Baitu Rohma</td>
                        <td class="align-middle" style="width: 5%;"><img src="<?= base_url('assets/img/documentation/default.png'); ?>" alt="..." class="img-thumbnail rounded"></td>
                        <td class="text-right align-middle" style="width: 5%;">
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
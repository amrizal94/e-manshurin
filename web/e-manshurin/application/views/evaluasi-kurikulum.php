<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-4 text-gray-800 mr-auto"><?= $title; ?></h1>
</div>

<div class="d-flex justify-content-end">
    <div class="btn-group">
        <form class="d-flex">
            <select class="form-control ml-3 w-auto" id="desa" name="desa">
                <option>Desa</option>
            </select>
            <select class="form-control ml-3 w-auto" id="kelompok" name="kelompok">
                <option>Kelompok</option>
            </select>
            <select class="form-control ml-3 w-auto" id="kategori" name="kategori">
                <option>Kategori</option>
            </select>
            <button type="submit" class="btn btn-primary ml-3 w-auto"><i class="fas fa-search fa-fw"></i>
        </form>
    </div>
</div>

<!-- DataTales Example -->
<div class="card shadow my-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Hasil Evaluasi Kelas TIlawati 1</h6>
        <h6 class="m-0 font-weight-bold text-primary">Caberawit Kelompok Mangurejo Timur Desa Mangurejo - Kediri Selatan 1</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kelompok</th>
                        <th>KK</th>
                        <th>Kelas</th>
                        <th>Tanggal Update</th>
                        <th>Status Pencapaian</th>
                        <th class="text-right"><i class="fas fa-cog fa-sm"></i></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kelompok</th>
                        <th>KK</th>
                        <th>Kelas</th>
                        <th>Tanggal Update</th>
                        <th>Status Pencapaian</th>
                        <th class="text-right"><i class="fas fa-cog fa-sm"></i></th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>
                            <img class="rounded-circle" style="width: 50px;" src="<?= base_url('assets/'); ?>img/profile/<?= $user['image']; ?>"><span class="mx-3"><?= $user['name']; ?></span>
                        </td>
                        <td class="align-middle">tokoira</td>
                        <td class="align-middle">tokoira</td>
                        <td class="align-middle">tokoira</td>
                        <td class="align-middle">tokoira</td>
                        <td class="align-middle"><span class="badge badge-danger w-50">Tidak Aktif</span></td>
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
                                <button data-toggle="modal" data-target="#detail-evaluasi" class="dropdown-item" href="#">
                                    <i class="fas fa-eye fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Lihat
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" id="detail-evaluasi">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title rounded-pill border border-bottom-info px-3 font-weight-bolder" style="background-color: lightblue;">Hasil <?= $title; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card shadow my-4">
                    <div class="card-header py-3 d-flex justify-content-between">
                        <div>
                            <h6 class="m-0 font-weight-bold text-primary">Aghni Ilmi - Tilawati 1</h6>
                            <h6 class="m-0 font-weight-bold text-primary">Mangurejo Timur</h6>
                        </div>
                        <div>
                            <h1 class="rounded text-white px-3" style="background-color: deeppink;">85%</h1>
                        </div>
                        <div class="d-flex">
                            <i class="fas fa-500px fa-clock mr-2" style="color: pink;"></i>
                            <div>
                                <h6 class="m-0 font-weight-bold text-primary">Aghni Ilmi - Tilawati 1</h6>
                                <h6 class="m-0 font-weight-bold text-primary">Mangurejo Timur</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="detailTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Materi</th>
                                        <th>Pencapaian</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Materi</th>
                                        <th>Pencapaian</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td class="align-middle">1.</td>
                                        <td class="align-middle w-25">
                                            <span class="mx-3">Surat Annas</span>
                                        </td>
                                        <td class="align-middle"><span class="rounded-pill px-5" style="background-color: lightblue;">75%</span></td>
                                        <td class="align-middle w-75">Sudah hafal 1-30 namun cukup lancar, perlu dihafalkan</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">2.</td>
                                        <td class="align-middle w-25">
                                            <span class="mx-3">Surat Al Ikhlas</span>
                                        </td>
                                        <td class="align-middle"><span class="rounded-pill px-5" style="background-color: lightgreen;">80%</span></td>
                                        <td class="align-middle w-75">Sudah hafal 1-30 namun cukup lancar, perlu dihafalkan</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" form="form-detail-evaluasi" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
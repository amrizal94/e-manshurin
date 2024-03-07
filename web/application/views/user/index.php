 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
     <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
         <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
 </div>

 <div class="card mb-3">
     <div class="row no-gutters">
         <div class="col-md-4">
             <img class="card-img" src="<?= base_url('assets/img/profile/') . $user['foto']; ?>" alt="image profile">
         </div>
         <div class="col-md-8">
             <div class="card-body d-flex flex-column" style="gap: 15px;">
                 <!-- <div class="d-flex" style="gap: 10px;">
                     <h5 class="card-title mb-0"><?= $user['nama']; ?></h5><span class="badge badge-<?= $level_user['warna']; ?>"><?= $level_user['nama']; ?></span>
                 </div>
                 <div class="d-flex" style="gap: 10px;">
                     <p class="card-text mb-0"><?= $user['username']; ?></p>
                     </h5><span class="badge badge-<?= $status_akun['warna']; ?>"><?= $status_akun['nama']; ?></span>
                 </div>
                 <p class="card-text"><?= $user['email']; ?></p>
                 -->

                 <form id="editUser" method="post" action="<?= base_url('user/coba'); ?>" onkeydown="return event.key != 'Enter';">
                     <div class="form-group d-flex">
                         <label for="name" class="mr-5 align-self-center" style="width: 10%;">Nama lengkap</label>
                         <input type="text" class="mr-3 w-50" name="name" id="name" value="<?= $user['nama']; ?>" readonly onfocusout="editName()" onkeyup="textEditName(event)">
                         <input type="hidden" name="tempName" value="<?= $user['nama']; ?>" id="tempName">
                         <button type="button" class="btn btn-primary btn-circle" id="btnEditName" onclick="editName()">
                             <i class="fas fa-user-edit"></i>
                         </button>
                     </div>
                     <div class="form-group d-flex">
                         <label for="username" class="mr-5 align-self-center" style="width: 10%;">Username</label>
                         <input type="text" class="mr-3 w-50" name="username" id="username" value="<?= $user['username']; ?>" readonly onfocusout="editUsername()" onkeyup="textEditUsername(event)">
                         <span class="h4 align-self-center mb-0 text-success d-none" id="infoUsername">a-z, 0-9</span>
                         <input type="hidden" name="tempUsername" value="<?= $user['username']; ?>" id="tempUsername">
                         <button type="button" class="btn btn-primary btn-circle" id="btnEditUsername" onclick="editUsername()">
                             <i class="fas fa-user-edit"></i>
                         </button>
                     </div>
                     <!-- Rounded switch -->
                     <div class="form-group d-flex">
                         <label for="status_akun" class="mr-5 mb-0 align-self-center" style="width: 10%;">Status akun</label>
                         <label class="switch">
                             <input type="checkbox" id="status_akun" name="status_akun" onchange="editStatusAkun(event)" value="<?= $user['status_akun_id']; ?>" <?= $user['status_akun_id'] == 1 ? 'checked' : ''; ?>>
                             <span class="slider round"></span>
                         </label>
                     </div>
                 </form>
                 <p class="card-text"><small class="text-muted">Member since <?= date('d F Y', strtotime($user['date_created'])); ?></small></p>
                 <button type="submit" form="editUser" class="btn btn-primary" disabled id="btnSave">Simpan</button>
             </div>
         </div>
     </div>
 </div>
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
                 <form id="editUser" method="post" action="<?= base_url('user/coba'); ?>" onkeydown="return event.key != 'Enter';">
                     <div class="form-group d-flex" style="gap: 10px;">
                         <label for="name" class="align-self-center mb-0" style="width: 10%;">Nama lengkap</label>
                         <input type="text" class="w-50" style="min-height: 40px;" name="name" id="name" value="<?= $user['nama']; ?>" readonly onfocusout="editHandle('name')" onkeyup="textEditHandle(event, 'name')">
                         <span class="h4 align-self-center mb-0 text-success d-none" id="info_name"></span>
                         <input type="hidden" name="temp_name" value="<?= $user['nama']; ?>" id="temp_name">
                         <button type="button" class="btn btn-primary btn-circle" id="btn_edit_name" onclick="editHandle('name')">
                             <i class="fas fa-user-edit"></i>
                         </button>
                     </div>
                     <div class="form-group d-flex" style="gap: 10px">
                         <label for="username" class="align-self-center mb-0" style="width: 10%;">Username</label>
                         <input type="text" class="w-50" style="min-height: 40px;" name="username" id="username" value="<?= $user['username']; ?>" readonly onfocusout="editHandle('username')" onkeyup="textEditHandle(event, 'username')">
                         <span class="h4 align-self-center mb-0 text-success d-none" id="info_username">a-z, 0-9</span>
                         <input type="hidden" name="temp_username" value="<?= $user['username']; ?>" id="temp_username">
                         <button type="button" class="btn btn-primary btn-circle" id="btn_edit_username" onclick="editHandle('username')">
                             <i class="fas fa-user-edit"></i>
                         </button>
                     </div>
                     <!-- Rounded switch -->
                     <div class="form-group d-flex" style="gap: 15px;">
                         <label for="status_akun" class="mb-0 align-self-center" style="width: 10%;">Status akun</label>
                         <label class="switch">
                             <input type="checkbox" id="status_akun" name="status_akun" onchange="editStatusAkun(event)" value="<?= $user['status_akun']; ?>" <?= $user['status_akun'] == 1 ? 'checked' : ''; ?>>
                             <span class="slider round"></span>
                         </label>
                     </div>
                     <div class="form-group d-flex" style="gap: 15px;">
                         <label for="jenis_kelamin" class="mb-0 align-self-center" style="width: 10%;">Jenis kelamin</label>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="jenis_kelain" id="jenis_kelamin_male" value="M" <?= $user['jenis_kelamin'] == 'M' ? 'checked' : ''; ?>>
                             <label class="form-check-label" for="jenis_kelamin_male">
                                 Laki - laki
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="jenis_kelain" id="jenis_kelamin_female" value="F" <?= $user['jenis_kelamin'] == 'F' ? 'checked' : ''; ?>>
                             <label class="form-check-label" for="jenis_kelamin_female">
                                 Perempuan
                             </label>
                         </div>
                     </div>
                     <div class="form-group d-flex" style="gap: 10px">
                         <label for="nomer_hp" class="align-self-center mb-0" style="width: 10%;">Nomer HP</label>
                         <input type="text" class="w-50" style="min-height: 40px;" name="nomer_hp" id="nomer_hp" value="<?= $user['nomer_hp']; ?>" readonly onfocusout="editHandle('nomer_hp')" onkeyup="textEditHandle(event, 'nomer_hp')">
                         <span class="h4 align-self-center mb-0 text-success d-none" id="info_nomer_hp">0-9</span>
                         <input type="hidden" name="temp_nomer_hp" value="<?= $user['nomer_hp']; ?>" id="temp_nomer_hp">
                         <button type="button" class="btn btn-primary btn-circle" id="btn_edit_nomer_hp" onclick="editHandle('nomer_hp')">
                             <i class="fas fa-user-edit"></i>
                         </button>
                     </div>
                 </form>
                 <p class="card-text mb-0"><small class="text-muted">Member level <?= $level_user['name']; ?></small></p>
                 <p class="card-text mb-0"><small class="text-muted">Member since <?= date('d F Y', strtotime($user['date_created'])); ?></small></p>
                 <button type="submit" form="editUser" class="btn btn-primary" disabled id="btnSave">Simpan</button>
             </div>
         </div>
     </div>
 </div>
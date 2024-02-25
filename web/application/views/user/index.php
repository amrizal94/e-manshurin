 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
     <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
         <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
 </div>

 <div class="card mb-3" style="max-width: 540px;">
     <div class="row no-gutters">
         <div class="col-md-4">
             <img class="card-img" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="image profile">
         </div>
         <div class="col-md-8">
             <div class="card-body">
                 <h5 class="card-title"><?= $user['name']; ?></h5>
                 <p class="card-text"><?= $user['email']; ?></p>
                 <p class="card-text"><small class="text-muted">Member since <?= date('d F Y', $user['date_created']); ?></small></p>
             </div>
         </div>
     </div>
 </div>
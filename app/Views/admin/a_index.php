 <?= $this->extend('layout/template_admin'); ?>

 <?= $this->section('content'); ?>

 <div class="main-panel">
     <div class="content-wrapper">
         <div class="row">
             <h1 class="ml-3">Selamat Datang</h1>
             <div class="col-lg-12 d-flex">
                 <div class="card col-lg-3 p-3 mr-3 mb-3 akuBanget">
                     <h4 class="card-title">Hari ini</h4>
                     <h3><?= $today; ?></h3>
                 </div>

                 <div class="card col-lg-3 p-3 mr-3 mb-3 akuBanget">
                     <h4 class="card-title">Jumlah Pasien Hari ini</h4>
                     <h3><?= $jumlah; ?></h3>
                 </div>
             </div>
             <div class="col-lg-12 grid-margin stretch-card">
                 <div class="card">
                     <div class="card-body">
                         <h4 class="card-title">Data Pasien</h4>
                         <table class="table table-bordered">
                             <thead>
                                 <tr>
                                     <th> No </th>
                                     <th> Tanggal Periksa </th>
                                     <th> Nama Pasien </th>
                                     <th> Dokter </th>
                                     <th> Poliklinik </th>
                                     <th> Jam Praktek </th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $id = 1;
                                    foreach ($antrian as $an) : ?>
                                     <tr>
                                         <td> <?= $id; ?> </td>
                                         <td> <?= $an->tgl_janji; ?> </td>
                                         <td> <?= $an->nama_depan . " " . $an->nama_belakang; ?> </td>
                                         <td> <?= $an->dokter; ?> </td>
                                         <td> <?= $an->poli; ?> </td>
                                         <td> <?= $an->jam; ?> </td>
                                     </tr>
                                 <?php $id++;
                                    endforeach; ?>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <footer class="footer">
         <div class="container-fluid clearfix">
             <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Rumah Sakit</span>
         </div>
     </footer>

 </div>

 <?= $this->endSection(); ?>
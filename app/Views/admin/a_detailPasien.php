 <?= $this->extend('layout/template_admin'); ?>

 <?= $this->section('content'); ?>

 <div class="main-panel">
     <div class="content-wrapper">
         <div class="row">
             <div class="d-flex justify-content-between col-md-12">
                 <h2 class="ml-3">Data Pasien</h2>
                 <a href="<?php echo base_url('/admin/pasien') ?>" class="btn btn-gradient-primary mb-3">Kembali</a>
             </div>
             <div class="col-lg-12 grid-margin stretch-card">
                 <div class="card">
                     <div class="card-body">
                         <h4 class="card-title">Biodata</h4>
                         <div class="d-flex col-md-10">
                             <table class="table col-md-6">
                                 <tr>
                                     <td> Nama Depan </td>
                                     <td> <?= $pasien['nama_depan']; ?> </td>
                                 </tr>
                                 <tr>
                                     <td> Nama Belakang </td>
                                     <td> <?= $pasien['nama_belakang']; ?> </td>
                                 </tr>
                                 <tr>
                                     <td> Tempat, Tanggal Lahir </td>
                                     <td> <?= $pasien['tempat'] . ", " . $pasien['tl']; ?> </td>
                                 </tr>
                                 <tr>
                                     <td> Jenis Kelamin </td>
                                     <td> <?= $pasien['gender']; ?> </td>
                                 </tr>
                                 <tr>
                                     <td> Nomer BPJS </td>
                                     <td> <?= $pasien['bpjs']; ?> </td>
                                 </tr>

                             </table>
                             <table class="ml-5 table col-md-6">
                                 <tr>
                                     <td> Email </td>
                                     <td> <?= $pasien['email']; ?> </td>
                                 </tr>
                                 <tr>
                                     <td> Telp </td>
                                     <td> <?= $pasien['telp']; ?> </td>
                                 </tr>
                                 <tr>
                                     <td> Pendidikan Terakhir</td>
                                     <td> <?= $pasien['pendidikan']; ?> </td>
                                 </tr>
                                 <tr>
                                     <td> Pekerjaan </td>
                                     <td> <?= $pasien['pekerjaan']; ?> </td>
                                 </tr>
                                 <tr>
                                     <td> &nbsp; </td>
                                     <td> &nbsp; </td>
                                 </tr>

                             </table>
                         </div>
                     </div>

                 </div>
             </div>
             <h2 class="ml-3">Riwayat Antrian</h2>
             <div class="col-lg-12 d-flex">
                 <?php foreach ($riwayat as $j) : ?>
                     <div class="card col-lg-3 p-3 mr-3 mb-3">

                         <div class="card text-center">
                             <div class="alert alert-success">
                                 <b>
                                     <h5 class="card-title"><?= $j->dokter; ?></h5>
                                 </b>
                                 <b><?= $j->poli; ?></b><br>
                                 <?= $j->tgl_janji; ?><br>
                                 <?= $j->jam; ?>
                             </div>

                         </div>

                     </div>

                 <?php endforeach; ?>
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
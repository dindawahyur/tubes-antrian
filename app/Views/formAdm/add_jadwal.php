 <?= $this->extend('layout/template_admin'); ?>

 <?= $this->section('content'); ?>

 <div class="main-panel">
     <div class="content-wrapper">
         <div class="row">
             <div class="col-12 grid-margin stretch-card">
                 <div class="card">
                     <div class="card-body">
                         <h4 class="card-title"><?= $title; ?></h4>
                         <form class="forms-sample" action="<?php echo base_url('/adminjadwal/save') ?>" method="post">
                             <div class="form-group">
                                 <label for="exampleInputName1">Nama Dokter</label>
                                 <select class="form-control" id="p" name="id_dokter">
                                     <option>== Pilih Dokter ==</option>
                                     <?php foreach ($dokter as $p) : ?>
                                         <option value="<?= $p['id_dokter']; ?>"><?= $p['dokter']; ?></option>
                                     <?php endforeach; ?>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="jam">Jam Praktik</label>
                                 <input type="text" name="jam" class="form-control" id="jam" placeholder="Jam Praktik">
                             </div>
                             <div class="form-group">
                                 <label for="kuota">Kuota Pasien</label>
                                 <input type="text" name="kuota" class="form-control" id="kuota" placeholder="Kuota Pasien">
                             </div>

                             <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                             <button type="reset" class="btn btn-light">Cancel</button>
                         </form>
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
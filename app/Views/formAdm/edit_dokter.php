 <?= $this->extend('layout/template_admin'); ?>

 <?= $this->section('content'); ?>

 <div class="main-panel">
     <div class="content-wrapper">
         <div class="row">
             <div class="col-12 grid-margin stretch-card">
                 <div class="card">
                     <div class="card-body">
                         <h4 class="card-title"><?= $title; ?></h4>
                         <form class="forms-sample" action="<?= base_url('/admindokter/update/' . $dokter['id_dokter']) ?>" method="post">
                             <div class="form-group">
                                 <label for="exampleInputName1">Nama Dokter</label>
                                 <input type="text" name="dokter" class="form-control" id="exampleInputName1" placeholder="Nama Dokter" value="<?= $dokter['dokter']; ?>">
                             </div>
                             <div class="form-group">
                                 <label for="exampleInputEmail3">Spesialis</label>
                                 <input type="text" name="spesialis" class="form-control" id="exampleInputEmail3" placeholder="Spesialis" value="<?= $dokter['spesialis']; ?>">
                             </div>
                             <div class="form-group">
                                 <label for="poli">Polilinik</label>
                                 <select class="form-control" id="p" name="id_poliklinik">
                                     <option>== Pilih Poliklinik ==</option>
                                     <?php foreach ($poliklinik as $p) : ?>
                                         <option value="<?= $p['id_poliklinik']; ?>" <?php if ($p['id_poliklinik'] == $dokter['id_poliklinik']) : echo 'selected';
                                                                                        endif; ?>><?= $p['poli']; ?>
                                         </option>
                                     <?php endforeach; ?>
                                 </select>

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
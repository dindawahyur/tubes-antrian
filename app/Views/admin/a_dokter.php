 <?= $this->extend('layout/template_admin'); ?>

 <?= $this->section('content'); ?>

 <div class="main-panel">
     <div class="content-wrapper">
         <div class="row">
             <div class="col-lg-12">
                 <h2 class="mb-3">Data Dokter</h2>
             </div>
             <div class="col-lg-12 grid-margin stretch-card">
                 <div class="card">
                     <div class="card-body">
                         <!-- <h4 class="card-title">Tabel</h4> -->
                         <div class="stretch-card d-flex justify-content-between">
                             <div class="form-group mr-3">
                                 <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Search Nama Dokter">
                             </div>

                             <a href="<?php echo base_url('/admindokter/create') ?>" class="btn btn-gradient-primary mb-3">Tambah Data Dokter</a>
                         </div>
                         <table class="table table-bordered" id="myTable">
                             <thead>
                                 <tr>
                                     <th> No </th>
                                     <th> Nama Dokter </th>
                                     <th> Spesialis </th>
                                     <th> Poliklinik </th>
                                     <th> Aksi </th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $id = 1;
                                    foreach ($gabungan as $an) : ?>
                                     <tr>
                                         <td> <?= $id; ?> </td>
                                         <td> <?= $an->dokter; ?> </td>
                                         <td> <?= $an->spesialis; ?> </td>
                                         <td> <?= $an->poli; ?> </td>
                                         <td>
                                             <a href="<?= base_url('/admindokter/ubah/' . $an->id_dokter) ?>" class="btn btn-outline-success">Update</a>
                                             <a href="<?= base_url('/admindokter/delete/' . $an->id_dokter) ?>" class="btn btn-outline-danger">Delete</a>
                                         </td>
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

 <script>
     function myFunction() {
         var input, filter, table, tr, td, i, txtValue;
         input = document.getElementById("myInput");
         filter = input.value.toUpperCase();
         table = document.getElementById("myTable");
         tr = table.getElementsByTagName("tr");
         for (i = 0; i < tr.length; i++) {
             td = tr[i].getElementsByTagName("td")[1];
             console.log(td);
             if (td) {
                 txtValue = td.textContent || td.innerText;
                 if (txtValue.toUpperCase().indexOf(filter) > -1) {
                     tr[i].style.display = "";
                 } else {
                     tr[i].style.display = "none";
                 }
             }
         }
     }
 </script>

 <?= $this->endSection(); ?>
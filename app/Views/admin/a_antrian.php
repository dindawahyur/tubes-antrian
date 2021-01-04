 <?= $this->extend('layout/template_admin'); ?>

 <?= $this->section('content'); ?>

 <div class="main-panel">
     <div class="content-wrapper">
         <div class="row">
             <div class="col-lg-12">
                 <h2 class="mb-4">Data antrian Pasien</h2>
                 <p>Search data:</p>
                 <div class="stretch-card">
                     <!-- <div class="form-group mr-3">
                         <label for="tanggal">Tanggal Periksa</label><br>
                         <input type="date" id="tanggal" style="height: 38px;">
                     </div> -->
                     <!-- <div class="form-group mr-3">
                         <label for="searchPasien">Pasien</label>
                         <input type="text" id="searchDokter" class="form-control" placeholder="Ketikan Nama Pasien">
                     </div> -->
                     <div class="form-group mr-3">
                         <label for="searchDokter">Dokter</label>
                         <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Search Nama Dokter">
                     </div>
                     <div class="form-group">
                         <label for="poliklinik">Poliklinik</label>
                         <select class="form-control" name="poli" id="poliklinik">
                             <option value="awal">-- Pilih Poliklinik --</option>
                             <?php foreach ($poliklinik as $poli) : ?>
                                 <option value="<?= $poli['poli']; ?>"><?= $poli['poli']; ?></option>
                             <?php endforeach; ?>
                         </select>
                     </div>

                 </div>
             </div>
             <div class="col-lg-12 grid-margin stretch-card">
                 <div class="card">
                     <div class="card-body">
                         <h4 class="card-title">Tabel</h4>
                         <table class="table table-bordered" id="myTable">
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

 <script>
     function myFunction() {
         var input, filter, table, tr, td, i, txtValue;
         input = document.getElementById("myInput");
         filter = input.value.toUpperCase();
         table = document.getElementById("myTable");
         tr = table.getElementsByTagName("tr");
         for (i = 0; i < tr.length; i++) {
             td = tr[i].getElementsByTagName("td")[3];
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

     //search by poli
     var valuePoliklinik = null;
     var valueDokter = null;

     function searchByPoli() {
         var select = document.getElementById("poliklinik");
         valuePoliklinik = select.options[select.selectedIndex].value.toUpperCase();
         //alert(valuePoliklinik);
         // showBySearch();

         table = document.getElementById("myTable");
         tr = table.getElementsByTagName("tr");
         for (i = 0; i < tr.length; i++) {
             td = tr[i].getElementsByTagName("td")[4];
             console.log(td);
             if (td) {
                 txtValue = td.textContent || td.innerText;
                 if (txtValue.toUpperCase().indexOf(valuePoliklinik) > -1) {
                     tr[i].style.display = "";
                 } else {
                     tr[i].style.display = "none";
                 }
             }
         }
     }

     document.getElementById('poliklinik').addEventListener('change', searchByPoli);
 </script>

 <?= $this->endSection(); ?>
 <?= $this->extend('layout/template_admin'); ?>

 <?= $this->section('content'); ?>

 <div class="main-panel">
     <div class="content-wrapper">
         <div class="row">
             <div class="col-12 grid-margin stretch-card">
                 <div class="card">
                     <div class="card-body">
                         <h4 class="card-title">Form</h4>
                         <form class="forms-sample">
                             <div class="form-group">
                                 <label for="exampleInputName1">Nama</label>
                                 <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                             </div>
                             <div class="form-group">
                                 <label for="exampleInputEmail3">Email</label>
                                 <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                             </div>
                             <div class="form-group">
                                 <label for="exampleInputPassword4">Password</label>
                                 <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                             </div>
                             <div class="form-group">
                                 <label for="exampleSelectGender">Jenis Kelamin</label>
                                 <select class="form-control" id="exampleSelectGender">
                                     <option>Laki-Laki</option>
                                     <option>Perempuan</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="exampleTextarea1">Alamat</label>
                                 <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                             </div>
                             <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                             <button class="btn btn-light">Cancel</button>
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
<?= $this->extend('layout/template'); ?>

<?= $this->section('cssnya'); ?>
<style>
    body {
        /* background-image: radial-gradient(circle at top left, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(img/hs4.jpg); */
        background-color: #fafaf4;
    }

    nav {
        background: radial-gradient(circle at top left, #00d382, #0825fd);
    }

    .navbar-nav {
        margin-left: 10%;
        color: white;
    }

    .nav-link {
        margin-right: 8px;
    }

    .dropdown-menu {
        margin-top: 7px;
        padding-top: 1px;
        padding-bottom: 1px;
    }

    .dropdown-item:hover {
        background: radial-gradient(circle at top left, #00d382, #0825fd);
        color: white;
    }

    .profil {
        margin-left: 80%;
        margin-top: 0px;
        padding-top: 1px;
        padding-bottom: 1px;
    }

    form {
        margin: auto;
        margin-top: 5%;
        margin-bottom: 5%;
        width: 50%;
        background-color: white;
        border-top-left-radius: 30px;
        border-bottom-right-radius: 30px;
        box-shadow: 2px 2px 7px 7px rgba(61, 61, 61, 0.4);

    }

    .form-control {
        border-radius: 30px;
        border: 2px solid #1732fd;
        font-size: smaller;
    }

    label {
        margin-left: 0;
    }

    .btn {
        margin: auto;
        width: 50%;
        border-radius: 30px;
        background-image: linear-gradient(to bottom right, #0AE893, #1732fd);
        ;
    }

    footer {
        background-image: radial-gradient(circle at bottom right, #00d382, #0825fd), url(img/hs4.jpg);
        color: white;
    }

    .fas {
        margin-right: 10px;
        margin-top: 7px;
    }

    .fab {
        margin-right: 10px;
        margin-top: 7px;
    }

    .list-unstyled li {
        display: flex;
    }

    .list-unstyled a {
        color: white;
    }

    .sosmed li {
        margin-bottom: 10px;
    }

    .rs-footer {
        margin-left: 13px;
        margin-right: -30px;
        text-align: justify;
        padding-right: 80px;
    }

    @media screen and (max-width: 427px) {
        nav {
            width: 440px;
        }

        .batas {
            border-top: 1px solid white;
        }

        .navbar-nav {
            margin-left: 5%;
        }

        .profil-nav {
            margin-left: -20%;
        }

        .profil {
            margin-left: 0px;
            width: 220px;
        }

        form {
            width: 90%;
            padding: -5px;
        }

        .form-row {
            flex-direction: column;
        }

        .col {
            margin-bottom: 10px;
        }
    }
</style>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<?php if (isset($_SESSION['penuh'])) : ?>
    <div class="alert alert-danger text-center" role="alert">
        <?= $_SESSION['penuh']; ?>
    </div>
<?php endif; ?>

<div class="container d-flex">
    <div class="col-md-4 mr-1 mt-3">
        <form class="text-center border border-light p-5 col-md-12" action="" method="">

            <p class="h4 mb-4">Perawatan yang Dituju</p>
            <hr>

            <div class="form-group" id="apaya">
                <label for="dokter">Dokter</label>
                <input type="text" id="searchDokter" class="form-control" placeholder="Ketikan Nama Dokter">
            </div>

            <div class="form-group">
                <label for="poli">Poliklinik</label>
                <select class="form-control" name="poli" id="poliklinik">
                    <option value="awal">-- Pilih Poliklinik --</option>
                    <?php foreach ($poliklinik as $poli) : ?>
                        <option value="<?= $poli['poli']; ?>"><?= $poli['poli']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Sign button -->

            <!-- <button class="btn btn-info my-4 btn-block" type="submit">Kirim</button> -->
        </form>
    </div>
    <div class="col-md-8 d-flex mt-3 mb-5">
        <div class="row col-12" id="listDokter">

            <?php foreach ($gabungan as $j) : ?>
                <div class="col-md-5 mt-4 disini">
                    <div class="card text-center">
                        <img class="card-img-top mx-auto mt-3" style="height: 100px; width:100px" src="<?php echo base_url('img/avatar.png') ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?= $j->dokter; ?></h5>
                            <p class="nama"><?= $j->poli; ?></p>
                            <form action="<?= base_url('cek/'); ?>" method="POST" style="margin:0; border:none; box-shadow: none; width:100%;">


                                <select class="form-control" name="jadwal">
                                    <option>-- Jam Praktek --</option>
                                    <?php foreach ($jadwal as $data) :
                                        if ($data['id_dokter'] == $j->id_dokter) { ?>
                                            <option value="<?= $data['id_jadwal'] ?>">
                                                <?= " jam " . $data['jam']; ?>
                                            </option>
                                        <?php
                                        }

                                        ?>
                                    <?php endforeach; ?>
                                </select>
                                <br>


                                <input type="submit" class="btn btn-primary" value="Buat Janji">
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>


        </div>
    </div>
</div>

<script>
    var valuePoliklinik = null;
    var valueDokter = null;

    function searchByName() {
        valueDokter = document.getElementById("searchDokter").value.toUpperCase();
        duh();
    }

    function searchByPoli() {
        var select = document.getElementById("poliklinik");
        valuePoliklinik = select.options[select.selectedIndex].value;
        //alert(valuePoliklinik);
        // showBySearch();

        var listDokter = document.getElementById('listDokter')
        var listDokterToList = listDokter.getElementsByClassName('disini');

        for (var i = 0; i < listDokterToList.length; i++) {
            var cardBody = listDokterToList[i].getElementsByClassName('card-body')[0];
            var namaDokter = cardBody.getElementsByClassName('card-title')[0].innerText;
            var namaPoli = cardBody.getElementsByClassName('nama')[0].innerText;
            console.log(namaPoli);

            if (namaPoli == valuePoliklinik) {
                listDokterToList[i].style.display = "block";
            } else {
                listDokterToList[i].style.display = "none";
            }

        }
    }

    function showBySearch() {
        var listDokter = document.getElementById('listDokter')
        var listDokterToList = listDokter.getElementsByClassName('disini');

        for (var i = 0; i < listDokterToList.length; i++) {
            var cardBody = listDokterToList[i].getElementsByClassName('card-body')[0];
            var namaDokter = cardBody.getElementsByClassName('card-title')[0].innerText;
            var namaPoli = cardBody.getElementsByClassName('nama')[0].innerText;

            if (namaPoli == valuePoliklinik) {
                listDokterToList[i].style.display = "block";
            } else {
                listDokterToList[i].style.display = "none";
            }

        }
    }

    function duh() {
        var listDokter = document.getElementById('listDokter')
        var listDokterToList = listDokter.getElementsByClassName('disini');

        for (var i = 0; i < listDokterToList.length; i++) {
            var cardBody = listDokterToList[i].getElementsByClassName('card-body')[0];
            var namaDokter = cardBody.getElementsByClassName('card-title')[0].innerText.toUpperCase();
            console.log(valueDokter);

            //  for (var j = 0; j < namaDokter.length; j++) {
            if (namaDokter.indexOf(valueDokter) > -1) {
                listDokterToList[i].style.display = "block";
            } else {
                listDokterToList[i].style.display = "none";
            }

            //}

        }
    }

    document.getElementById('searchDokter').addEventListener("keyup", searchByName);
    document.getElementById('poliklinik').addEventListener('change', searchByPoli);
</script>
<?= $this->endSection(); ?>
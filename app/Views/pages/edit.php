<?= $this->extend('layout/template'); ?>

<?= $this->section('cssnya'); ?>
<style>
    body {
        background-image: radial-gradient(circle at top left, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(img/hs4.jpg);
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

<div class="daftar">
    <form class="text-center border border-light p-5" action="" method="">

        <p class="h4 mb-4">Perawatan yang Dituju</p>
        <hr>

        <div class="form-group">
            <label for="poli">Poliklinik</label>
            <select class="form-control" name="poli" id="poliklinik" onchange="tampilDokter(this.value)">
                <?php foreach ($poliklinik as $poli) : ?>
                    <option value="<?= $poli['id_poliklinik']; ?>"><?= $poli['poli']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group" id="apaya" style="display: none;">
            <label for="dokter">Dokter</label>
            <!-- this itu ngambil teks nya,  -->
            <select class="form-control" id="dokter" onchange="tampilJam(this)" name="dokter">
                <option value="awal">-- Pilih Dokter --</option>
                <?php foreach ($gabungan as $key) : ?>

                    <option class="dataDokter" value="<?= $key->id_poliklinik; ?>">

                        <?= $key->dokter; ?>
                    </option>

                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group" id="apaya2" style="display: none;">
            <label for="jam">Jam Kunjungan</label>
            <select class="form-control" id="jam" name="jam">
                <option value="awal">-- Pilih Jam Praktek --</option>
                <?php foreach ($jam as $j) : ?>
                    <option value="<?= $j->dokter; ?>">
                        <?= $j->hari . " jam " . $j->jam; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <!-- Sign up button -->

        <button class="btn btn-info my-4 btn-block" type="submit">Kirim</button>
    </form>
</div>
<script>
    var poli = document.getElementById('poliklinik');
    var poliOption = poli.getElementsByTagName('option');
    // for (var i = 0; i < poliOption.length; i++) {
    //     console.log(poliOption[i]);
    // }

    function tampilDokter(id_poli) {
        var hm = document.getElementById('apaya');
        hm.style.display = 'block';

        var ambilDokter = document.getElementById('dokter');
        var dokterOption = ambilDokter.getElementsByTagName('option');

        console.log("diatas");
        for (var i = 0; i < dokterOption.length; i++) {

            console.log(dokterOption[i].value);

            if (dokterOption[i].value == "awal") {
                ambilDokter[i].style.display = 'block';
            } else if (id_poli == dokterOption[i].value) {
                ambilDokter[i].style.display = 'block';
            } else {
                ambilDokter[i].style.display = 'none';
            }
        }
        document.getElementById("dokter").value = "awal";
    }

    function tampilJam(dokternya) {
        var hm = document.getElementById('apaya2');
        hm.style.display = 'block';

        //var nama = dokternya.options[dokternya.selectedIndex].text;
        var nama = dokternya.options[dokternya.selectedIndex].text;

        var ambilJam = document.getElementById('jam');
        var jamOption = ambilJam.getElementsByTagName('option');

        for (var i = 0; i < jamOption.length; i++) {

            //console.log(jamOption[i].value);

            if (jamOption[i].value == "awal") {
                ambilJam[i].style.display = 'block';
            } else if (nama == jamOption[i].value) { //disini din kondisinya
                ambilJam[i].style.display = 'block';
            } else {
                ambilJam[i].style.display = 'none';
            }
        }
        document.getElementById("jam").value = "awal";
    }


    // document.getElementById('poliklinik').addEventListener('change', tampilDokter(this.value));
</script>
<?= $this->endSection(); ?>
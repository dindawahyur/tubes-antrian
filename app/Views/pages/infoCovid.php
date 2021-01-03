<?= $this->extend('layout/template'); ?>

<?= $this->section('cssnya'); ?>
<style>
    nav {
        background: radial-gradient(circle at top left, #00d382, #0825fd);
        height: 60px;
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

    footer {
        width: 100%;
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

    h2 {
        color: #0825fd;
        font-weight: 800;
        text-align: center;
        padding-top: 5%;
        font-size: 3rem;
    }

    .main {
        padding: 5%;
    }

    .main h4 {
        margin-bottom: 3%;
    }

    .statistik {
        display: grid;
        grid-template-columns: 22% 22% 22% 22%;
        grid-gap: 30px;
        justify-content: center;
    }

    .bagan {
        color: white;
        height: 200px;
        padding: 8%;
        border-radius: 5%;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .bagan h3 {
        font-size: 2.5rem;
        font-weight: 800;
    }

    .satu {
        background-color: #2a2a72;
        background-image: linear-gradient(315deg, #009ffd 0%, #2a2a72 74%);
    }

    .dua {
        background-color: #cddd21;
        background-image: linear-gradient(315deg, #cddd21 0%, #ffc907 74%);
    }

    .tiga {
        background-color: #3bb78f;
        background-image: linear-gradient(315deg, #3bb78f 0%, #0bab64 74%);
    }

    .empat {
        background-color: #990000;
        background-image: linear-gradient(147deg, #990000 0%, #ff0000 74%);
    }

    .info {
        display: flex;
    }

    .skala {
        display: flex;
    }

    .container {
        width: 100%;
        margin-top: 8%;
        margin-bottom: 8%;
    }

    .container h3 {
        text-align: center;
        font-weight: 800;
        color: #0825fd;
        margin-bottom: 2%;
    }

    .container hr {
        background-color: #0825fd;
        opacity: 0.5;
    }

    .container button {
        color: white;
    }

    .card-header {
        background-color: #2a2a72;
        background-image: linear-gradient(315deg, #009ffd 0%, #2a2a72 74%);
    }

    .container button:hover {
        color: white;
    }

    .row {
        margin-top: 5%;
    }

    .page-footer {
        width: 111.5%;
        margin: -6%;
    }

    @media screen and (max-width: 427px) {
        body {
            overflow-x: hidden;
        }

        nav {
            width: 100%;
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

        .main {
            flex-direction: column;
            margin-bottom: 10%;
        }

        h2 {
            margin-bottom: 10%;
            font-size: 2rem;
        }

        .statistik {
            grid-template-columns: 75%;
            justify-content: center;
        }

        .main h4 {
            font-size: 1.2rem;
        }
    }
</style>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<h2>Informasi Covid-19 di Indonesia</h2>
<div class="main">
    <h4>Update Terbaru Tanggal : 27 Desember 2020</h4>
    <div class="statistik">
        <div class="bagan satu">
            <div class="info">
                <i class="fas fa-lungs-virus"></i>
                <h5>Total</h5>
            </div>
            <h3>719.219 orang</h3>
            <div class="skala">
                <i class="fas fa-sort-up"></i>
                <p>54289 kasus</p>
            </div>
        </div>
        <div class="bagan dua">
            <div class="info">
                <i class="fas fa-ambulance"></i>
                <h5>Aktif</h5>
            </div>
            <h3>124.075 orang</h3>
            <div class="skala">
                <i class="fas fa-sort-up"></i>
                <p>13998 kasus</p>
            </div>
        </div>
        <div class="bagan tiga">
            <div class="info">
                <i class="fas fa-heartbeat"></i>
                <h5>Sembuh</h5>
            </div>
            <h3>574.099 orang</h3>
            <div class="skala">
                <i class="fas fa-sort-up"></i>
                <p>39028 kasus</p>
            </div>
        </div>
        <div class="bagan empat">
            <div class="info">
                <i class="fas fa-skull-crossbones"></i>
                <h5>Meninggal Dunia</h5>
            </div>
            <h3>21.045 orang</h3>
            <div class="skala">
                <i class="fas fa-sort-up"></i>
                <p>1263 kasus</p>
            </div>
        </div>
    </div>

    <div class="container py-3">
        <h3>Tentang Covid-19</h3>
        <hr>
        <div class="row">
            <div class="col-10 mx-auto">
                <div class="accordion" id="faqExample">
                    <div class="card">
                        <div class="card-header p-2" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Apa itu Covid-19?
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqExample">
                            <div class="card-body">
                                <b>Jawaban:</b> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi non dolorem fuga praesentium reprehenderit magnam quae itaque ad et inventore, velit assumenda sapiente eveniet ratione alias voluptatem exercitationem doloribus facere!
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-2" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Bagaimana cara mencegah penyebaran Covid-19?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqExample">
                            <div class="card-body">
                                <b>Jawaban:</b> Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                <ul>
                                    <li>Lorem ipsum</li>
                                    <li>Lorem ipsum</li>
                                    <li>Lorem ipsum</li>
                                    <li>Lorem ipsum</li>
                                    <li>Lorem ipsum</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-2" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Bagaimana gejala yang terjadi jika seseorang terjangkit virus ini?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
                            <div class="card-body">
                                <b>Jawaban:</b> Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                <ul>
                                    <li>Lorem ipsum</li>
                                    <li>Lorem ipsum</li>
                                    <li>Lorem ipsum</li>
                                    <li>Lorem ipsum</li>
                                    <li>Lorem ipsum</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-2" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Apa yang harus dilakukan ketika kita mengalami gejala-gejala seperti pernyataan di atas?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
                            <div class="card-body">
                                <b>Jawaban:</b> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae doloribus dolorem animi, quo minima optio reiciendis architecto consequatur.
                                Iure tempora minima atque totam quidem porro soluta sapiente quisquam facere ipsa?
                                <ul>
                                    <li>Lorem ipsum</li>
                                    <li>Lorem ipsum</li>
                                    <li>Lorem ipsum</li>
                                    <li>Lorem ipsum</li>
                                    <li>Lorem ipsum</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--/row-->
    </div>
    <!--container-->
    <?= $this->endSection(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Covid 19</title>
    <?php include 'link/link.php' ?>
    <?php include 'css/style.php' ?>
</head>
<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg nav_style p-3" id="beranda">
        <a class="navbar-brand pl-5" href="#"><strong>COVID-19</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto pr-5 text-capitalize">
            <li class="nav-item active">
                <a class="nav-link" href="#beranda">Beranda <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#gejala">Gejala</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#cegah">Pencegahan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#layanan">Layanan</a>
            </li>
            </ul>
        </div>
    </nav>

<!-- main header -->
    <div class="main_header">
        <div class="row w-100 h-100">
            <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
                <div class="leftside w-100 h-100 d-flex justify-content-center
                align-items-center">
                    <img src="images/coronavirus.png" height="390" width="390">
                </div>
            </div>

            <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
                <div class="rightside w-100 h-100 d-flex justify-content-center
                align-items-center">
                    <h1>Informasi Terkini Terkait Corona <br>
                    <span>Stay Safe & Stay at Home.</span></h1>
                </div>
            </div>  
        </div>
    </div>

<!-- update corona virus -->
    <section class="corona-terkini">
        <div class="mb-5">
            <h3 class="text-uppercase text-center">Covid-19 Terkini Berdasarkan Provinsi</h3>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center">
                <tr>
                    <th>No</th>
                    <th>Provinsi</th>
                    <th>Positif</th>
                    <th>Sembuh</th>
                    <th>Meninggal</th>
                </tr>
                    <?php 
                    $data = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi/');
                    $coronalive = json_decode($data, true);
                    ?>

                    <?php 
                        $no = 1;
                        foreach($coronalive as $datacorona) :
                    ?>
                    <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $datacorona['attributes']['Provinsi'] ?></td>
                    <td><?php echo $datacorona['attributes']['Kasus_Posi'] ?></td>
                    <td><?php echo $datacorona['attributes']['Kasus_Semb'] ?></td>
                    <td><?php echo $datacorona['attributes']['Kasus_Meni'] ?></td>
                    </tr>

                    <?php endforeach; ?>
            </table>
        </div>
    </section>

<!-- About  -->
    <div class="container-fluid sub-section pt-5 pb-5" id="about">
        <div class="section-header text-center mb-5 mt-5">
            <h1>About Covid-19</h1>
        </div>

        <div class="row pt-4">
            <div class="col-lg-5 col-md-6 col-12 ml-5 about_img">
                <img src="images/corona.jpg" class="img-fluid">
            </div>

            <div class="col-lg-6 col-md-6 col-12">
                <h3>Pengertian COVID-19 (Virus Corona)</h3>
                <p style="text-align: justify">Virus Corona atau severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2) adalah virus yang menyerang sistem pernapasan. Penyakit karena infeksi virus ini disebut COVID-19. Virus Corona bisa menyebabkan 
                    gangguan ringan pada sistem pernapasan, infeksi paru-paru yang berat, hingga kematian.</p>
                <p style="text-align: justify">Severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2) yang lebih dikenal dengan nama virus Corona adalah jenis baru dari coronavirus yang menular ke 
                    manusia. Virus ini bisa menyerang siapa saja, baik bayi, anak-anak, orang dewasa, lansia, ibu hamil, maupun ibu menyusui.</p>
            </div>
        </div>
    </div>

<!-- Gejala Virus corona -->
<div class="container-fluid pt-5 pb-5" id="gejala">
        <div class="section-header text-center mb-5 mt-5">
            <h1>Gejala Awal Virus Corona </h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                    <img src="images/cough.png" class="img-fluid" height="100" width="100">
                    <figcaption>Batuk</figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                    <img src="images/runny-nose.png" class="img-fluid" height="100" width="100">
                    <figcaption>Flu</figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                    <img src="images/fever.png" class="img-fluid" height="100" width="100">
                    <figcaption>Demam</figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                    <img src="images/sick.png" class="img-fluid" height="100" width="100">
                    <figcaption>Bersin</figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                    <img src="images/tired.png" class="img-fluid" height="100" width="100">
                    <figcaption>Lelah</figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                    <img src="images/breath.png" class="img-fluid" height="100" width="100">
                    <figcaption>Sesak Nafas</figcaption>
                    </figure>
                </div>
            </div>
        </div>
     </div>

<!--Pencegahan Gejala Virus corona -->
<div class="container-fluid sub-section pt-5 pb-5" id="cegah">
        <div class="section-header text-center mb-5 mt-5">
            <h1>Cara Pencegahan Virus Corona </h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                   <div class="row">
                   <div class="col-lg-4 col-md-4 col-12">
                        <figure>
                        <img src="images/img/hand-wash.png" class="img-fluid" height="80" width="80">
                        </figure>
                   </div>
                   <div class="col-lg-8 col-md-8 col-12">
                       <p style="text-align: justify">Mencuci tangan sesering mungkin dengan
                       sabun dan antiseptik untuk menghindari kuman dan bakteri.
                       </p>
                   </div>
                   </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                   <div class="row">
                   <div class="col-lg-4 col-md-4 col-12">
                        <figure>
                        <img src="images/img/coronavirus.png" class="img-fluid" height="80" width="80">
                        </figure>
                   </div>
                   <div class="col-lg-8 col-md-8 col-12">
                       <p style="text-align: justify">Menggunakan masker saat anda mengalami batuk dan bersin agar kuman dan bakteri tidak menyebar.
                       </p>
                   </div>
                   </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                   <div class="row">
                   <div class="col-lg-4 col-md-4 col-12">
                        <figure>
                        <img src="images/img/keep-distance.png" class="img-fluid" height="80" width="80">
                        </figure>
                   </div>
                   <div class="col-lg-8 col-md-8 col-12">
                       <p style="text-align: justify">Jaga jarak anda dengan orang lain dan hindari kontak langsung
                           minimal dengan jaga jarak 1 meter.
                       </p>
                   </div>
                   </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                   <div class="row">
                   <div class="col-lg-4 col-md-4 col-12">
                        <figure>
                        <img src="images/img/house.png" class="img-fluid" height="80" width="80">
                        </figure>
                   </div>
                   <div class="col-lg-8 col-md-8 col-12">
                       <p style="text-align: justify">Tetap dirumah dan jangan berpergian keluar rumah apabila anda tidak memiliki kepentingan yang mendesak.
                       </p>
                   </div>
                   </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                   <div class="row">
                   <div class="col-lg-4 col-md-4 col-12">
                        <figure>
                        <img src="images/img/television.png" class="img-fluid" height="80" width="80">
                        </figure>
                   </div>
                   <div class="col-lg-8 col-md-8 col-12">
                       <p style="text-align: justify">Tetap lihat berita terkini mengenai perkembangan virus corona melalui televisi
                       maupun media social.
                       </p>
                   </div>
                   </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                   <div class="row">
                   <div class="col-lg-4 col-md-4 col-12">
                        <figure>
                        <img src="images/img/diarrhea.png" class="img-fluid" height="80" width="80">
                        </figure>
                   </div>
                   <div class="col-lg-8 col-md-8 col-12">
                       <p style="text-align: justify">Periksa ke rumah sakit apabila anda mengalami gejala-gejala
                       terpapar virus corona untuk memeriksa kondisi anda.
                       </p>
                   </div>
                   </div>
                </div>
            </div>
        </div>
    </div>

<!-- Contact us -->
    <div class="container-fluid sub-section pt-5 pb-5" id="layanan">
        <div class="section-header text-center mb-5 mt-5">
            <h1>Layanan Virus Corona </h1>
        </div>

        <div class="container">
            <div class="col-lg-8 offset-lg-2 col-12 mt-5">
            <form>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Email address" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <label>Telephone</label>
                    <input type="number" class="form-control" name="number" placeholder="Telephone" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <label>Pilih Gejala Anda</label><br>

                    <div class="custom-control custom-checkbox
                    custom-control-inline text-capitalize">
                    <input type="checkbox" class="custom-control-input"
                    id="customcheckbox1" name="coronasym[]" value="Batuk">
                    <label for="customcheckbox1" class="custom-control-label">Batuk</label>
                    </div>

                    <div class="custom-control custom-checkbox
                    custom-control-inline text-capitalize">
                    <input type="checkbox" class="custom-control-input"
                    id="customcheckbox2" name="coronasym[]" value="Flu">
                    <label for="customcheckbox2" class="custom-control-label">Flu</label>
                    </div>

                    <div class="custom-control custom-checkbox
                    custom-control-inline text-capitalize">
                    <input type="checkbox" class="custom-control-input"
                    id="customcheckbox3" name="coronasym[]" value="Demam">
                    <label for="customcheckbox3" class="custom-control-label">Demam</label>
                    </div>

                    <div class="custom-control custom-checkbox
                    custom-control-inline text-capitalize">
                    <input type="checkbox" class="custom-control-input"
                    id="customcheckbox4" name="coronasym[]" value="Bersin">
                    <label for="customcheckbox4" class="custom-control-label">Bersin</label>
                    </div>

                    <div class="custom-control custom-checkbox
                    custom-control-inline text-capitalize">
                    <input type="checkbox" class="custom-control-input"
                    id="customcheckbox5" name="coronasym[]" value="Lelah">
                    <label for="customcheckbox5" class="custom-control-label">Lelah</label>
                    </div>

                    <div class="custom-control custom-checkbox
                    custom-control-inline text-capitalize">
                    <input type="checkbox" class="custom-control-input"
                    id="customcheckbox6" name="coronasym[]" value="Sesak Nafas">
                    <label for="customcheckbox6" class="custom-control-label">Sesak Nafas</label>
                    </div>
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="deskripsi" rows="3"></textarea>
                </div>
                <div align="right">
                   <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            </div>
        </div>
    </div>

<!-- top cursor -->
    <div class="container scrolltop float-right pr-5">
        <i class="fa fa-arrow-up" onclick="topFunction()" id="myBTN"></i>
    </div>
<!-- Footer -->
    <footer class="mt-5">
        <div class="footer-style text-white text-center container-fluid">
            <p>Copyright by Ade Setiawan 2020.</p>
        </div>
    </footer>

    <script type="text/javascript">

        $('.count').counterUp({
            delay:10,
            time:360
        })

        mybutton = document.getElementById("myBTN");

        window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
            if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                mybutton.style.display = "block";
            }else{
                mybutton.style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>
</html>
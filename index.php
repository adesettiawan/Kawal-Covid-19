<!DOCTYPE html>
<html lang="en">
<head>
    <title>Covid 19</title>
    <?php include 'link/link.php' ?>
    <?php include 'css/style.php' ?>

    <link rel="icon" type="image/png" href="images/coronavirus.png">

</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg nav_style p-3 navbar-dark" id="beranda">
        <a class="navbar-brand pl-5" href="#"><strong>COVID-19</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto pr-5 text-capitalize">
            <li class="nav-item active">
                <a class="nav-link" href="#beranda">Beranda <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#cegah">Pencegahan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#dunia">Dunia</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#prov">Provinsi</a>
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

<!-- covid terkini -->
    <section class="corona-terkini">
        <div class="mb-2">
            <h3 class="text-uppercase text-center">Covid-19 Terkini</h3>
        </div>

        <div class="d-flex justify-content-around align-items-center count_style">
            <div>
            <br><p><img src="images/img/indonesia.svg" style=" width: 80px;"></p>
                <h1 id="data-nama">0</h1>
                <br></br>
            </div> 
            <div>
                <p><small>Positif Terinfeksi Virus Corona</small></p>
                <h1 id="data-kasus" class="count">0</h1>
                <p><br>+ <small id="data-todayCases" class="count">0 </small> Hari ini</br></p>
            </div>
            <div>
                <p><small>Meninggal Dunia</small></p>
                <h1 id="data-mati" class="count">0</h1>
                <p><br>+ <small id="data-todayDeaths" class="count">0 </small> Hari ini</br></p>
            </div>
            <div>
                <p><small>Sembuh dari Virus Corona</small></p>
                <h1 id="data-sembuh" class="count">0</h1>
                <p><br></br></p>
            </div>
            <div>
                <p><small>Menjalani Perawatan</small></p>
                <h1 id="data-rawat" class="count">0</h1>
                <p><br></br></p>
            </div>
        </div>

    </section>

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

    <!-- update corona virus dunia -->
    <?php 
        $data = file_get_contents('https://api.covid19api.com/summary');
        $dataDunia = json_decode($data,true);


        $totalconfirmed =  $dataDunia['Global']['TotalConfirmed'];
        $totaldeaths =  $dataDunia['Global']['TotalDeaths'];
        $totalrecovered =  $dataDunia['Global']['TotalRecovered'];
        $newconfirmed = $dataDunia['Global']['NewConfirmed'];
        $newdeaths =  $dataDunia['Global']['NewDeaths'];
        $newrecovered = $dataDunia['Global']['NewRecovered'];

    ?>
    <div class="container-fluid pt-5 pb-5 pl-5 pr-5" id="dunia">
            <div class="section-header text-center mb-5 mt-5">
                <h1>Covid-19 Berdasarkan Dunia</h1>
            </div>

            <div class="d-flex justify-content-around align-items-center count_style">
            <div>
            <br><p><img src="images/coronavirus.png" style=" width: 80px;"></p>
                <h1>Dunia</h1>
                <br></br>
            </div> 
            <div>
                <p><small>Positif Terinfeksi Virus Corona</small></p>
                <h1 class="count"><?php echo $totalconfirmed; ?></h1>
                <p><br>+ <small class="count"><?php echo $newconfirmed; ?> </small> Hari ini</br></p>
            </div>
            <div>
                <p><small>Meninggal Dunia</small></p>
                <h1 id="data-matiDunia" class="count"><?php echo $totaldeaths; ?></h1>
                <p><br>+ <small id="data-baruMatiDunia" class="count"><?php echo $newdeaths; ?> </small> Hari ini</br></p>
            </div>
            <div>
                <p><small>Sembuh dari Virus Corona</small></p>
                <h1 id="data-sembuhDunia" class="count"><?php echo $totalrecovered; ?></h1>
                <p><br>+ <small id="data-baruSembuhDunia" class="count"><?php echo $newrecovered; ?> </small> Hari ini</br></p>
            </div>
        </div>
        
            <div class="table-responsive pl-5 pr-5">
                <table class="table table-bordered table-striped">
                <tr class="text-center">
                        <th>No</th>
                        <th>Negara</th>
                        <th>Positif</th>
                        <th>Sembuh</th>
                        <th>Meninggal</th>
                        <th>Dirawat</th>
                    </tr>

                        <?php 
                        $data = file_get_contents('https://api.kawalcorona.com/');
                        $coronalive = json_decode($data, true);
                        ?>

                        <?php 
                            $no = 1;
                            foreach($coronalive as $datacorona) :
                        ?>
                        <tr>
                        <td class="text-center"><?php echo $no++ ?></td>
                        <td><?php echo $datacorona['attributes']['Country_Region'] ?></td>
                        <td class="text-center"><?php echo $datacorona['attributes']['Confirmed'] ?></td>
                        <td class="text-center"><?php echo $datacorona['attributes']['Recovered'] ?></td>
                        <td class="text-center"><?php echo $datacorona['attributes']['Deaths'] ?></td>
                        <td class="text-center"><?php echo $datacorona['attributes']['Active'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                </table>
            </div>
    </div>

    <!-- update corona virus provinsi -->
    <div class="container-fluid sub-section pt-5 pb-5 pl-5 pr-5" id="prov">
            <div class="section-header text-center mb-5 mt-5">
                <h1>Covid-19 Berdasarkan Provinsi </h1>
            </div>

            <div class="table-responsive pl-5 pr-5">
                <table class="table table-bordered table-striped">
                    <tr class="text-center">
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
                        <td class="text-center"><?php echo $no++ ?></td>
                        <td><?php echo $datacorona['attributes']['Provinsi'] ?></td>
                        <td class="text-center"><?php echo $datacorona['attributes']['Kasus_Posi'] ?></td>
                        <td class="text-center"><?php echo $datacorona['attributes']['Kasus_Semb'] ?></td>
                        <td class="text-center"><?php echo $datacorona['attributes']['Kasus_Meni'] ?></td>
                        </tr>

                        <?php endforeach; ?>
                </table>
            </div>
    </div>
<!-- Contact us -->
    <!-- <div class="container-fluid pt-5 pb-5" id="layanan">
            <div class="section-header text-center mb-5 mt-5">
                <h1>Layanan Virus Corona</h1>
            </div>

            <div class="container">
                <div class="col-lg-8 offset-lg-2 col-12 mt-5">
                <form method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Username" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email address" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <input type="number" class="form-control" name="telp" placeholder="Telephone" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="pesan" rows="5" placeholder="Masukan pesan anda"></textarea>
                    </div>
                    <div align="right">
                    <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>
                </div>
            </div>
        </div> -->
        <?php 

        include 'db.php';
        if(isset($_POST['submit'])){

            $username = $_POST['username'];
            $email    = $_POST['email'];
            $telp    = $_POST['telp'];
            $pesan    = $_POST['pesan'];

            $insert = "INSERT INTO layanan (username, email, telp, pesan) 
            VALUES('$username','$email','$telp','$pesan') ";

            $query = mysqli_query($conn, $insert);

            if($conn) {
                ?>
                <script>
                    alert("Memasukan Data Berhasil");
                </script>
                <?php
            }else{
                ?>
                <script>
                    alert("Memasukan Data Gagal");
                </script>
                <?php
            }
        }
        ?>

<!-- top cursor -->
    <div class="container scrolltop float-right pr-5">
        <i class="fa fa-arrow-up" onclick="topFunction()" id="myBTN"></i>
    </div>
<!-- Footer -->
    <footer class="mt-5">
        <div class="footer-style text-white text-center container-fluid">
            <p>Copyright by Ade Setiawan <?php echo date('Y') ?>.</p>
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

        $(document).ready(function(){

        dataDunia(); 
        dataNegara();

        setInterval(function(){
        dataDunia();
        dataNegara();
        }, 3000);

        function dataDunia(){
            $.ajax({
                url : 'https://coronavirus-19-api.herokuapp.com/all',
                success : function(data){
                    try{
                        var json = data;
                        var kasus = data.cases;
                        var mati = data.deaths;
                        var sembuh = data.recovered;

                        $('#data-kasusDunia').html(kasus);
                        $('#data-matiDunia').html(mati);
                        $('#data-sembuhDunia').html(sembuh);

                    }catch{

                        alert('Errorr');
                    }
                }
            });
        } 

        function dataNegara(){
            $.ajax({
                url : 'https://coronavirus-19-api.herokuapp.com/countries',
                success : function(data){
                    try{
                        var json = data;
                        var html = [];
                            if (json.length>0) {
                            var i;
                            for(i=0; i < json.length; i++){
                                var dataNegara = json[i];
                                var namaNegara = dataNegara.country;
                                    if (namaNegara==='Indonesia') {
                                        var kasus = dataNegara.cases;
                                        var todayCases = dataNegara.todayCases;
                                        var mati = dataNegara.deaths;
                                        var todayDeaths = dataNegara.todayDeaths;
                                        var sembuh = dataNegara.recovered;
                                        var rawat = dataNegara.active;

                                        $('#data-nama').html(namaNegara);
                                        $('#data-kasus').html(kasus);
                                        $('#data-todayCases').html(todayCases);
                                        $('#data-mati').html(mati);
                                        $('#data-todayDeaths').html(todayDeaths);
                                        $('#data-sembuh').html(sembuh);
                                        $('#data-rawat').html(rawat);
                        }
                    }
            }
        }catch{
            alert('Errorr');
        }
        }
        });
        } 
});

            
</script>
</body>
</html>
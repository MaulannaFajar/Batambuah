<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kadwa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/kategori.css">
    <link rel="stylesheet" href="aos/aos.css">
    <title>About || Batambuah</title>
    <link rel="shortcut icon" href="icon.png">
</head>
<body>
    <div class="preloader">
      <div class="loading">
        <div class="spinner-border text-danger" role="status">
            <span class="sr-only">Loading...</span>
        </div>
      </div>
    </div>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="#" id="navbar-brand" data-aos="fade-right" data-aos-delay="1500" data-aos-duration="1000">
                <img src="icon.png" alt="" id="icon_utama" class="d-inline-block align-text-top icon_utama">
                Batambuah
            </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
            <li class="nav-item" data-aos="fade-up" data-aos-delay="1700" data-aos-duration="1000">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item" data-aos="fade-up" data-aos-delay="1900" data-aos-duration="1000">
                <a class="nav-link" href="kategori.php">Kategori</a>
              </li>
              <li class="nav-item" data-aos="fade-up" data-aos-delay="2100" data-aos-duration="1000">
                <a class="nav-link active" href="about.php">About</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <svg viewBox="0 0 1440 262" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 160H40C80 160 160 160 240 186.7C320 213 400 267 480 261.3C560 256 640 192 720 176C800 160 880 192 960 208C1040 224 1120 224 1200 213.3C1280 203 1360 181 1400 170.7L1440 160V0H1400C1360 0 1280 0 1200 0C1120 0 1040 0 960 0C880 0 800 0 720 0C640 0 560 0 480 0C400 0 320 0 240 0C160 0 80 0 40 0H0V160Z" fill="#4A0404"/>
    </svg>
    <!-- END NAVBAR -->
    
    <!-- ABOUT -->
    <div class="container area_kuliner">
        <p class="title_kategori" data-aos="fade-up" data-aos-delay="1500" data-aos-duration="1000">About Us</p>
        <hr data-aos="fade-up" data-aos-delay="1500" data-aos-duration="1000">
        <p class="desc_us" data-aos="fade-up" data-aos-delay="1700" data-aos-duration="1000">Batambuah merupakan sebuah website kuliner yang menampilkan mengenai kuliner khas kota Bukittinggi. Website ini menampilkan 4 Kategori kuliner khas Kota Bukittinggi yaitu Kerupuk, Jajanan, Makanan Berat, dan Minuman khas.</p>
        <p class="desc_us" data-aos="fade-up" data-aos-delay="1900" data-aos-duration="1000">Tim kami beranggotakan 13 orang mahasiswa jurusan Teknik Komputer Fakultas Teknologi Informasi Universitas Andalas.</p>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#4A0404" fill-opacity="1" d="M0,224L30,202.7C60,181,120,139,180,154.7C240,171,300,245,360,245.3C420,245,480,171,540,144C600,117,660,139,720,160C780,181,840,203,900,229.3C960,256,1020,288,1080,261.3C1140,235,1200,149,1260,138.7C1320,128,1380,192,1410,224L1440,256L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
    <div class="container-fluid" id="area_team">
        <div class="container">
        <p id="our_text" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">Our Team</p>
        <div class="row align-items-center">
            <div class="col-md-5">
                <div class="row justify-content-start align-items-center" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
                    <div class="col-6">
                        <img class="our_foto" src="foto/Pak Budi.jpg" alt="">
                    </div>
                    <div class="col-6">
                        <p class="text_kiri">Dosen Pengampu</p>
                        <p class="text_kiri">Budi Rahmadya M.Eng</p>
                        <p class="text_kiri">NIP: 198112222008121004</p>
                    </div>
                </div>
                <div class="row justify-content-end align-items-center" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                    <div class="col-6">
                        <p class="text_kanan">Dedi Hermanto</p>
                        <p class="text_kanan">1811513016</p>
                    </div>
                    <div class="col-6">
                        <img class="our_foto" src="foto/Dedi.png" alt="">
                    </div>
                </div>
                <div class="row justify-content-start align-items-center" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
                    <div class="col-6">
                        <img class="our_foto" src="foto/padli.jpg" alt="">
                    </div>
                    <div class="col-6">
                        <p class="text_kiri">Fadly Putra Fisnata</p>
                        <p class="text_kiri">1811511014</p>
                    </div>
                </div>
                <div class="row justify-content-end align-items-center" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                    <div class="col-6">
                        <p class="text_kanan">Pungky Irlan Hidayat</p>
                        <p class="text_kanan">1811512032</p>
                    </div>
                    <div class="col-6">
                        <img class="our_foto" src="foto/Dayat.jpeg" alt="">
                    </div>
                </div>
                <div class="row justify-content-start align-items-center" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
                    <div class="col-6">
                        <img class="our_foto" src="foto/shalsa.jpeg" alt="">
                    </div>
                    <div class="col-6">
                        <p class="text_kiri">Shalsabilla Syaqila</p>
                        <p class="text_kiri">1811511020</p>
                    </div>
                </div>
                <div class="row justify-content-end align-items-center" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                    <div class="col-6">
                        <p class="text_kanan">Vonny Rahmadani</p>
                        <p class="text_kanan">1811511025</p>
                    </div>
                    <div class="col-6">
                        <img class="our_foto" src="foto/vonny.jpg" alt="">
                    </div>
                </div>
                <div class="row justify-content-start align-items-center" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
                    <div class="col-6">
                        <img class="our_foto" src="foto/tesa.jpg" alt="">
                    </div>
                    <div class="col-6">
                        <p class="text_kiri">Tesa Ananda Syafri</p>
                        <p class="text_kiri">1811512010</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <hr id="pembatas">
            </div>
            <div class="col-md-5">
                <div class="row justify-content-end align-items-center" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                    <div class="col-6">
                        <p class="text_kanan">Aldalina Marlina</p>
                        <p class="text_kanan">1811511003</p>
                    </div>
                    <div class="col-6">
                        <img class="our_foto" src="foto/Aldalina.jpeg" alt="">
                    </div>
                </div>
                <div class="row justify-content-start align-items-center" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
                    <div class="col-6">
                        <img class="our_foto" src="foto/fajar.JPG" alt="">
                    </div>
                    <div class="col-6">
                        <p class="text_kiri">Fajar Maulana</p>
                        <p class="text_kiri">1811513014</p>
                    </div>
                </div>
                <div class="row justify-content-end align-items-center" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                    <div class="col-6">
                        <p class="text_kanan">Femi Nabila</p>
                        <p class="text_kanan">1811511002</p>
                    </div>
                    <div class="col-6">
                        <img class="our_foto" src="foto/Femi.jpg" alt="">
                    </div>
                </div>
                <div class="row justify-content-start align-items-center" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
                    <div class="col-6">
                        <img class="our_foto" src="foto/ara.jpeg" alt="">
                    </div>
                    <div class="col-6">
                        <p class="text_kiri">Rahmadatul Fitri</p>
                        <p class="text_kiri">1811511016</p>
                    </div>
                </div>
                <div class="row justify-content-end align-items-center" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                    <div class="col-6">
                        <p class="text_kanan">Sherina Aulia Mufita Toza</p>
                        <p class="text_kanan">1811512006</p>
                    </div>
                    <div class="col-6">
                        <img class="our_foto" src="foto/sherin.jpeg" alt="">
                    </div>
                </div>
                <div class="row justify-content-start align-items-center" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
                    <div class="col-6">
                        <img class="our_foto" src="foto/dedek.jpeg" alt="">
                    </div>
                    <div class="col-6">
                        <p class="text_kiri">Vony Natasya</p>
                        <p class="text_kiri">1811512003</p>
                    </div>
                </div>
                <div class="row justify-content-end align-items-center" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                    <div class="col-6">
                        <p class="text_kanan">Yuni Anggraini</p>
                        <p class="text_kanan">1811511010</p>
                    </div>
                    <div class="col-6">
                        <img class="our_foto" src="foto/Yuni.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <svg viewBox="0 0 1440 262" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 160H40C80 160 160 160 240 186.7C320 213 400 267 480 261.3C560 256 640 192 720 176C800 160 880 192 960 208C1040 224 1120 224 1200 213.3C1280 203 1360 181 1400 170.7L1440 160V0H1400C1360 0 1280 0 1200 0C1120 0 1040 0 960 0C880 0 800 0 720 0C640 0 560 0 480 0C400 0 320 0 240 0C160 0 80 0 40 0H0V160Z" fill="#4A0404"/>
    </svg>
    <!-- END ABOUT -->

    <img id="rmh_gadang" src="foto/rm-gadang.jpg" alt="">

    <!-- FOOTER -->
    <svg id="gelombang_footer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#4A0404" fill-opacity="1" d="M0,224L30,202.7C60,181,120,139,180,154.7C240,171,300,245,360,245.3C420,245,480,171,540,144C600,117,660,139,720,160C780,181,840,203,900,229.3C960,256,1020,288,1080,261.3C1140,235,1200,149,1260,138.7C1320,128,1380,192,1410,224L1440,256L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
    <div class="container-fluid" id="footer">
        <div class="row" style="background-color: #4A0404;">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <p class="mt-4 ml-5" id="judul_foot" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">batambuah</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <ul class="list ml-5">
                            <li class="sub_foot" data-aos="fade-right" data-aos-delay="400" data-aos-duration="1000">Contact Us</li>
                            <li class="mt-3" data-aos="fade-right" data-aos-delay="600" data-aos-duration="1000"><img src="icon1/wa.png" alt=""> +6281234567890</li>
                            <li class="mt-3" data-aos="fade-right" data-aos-delay="800" data-aos-duration="1000"><img src="icon1/ig.png" alt=""> @batambuah.id</li>
                            <li class="mt-3" data-aos="fade-right" data-aos-delay="1000" data-aos-duration="1000"><img src="icon1/gmail.png" alt=""> batambuah.id@gmail.com</li>
                            <li class="mt-3" data-aos="fade-right" data-aos-delay="1200" data-aos-duration="1000"><img src="icon1/tiktok.png" alt=""> @batambuah.id</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <p class="sub_foot mt-5" data-aos="fade-left" data-aos-delay="400" data-aos-duration="1000">Our Office Location</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249.331813974487!2d100.46078950166701!3d-0.9154848105494368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b7963ede35cf%3A0x10ce49f24233a8ae!2sSekretariat%20Himpunan%20Mahasiswa%20Sistem%20Komputer%20Universitas%20Andalas!5e0!3m2!1sid!2sid!4v1620946394542!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" data-aos="fade-right" data-aos-delay="600" data-aos-duration="1000"></iframe>
            </div>
        </div>
        <div class="row" style="background-color: #250303;">
            <div class="col-md-12">
                <p id="copyright">Copyright &copy; 2021 Batambuah</p>
            </div>
        </div>
    </div>
    <!-- END FOOTER -->

    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="jquery2.js"></script>
    <script src="aos/aos.js"></script>
    <script src="main.js"></script>
</body>
</html>
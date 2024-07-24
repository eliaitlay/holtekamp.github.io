<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets') ?>/user/css/materialize.min.css"  media="screen,projection"/>

      <!-- my css -->
      <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets') ?>/user/css/style.css">

      <style type="text/css">
        .parallax-container{
          height: 400px;
        }

        .active{
          background-color: #B8860B;
          color: #fff;
        }

        .clients h3{
          text-shadow: 2px 2px 4px rgba(0,0,0,1);
        }

        .warna{
          background-color: #DAA520;
        }

        .kontak .content {
            background-color: white; /* Ubah dengan path gambar latar belakang Anda */
            background-size: cover;
            background-position: center;
            padding: 50px 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }

        .kontak .card {
            flex: 1 1 calc(25% - 40px); /* 4 cards per row with 20px gap */
            box-sizing: border-box;
            text-align: center;
            position: relative;
        }

        .kontak .img-card img {
            width: 80px;
            height: auto;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .kontak .img-card img:hover {
            transform: scale(1.1);
        }

        .contact-detail {
            display: none;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: absolute;
            bottom: -70px; /* Adjust position based on your design */
            left: 50%;
            transform: translateX(-50%);
            width: calc(100% - 20px);
            box-sizing: border-box;
        }
/* Style untuk slider */
.slider {
  position: relative;
  height: 100vh; /* Sesuaikan tinggi slider dengan layar */
  overflow: hidden;
}

.slides {
  list-style: none;
  margin: 0;
  padding: 0;
  width: 300%;
  height: 100%;
  display: flex;
  animation: slide 15s infinite;
}

.slides li {
  width: 100%;
  height: 100%;
  flex: 1;
  position: relative;
}

.slides img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.caption {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: white;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
}

.caption h2, .caption h4, .caption h5 {
  margin: 0;
  padding: 0.5em;
}

@keyframes slide {
  0% { margin-left: 0; }
  20% { margin-left: 0; }
  25% { margin-left: -100%; }
  45% { margin-left: -100%; }
  50% { margin-left: -200%; }
  70% { margin-left: -200%; }
  75% { margin-left: 0; }
  100% { margin-left: 0; }
}

/* Tambahan untuk tampilan responsif */
@media (max-width: 768px) {
  .caption h2 {
    font-size: 1.5em;
  }
  
  .caption h4, .caption h5 {
    font-size: 1em;
  }
}
      

.about .content {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    align-self: start;
}

.about .col-left,
.about .col-right {
    flex: 1;
    padding: 20px;
}

.about .img-card img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(144, 111, 5, 0.1);
}

.about .col-right h3 {
    font-size: 28px;
    margin-bottom: 15px;
    color: #6f5c24;
}

.about .col-right p {
    text-align: justify;
    margin-bottom: 20px;
    line-height: 1.6;
    font-size: 16px;
}

.vision-mission {
    background-color: #dbdbd8;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.vision-mission h3 {
    font-size: 24px;
    margin-bottom: 15px;
    color: #333;
}

.vision h4,
.mission h4 {
    font-size: 20px;
    margin-bottom: 10px;
    color: #6f5c24;
}

.mission ul {
    list-style-type: disc;
    margin-left: 20px;
}

.mission li {
    margin-bottom: 10px;
    line-height: 1.6;
    font-size: 16px;
}

/* CSS untuk bagian berita */
.berita {
    padding: 50px 0;
}

.berita .container {
    max-width: 1200px;
    margin: 0 auto;
}

.berita h3 {
    font-size: 2.5rem;
    margin-bottom: 40px;
    font-weight: 300;
}

.berita .berita-item {
    background: #fff;
    padding: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.berita .berita-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
}

.berita .berita-item img {
    width: 100%;
    height: auto;
    margin-bottom: 15px;
}

.berita .berita-item h5 {
    font-size: 1.8rem;
    margin-bottom: 15px;
    color: #333;
    cursor: pointer;
}

@media (max-width: 992px) {
    .berita h3 {
        font-size: 2rem;
    }

    .berita .berita-item {
        margin-bottom: 20px;
    }

    .berita .berita-item h5 {
        font-size: 1.5rem;
    }

    .berita .berita-item img {
        height: auto;
    }
}


        section {
            padding: 2rem 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        h2.section-title {
            text-align: center;
            margin-bottom: 2rem;
        }
        h3 {
            color: #333;
            margin-bottom: 1rem;
        }
        p {
            color: #555;
            line-height: 1.6;
        }
        .content {
            display: flex;
            flex-wrap: wrap;
        }
        .col-left, .col-right {
            flex: 1;
            padding: 1rem;
        }
        .col-left {
            display: flex;
            flex-direction: column;
        }
        .img-card {
            background: white;
            margin-bottom: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 1rem;
            text-align: center;
        }
        .img-card img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .vision-mission {
            background: white;
            padding: 1rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .vision-mission h5 {
            color: #2F4F4F;
            text-align: center;
        }
        .vision-mission ul {
            list-style: none;
            padding: 0;
        }
        .vision-mission ul li {
            margin-bottom: 0.5rem;
        }



        .brand-logo img {
            height: 50px;
            margin-right: 10px;
        }
        .brand-logo {
            display: flex;
            align-items: center;
        }
        .sidenav {
            width: 250px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        nav.warna {
            background-color: rgb(255,0,0);
        }
        nav .logo img {
            height: 50px;
            margin-right: 10px;
        }
        nav .brand-logo {
            display: flex;
            align-items: center;
            padding-left: 10px; /* Tambahkan padding kiri */
        }
        .sidenav {
            width: 250px;
        }
        .sidenav .brand-logo img {
            height: 50px;
            margin-right: 10px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }


        footer {
            background-color: rgb(255,0,0);
        }

      </style>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <title><?php echo $title; ?></title>
    </head>

    <body id="home" class="scrollspy">

      <!-- navbar -->
      <div class="navbar-fixed">
        <nav class="warna">
          <div class="logo">
            <div class="container">
              <div class="nav-wrapper">
                <div class="text-darken-3">
                <?php foreach($identitas as $idn) : ?>
                  <a href="" class="brand-logo"><img src="assets/user/img/logo/logo.png">
                    <?php echo $idn->judul_website; ?>
                  </a>
                <?php endforeach; ?>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                <li><a class="list" href="#home">Beranda</a></li>
                  <li><a class="list" href="#about">Tentang</a></li>
                  <li><a class="list" href="#kelembagaan">Kelembagaan</a></li>
                  <li><a class="list" href="#fasilitas">Fasilitas</a></li>
                  <li><a class="list" href="#sistem">Kegiatan</a></li>
                  <li><a class="list" href="#berita">Berita</a></li>
                  <li><a class="list" href="#contact">Kontak</a></li>
                  <li><a href="<?php echo base_url('login'); ?>">Login</a></li>
                </ul>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>

      <!-- sidenav mobile nav-->
      <ul class="sidenav" id="mobile-nav">
        <li><a href="#about">Tentang</a></li>
        <li><a href="#kelembagaan">Kelembagaan</a></li>
        <li><a href="#fasilitas">Fasilitas</a></li>
        <li><a href="#sistem">Kegiatan</a></li>
        <li><a href="#berita">Berita</a></li>
        <li><a href="#contact">Kontak</a></li>
        <li><a href="<?php echo base_url('login'); ?>">Login</a></li>
      </ul>

<!-- ini adalah slider -->
<div class="slider">
  <ul class="slides">
    <li>
      <img src="<?php echo base_url('assets') ?>/user/img/slider/bg4.png"> 
      <div class="caption center-align">
        <h4><b>SELAMAT DATANG di KAMPUNG HOLTEKAMP</b></h4>
        <h5 class="light grey-text text-lighten-3"><i>Distrik Muara Tami - Kota Jayapura - Provinsi Papua</i></h5>
      </div>
    </li> 
    <!-- <li>
      <img src="<?php echo base_url('assets') ?>/user/img/slider/img2.png"> 
      <div class="caption center-align">
      <h4><b>SELAMAT DATANG di KAMPUNG HOLTEKAMP</b></h4>
        <h5 class="light grey-text text-lighten-3"><i>Distrik Muara Tami - Kota Jayapura - Provinsi Papua</i></h5>
      </div>
    </li>
    <li>
      <img src="<?php echo base_url('assets') ?>/user/img/slider/img3.jpg"> 
      <div class="caption center-align">
      <h4><b>SELAMAT DATANG di KAMPUNG HOLTEKAMP</b></h4>
      <h5 class="light grey-text text-lighten-3"><i>Distrik Muara Tami - Kota Jayapura - Provinsi Papua</i></h5>
      </div>
    </li> -->
  </ul>
</div>

<!-- awal berita -->
<section id="berita" class="berita scrollspy">
    <div class="container">
        <h3 class="light center grey-text text-darken-3">Berita Kampung Holtekamp</h3>
        <hr />
        <div class="row">
            <div class="col m6 s12">
                <div class="berita-item">
                    <img src="<?php echo base_url('assets') ?>/user/img/portfolio/berita1.png" class="responsive-img materialboxed modal-trigger" data-target="modal1">
                    <h5 class="modal-trigger" data-target="modal1">Program Pembangunan Kampung Holtekamp Maju</h5>
                </div>
            </div>
            <div class="col m6 s12">
                <div class="berita-item">
                    <img src="<?php echo base_url('assets') ?>/user/img/portfolio/berita2.png" class="responsive-img materialboxed modal-trigger" data-target="modal2">
                    <h5 class="modal-trigger" data-target="modal2">Festival Budaya Budaya Kampung Holtekamp</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col m6 s12">
                <div class="berita-item">
                    <img src="<?php echo base_url('assets') ?>/user/img/portfolio/pantai3.jpg" class="responsive-img materialboxed modal-trigger" data-target="modal3">
                    <h5 class="modal-trigger" data-target="modal3">Holtekamp Beach Jayapura Papua</h5>
                </div>
            </div>
            <div class="col m6 s12">
                <div class="berita-item">
                    <img src="<?php echo base_url('assets') ?>/user/img/portfolio/img4.png" class="responsive-img materialboxed modal-trigger" data-target="modal4">
                    <h5 class="modal-trigger" data-target="modal4">Kukerta Angkatan xx Serah Terima Di Kampung Holtekamp</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modals -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Menuju Kampung Modern, Holtekamp Kampung Terbaik di Kota Jayapura</h4>
        <p><b>Jayapura, Teraspapua.com </b> Pemerintah kota Jayapura menilai, Kampung Holtekamp Distrik Muara Tami, merupakan kampung terbaik dari 13 Kampung yang ada di kota ini.<br>
Penjabat (Pj) Walikota Jayapura, Dr. Frans Pekey, M.Si menyebutkan, dari laporan yang disampaikan oleh Kepala Pemerintahan Kampung (KPK), serta pengamatan Pemkot selama ini, Kampung Holtekamp kini menuju ke arah Kampung yang Modern dan terbaik di kota Jayapura.
</p>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
</div>

<div id="modal2" class="modal">
    <div class="modal-content">
        <h4>Festival Budaya Kampung Holtekamp 2024</h4>
        <p>Festival budaya tahunan kembali digelar dengan menampilkan berbagai seni dan budaya lokal. Acara ini bertujuan untuk melestarikan tradisi dan meningkatkan pariwisata Kampung Holtekamp Kota Jayapura Papua.</p>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
</div>

<div id="modal3" class="modal">
    <div class="modal-content">
        <h4>Wisata Papua: Pesona Pantai Holtekamp di Kota Jayapura</h4>
        <p>Pantai Holtekamp adalah salah satu pantai dari beberapa pantai yang terkenal di kota Jayapura,, Pantai ini sering di kunjungi para wisatawan dengan suguhan pemandangan indah ke arah lautan Pacific. <br> Untuk mencapai Pantai Holtekamp, pengunjung bisa menempuh perjalanan sekitar 45 menit dari pusat Kota Jayapura.
</p>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
</div>

<div id="modal4" class="modal">
    <div class="modal-content">
        <h4>Pelatihan Dalam Pengembangan Web  Pemerintah Kampung Holtekamp</h4>
        <p>Pengembangan Web kampung dalam Penyelenggaraan Pemerintahan di kampung Holtekamp, Distrik Muara Tami Kota Jayapura</p>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
</div>
<!-- akhir berita -->


    
<!-- awal about -->
<section id="about" class="about">
        <div class="container">
            <h2 class="section-title">Tentang Kampung Holtekamp</h2>
            <hr />
            <div class="content">
                <div class="col-left">
                    <div class="img-card">
                        <h4>Struktur Organisasi</h4>
                        <img src="img/pemerintah.png" alt="Struktur Pemerintah" />
                    </div>
                    <div class="img-card">
                        <h4>Bamuskam</h4>
                        <img src="img/bamuskam.png" alt="Struktur Bamuskam" />
                    </div>
                </div>
                <div class="col-right">
                    <h3>Sejarah Kampung Holtekamp</h3>
                    <p>Kampung Holtekamp berasal dari 2 (dua) kata yaitu : Hol yang berarti Teluk dan Tekang yaitu berasal dari nama orang Cina (pedagang) yang pertama kali datang dan tinggal di kampung Holtekamp, sehingga terbentuk nama Holtekang. Kemudian pada tahun berikutnya masuk sebuah perusahaan Fund We yang pada saat itu datang dan mengelolah kayu sehingga pada waktu itu membuat satu base camp lalu nama Holtekang diubah menjadi Holtekamp.</p>
                    <p>Kemudian pada tahun 1990 Kampung Holtekamp secara administrasi masih bergabung dengan Desa Nafri, dimana pada saat itu Holtekamp masih menjadi RW yang dipimpin oleh Bapak Hengki Semra dan Ketua RT pada saat itu adalah Bapak Yairus Bisay. Kampung Holtekamp menjadi Desa Definitif pada tahun 1991 hasil pemekaran dari Desa Nafri Kecamatan Abepura dan langsung dipimpin oleh Kepala Desa Pertama yaitu Bapak Hengki Semra dengan masa jabatan 8 tahun yaitu 1991 s/d 1996. Kemudian setelah masa kepemimpinan Kepala Desa Pertama berakhir lalu diganti oleh Kepala Desa Kedua yaitu Bapak Maklon Drunyi pada tahun 1996-2002. Pada Tahun 2002 diadakan Pemilihan Kepala Kampung yang Ketiga dan pada saat itu yang terpilih sebagai Kepala Kampung yaitu Bapak Husein, Beliau menjabat Sebagai Kepala Kampung Holtekamp dari tahun 2002-2008. Kemudian dilakukan lagi pemilihan Kepala Kampung yang keempat dan pada saat itu Bapak Husein terpilih kembali untuk menjabat sebagai Kepala Kampung Holtekamp untuk periode 2010-2016 dan Bapak Husain terpilih kembali menjadi Kepala Kampung untuk Periode 2016-2021. Pemilihan Kepala Kampung Holtekamp untuk Periode 2022-2028 Bapak Abraham Merauje terpilih sebagai Kepala Kampung.</p>
                    <div class="vision-mission">
                        <h5><b><i>Visi dan Misi Kampung Holtekamp</i></b></h5>
                        <div class="vision">
                            <p><b>Visi</b></p>
                            <h6><b>GOTONG ROYONG MEMBANGUN KAMPUNG HOLTEKAMP YANG JUJUR, SEHAT, BERDAYA SAING, MAJU, MANDIRI, DAN SEJAHTERA.</b></h6>
                        </div>
                        <div class="mission">
                            <p><b>Misi</b></p>
                            <ul>
                                <li>
                                    <p><b>1. Mewujudkan Pemerintah Kampung Yang Jujur dan Berwibawa Dengan Mengambil Keputusan Yang Cepat dan Tepat. </b><br>  Mengedepankan Kejujuran Musyawarah, Mufakat Dalam Kehidupan Sehari – Hari Dengan Pemerintah Dan Masyarakat Kampung Holtekamp.</p>
                                </li>
                                <li>
                                  <p><b>2. Mewujudkan Pemerintah Kampung Yang Jujur dan Berwibawa Dengan Mengambil Keputusan Yang Cepat dan Tepat. </b></p>
                                  <p><b>3. Mewujudkan Pemerintah Kampung Yang Jujur dan Berwibawa Dengan Mengambil Keputusan Yang Cepat dan Tepat. </b></p>
                                  <p><b>4. Mewujudkan Pemerintah Kampung Yang Jujur dan Berwibawa Dengan Mengambil Keputusan Yang Cepat dan Tepat. </b></p>
                                  <p><b>4. Mewujudkan Pemerintah Kampung Yang Jujur dan Berwibawa Dengan Mengambil Keputusan Yang Cepat dan Tepat. </b></p>
                                  <p><b>5. Mewujudkan Pemerintah Kampung Yang Jujur dan Berwibawa Dengan Mengambil Keputusan Yang Cepat dan Tepat. </b></p>
                                </li>
                                <li><h5>6. Membangun kota yang bersih, indah, aman, dan nyaman.</h5></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir about -->

      <!-- services -->
      <section id="fasilitas" class="yellow services gray lighten-3 scrollspy">
        <div class="container">
          <div class="row">
            <div class="clients">
              <h3 class="light center grey-text white-text">Fasilitas Kampung Holtekamp</h3>
              <hr />
            </div>
            <?php foreach($fasilitas as $row) { ?>
            <div class="col m6 s12">
              <div class="card-panel center">
                <img style="border-radius: 10%;" src="<?php echo base_url('assets/user/img/portfolio/'.$row->gambar) ?>" class="responsive-img materialboxed">
                <h5><?php echo $row->judul; ?></h5>
                <p>
                  
                </p>
              </div>
            </div>
            <?php } ?>
          </div>
          <div class="row">
            <?php foreach($fasilitas as $fs) { ?>
            <div class="text-darken-3">
              <div class="col m6">
                <h5><?php echo $fs->judul; ?></h5>
                <article>
                <p align="justify">
                  <?php echo $fs->isi; ?>
                </p>
                </article>
                <br>
              </div>

            </div>
            <?php } ?>
          </div>
        </div>
      </section>

      <!-- sistem -->
      <section id="sistem" class="contact grey lighten-3 scrollspy">
        <div class="container">
          <h3 class="center light grey-text text-darken-3">Kegiatan Kampung Holtekamp</h3>
          <hr />
          <div class="row">
              <?php foreach($kegiatan as $row) { ?>
              <div class="col m4 s12">
                  <div class="card-panel center">
                    <img style="border-radius: 10%;" src="<?php echo base_url('assets/user/img/'.$row->gambar) ?>" class="responsive-img materialboxed">
                    <h5><?php echo $row->judul; ?></h5>
                    <p>
                      <?php echo $row->isi; ?>
                    </p>
                  </div>
              </div>
              <?php } ?>
          </div>
        </div>
      </section>

        <!-- kelembagaan -->
      <section id="kelembagaan" class="kelembagaan scrollspy">
    <div class="container">
        <h3 class="light center grey-text text-darken-3"><b>Kelembagaan Kampung Holtekamp</b></h3>
        <hr />
        <div class="content">
            <ul>
                <li>1. Pemerintah Kampung</li>
                <li>2. Badan Musyawarah Kampung (BAMUSKAM)</li>
                <li>3. Badan Usaha Milik Kampung (BUMKAMP)</li>
                <li>4. PKK</li>
                <li>5. Karang Taruna</li>
                <li>6. PAUD Sumber Rezeki</li>
                <li>7. PAUD Getsemani</li>
                <li>8. SD.N. Holtekamp</li>
                <li>9. SMK Karya Gemilang</li>
                <li>10. Puskesmas Pembantu</li>
                <li>11. Pos Yandu Teratai</li>
                <li>12. Pos Yandu Wamsar</li>
                <li>13. Pos Yandu Lestari</li>
                <li>14. Gereja GKI Getsemani</li>
                <li>15. Gereja GKI Oraet Labora</li>
                <li>16. Gereja GPdI Almasih</li>
                <li>17. Gereja GPdP Sion</li>
                <li>18. Gereja GKPMI Anugrah</li>
                <li>19. Masjid Miptahuljannah</li>
                <li>20. Yayasan Hidayatulah</li>
                <li>21. PAUD / PKBM</li>
                <li>22. Pemuda Kampung</li>
                <li>23. Lembaga Adat</li>
                <li>24. Petani Tambak</li>
                <li>25. Kelompok Nener</li>
                <li>26. Kelompok Kerajinan Tangan</li>
                <li>27. Wahana Kesejahteraan Sosial Berbasis Masyarakat (WKSBM)</li>
                <li>28. KUD Palong</li>
                <li>29. Kelompok Pengolah Olahan Ikan Bandeng</li>
                <li>30. Kelompok Budidaya Rumput Laut</li>
                <li>31. Kelompok Sadar Wisata (Pokdarwis)</li>
                <li>32. Kelompok Gapoktan Pantai Indah</li>
                <li>33. Forum Kemitraan Perpolisian Masyarakat (FKPM)</li>
            </ul>
        </div>
    </div>
</section>


      

      <!-- contact -->
      <section id="contact" class="contact grey lighten-3 scrollspy">
        <div class="container">
          <h3 class="center light grey-text text-darken-3">Kontak</h3>
          <hr />
          <div class="row">
            <div class="col m5 s12">
              <div class="card-panel yellow darken-3 center white-text">
                <i class="material-icons medium">email</i>
                <h3>Kontak</h3>
              </div>
              <?php foreach($identitas as $idn) : ?>
              <ul class="collection with-header">
                <li class="collection-header"><h4>Alamat</h4></li>
                <li class="collection-item"><?php echo $idn->judul_website; ?></li>
                <li class="collection-item"><?php echo $idn->alamat; ?></li>
                <li class="collection-item"><?php echo $idn->provinsi; ?></li>
                <li class="collection-item">Phone : <?php echo $idn->no_telepon; ?></li>
              </ul>
              <?php endforeach; ?>
            </div>

            <div class="col m7 s12">
              <form method="post" action="<?php echo base_url('user/message'); ?>">
                <div class=" card-panel">
                  <div class="input-field">
                    <input id="name" type="text" name="nama" required >
                    <label for="name">Nama</label>
                  </div>
                  <div class="input-field">
                    <input id="email" type="email" name="email" class="validate">
                    <label for="email">Email</label>
                  </div>
                  <div class="input-field">
                    <input id="phone" type="text" name="no_telepon">
                    <label for="phone">Nomor Telepon</label>
                  </div>
                  <div class="input-field">
                    <textarea name="pesan" id="message" class="materialize-textarea"></textarea>
                    <label for="message">Pesan</label>
                  </div>

                  <button class="btn warna text-darken-2" type="submit">Kirim</button>
                </div>
              </form>
<!-- awal kontak -->
<section id="kontak" class="kontak" style="background-color: antiquewhite;">
    <div class="title">
        <!-- <h2 class="section-title">Hubungi Kami</h2>
        <hr />
    </div>
    <p>Terima kasih sudah berkunjung ke halaman web kami, jika ada kritik, saran atau konfirmasi kami melalui:</p> -->
    <div class="content">
        <div class="card">
            <div class="img-card">
                <img src="img/facebook.ico" alt="facebook Icon" onclick="showContactDetail('facebook')">
            </div>
            <div class="contact-detail" id="facebook">
                <p>Facebook: <a href="https://www.facebook.com/pemerintahdistrikabepura/" target="_blank">Fecebook</a></p>
            </div>
        </div>
        <div class="card">
            <div class="img-card">
                <img src="img/instagram.ico" alt="Instagram Icon" onclick="showContactDetail('instagram')">
            </div>
            <div class="contact-detail" id="instagram">
                <p>Instagram: <a href="https://instagram.com/laycha86" target="_blank">@laycha86</a></p>
            </div>
        </div>
        <div class="card">
            <div class="img-card">
                <img src="img/whatsapp.ico" alt="WhatsApp Icon" onclick="showContactDetail('whatsapp')">
            </div>
            <div class="contact-detail" id="whatsapp">
                <p>WhatsApp: <a href="https://wa.me/6281245595011" target="_blank">Chat Kami</a></p>
            </div>
        </div>
        <!-- <div class="card">
            <div class="img-card">
                <img src="img/gmail.ico" alt="Gmail Icon" onclick="showContactDetail('email')">
            </div>
            <div class="contact-detail" id="email">
                <p>Email: <a href="mailto:itlayelia@gmail.com" target="_blank">itlayelia@gmail.com</a></p>
            </div>
        </div>
    </div> -->
</section>
<!-- akhir kontak -->

            </div>
          </div>
        </div>
      </section>


      <!-- footer -->
      <footer class="darken-3 white-text center">
      <strong>Copyright &copy; KKN USTJ Kelompok 10. 2024/2025</strong>
      </footer>

      <!-- JAVASCRIPT -->

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="<?php echo base_url('assets') ?>/user/js/materialize.min.js"></script>

      <!-- sidenav -->
      <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);
      

      //slider
    
        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
          duration : 400,
          interval : 5000
        });

        const paralax = document.querySelectorAll('.parallax');
        M.Parallax.init(paralax);

        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);

        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll, {
          scrollOffset: 50
        });

      </script>
      <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
            <script type="text/javascript">
          $(document).ready(function(){
                $('ul li a').click(function(){
                  $('li a').removeClass("active");
                  $(this).addClass("active");
              });
          });
      </script>

    <!-- JavaScript -->
    <script>
        function showContactDetail(id) {
            const detail = document.getElementById(id);
            const isVisible = detail.style.display === 'block';
            const allDetails = document.querySelectorAll('.contact-detail');
            
            allDetails.forEach(detail => detail.style.display = 'none');
            
            if (!isVisible) {
                detail.style.display = 'block';
            } else {
                detail.style.display = 'none';
            }
        }
    </script>

    
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const elems = document.querySelectorAll('.materialboxed');
            M.Materialbox.init(elems);
        });
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const elems = document.querySelectorAll('.materialboxed');
            M.Materialbox.init(elems);
        });

        document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
});

    </script>

    </body>
</html>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets') ?>/user/css/materialize.min.css"  media="screen,projection"/>

      <!-- my css -->
      <link type="text/css" rel="stylesheet" href="style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body id="home" class="scrollspy">

<!-- navbar -->
<div class="navbar-fixed">
  <nav class="warna">
    <div class="container">
      <div class="nav-wrapper">
        <?php foreach($identitas as $idn) : ?>
          <a href="#" class="brand-logo">
            <img src="assets/user/img/logo/logo.png" alt="Logo">
            <span class="site-title"><?php echo $idn->judul_website; ?></span>
          </a>
        <?php endforeach; ?>
        <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a class="list" href="#home">Beranda</a></li>
          <li>
            <a class="dropdown-trigger" href="#!" data-target="dropdown1">Profile<i class="material-icons right">arrow_drop_down</i></a>
          </li>
          <li>
            <a class="dropdown-trigger" href="#!" data-target="dropdown2">Fasilitas<i class="material-icons right">arrow_drop_down</i></a>
          </li>
          <!-- <li><a class="list" href="gallery">Gallery</a></li> -->
          <li><a class="list" href="#contact">Kontak</a></li>
          <li><a href="<?php echo base_url('login'); ?>">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
</div>

<!-- Dropdown Structure for Profile -->
<ul id="dropdown1" class="dropdown-content">
  <li><a class="list" href="#about">Tentang</a></li>
  <li><a class="list" href="#kelembagaan">Kelembagaan</a></li>
  <li><a class="list" href="#sistem">Informasi</a></li>
  <li><a href="datapenduduk.php">Demografi</a></li>
</ul>

<!-- Dropdown Structure for Fasilitas -->
<ul id="dropdown2" class="dropdown-content">
  <li><a class="list" href="#fasilitas">Kendaraan</a></li>
  <li><a class="list" href="kantor.php">Gedung</a></li>
  <li><a class="list" href="wisata.php">Wisata</a></li>
  <li><a class="list" href="pendidikan.php">Pendidikan</a></li>
  <li><a class="list" href="kesehatan.php">Kesehatan</a></li>
  <li><a class="list" href="peribadatan.php">Peribadatan</a></li>
  <li><a class="list" href="ekonomi.php">Perekonomian</a></li>
</ul>

<!-- Sidenav mobile nav-->
<ul class="sidenav" id="mobile-nav">
  <li><a href="#home">Beranda</a></li>
  <li>
    <a class="dropdown-trigger" href="#!" data-target="dropdown3">Profile<i class="material-icons right"></i></a>
  </li>
  <li>
    <a class="dropdown-trigger" href="#!" data-target="dropdown4">Fasilitas<i class="material-icons right"></i></a>
  </li>
  <li><a class="list" href="#gallery">Gallery</a></li>
  <li><a href="#contact">Kontak</a></li>
  <li><a href="<?php echo base_url('login'); ?>">Login</a></li>
</ul>

<!-- Dropdown Structure for Mobile Nav Profile -->
<ul id="dropdown3" class="dropdown-content">
  <li><a href="#about">Tentang</a></li>
  <li><a href="#sturuktur.html">Struktur</a></li>
  <li><a href="#kelembagaan">Kelembagaan</a></li>
  <li><a href="#sistem">Informasi</a></li>
  <li><a href="datapenduduk.php">Demografi</a></li>
</ul>

<!-- Dropdown Structure for Mobile Nav Fasilitas -->
<ul id="dropdown4" class="dropdown-content">
  <li><a href="#fasilitas">Kendaraan</a></li>
  <li><a class="list" href="kantor.php">Gedung</a></li>
  <li><a class="list" href="wisata.php">Wisata</a></li>
  <li><a class="list" href="pendidikan.php">Pendidikan</a></li>
  <li><a class="list" href="kesehatan.php">Kesehatan</a></li>
  <li><a class="list" href="peribadatan.php">Peribadatan</a></li>
  <li><a class="list" href="ekonomi.php">Perekonomian</a></li>
</ul>


<!-- Slider -->
<div class="slider">
        <ul class="slides">
            <li>
                <img src="<?php echo base_url('assets') ?>/user/img/slider/bg4.png" alt="Slide 1">
                <div class="caption center-align">
                    <h4><b>PEMERINTAH KOTA JAYAPURA KAMPUNG HOLTEKAMP</b></h4>
                    <h5 class="light grey-text text-lighten-3"><i>Distrik Muara Tami - Kota Jayapura - Provinsi Papua</i></h5>
                </div>
            </li>
            <li>
                <img src="<?php echo base_url('assets') ?>/user/img/slider/bgjm.jpg" alt="Slide 2">
                <div class="caption center-align">
                    <h4><b>SELAMAT DATANG di KAMPUNG HOLTEKAMP</b></h4>
                    <h5 class="light grey-text text-lighten-3"><i>Distrik Muara Tami - Kota Jayapura - Provinsi Papua</i></h5>
                </div>
            </li>
            <li>
                <img src="<?php echo base_url('assets') ?>/user/img/slider/bg1.jpg" alt="Slide 3">
                <div class="caption center-align">
                    <h4><b>KENALI KAMPUNG HOLTEKAMP</b></h4>
                    <h5 class="light grey-text text-lighten-3"><i>Temukan keindahan dan kekayaan budaya kami</i></h5>
                </div>
            </li>
        </ul>
    </div>

</body>

<!-- awal berita -->
<!-- <section id="berita" class="berita scrollspy">
    <div class="container">
        <h3 class="light center grey-text text-darken-3">Informasi Kampung Holtekamp</h3>
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

<! Modals -->
<!-- <div id="modal1" class="modal">
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
</div> --> 
<!-- akhir berita -->


<!-- about us -->
<section id="about" class="about scrollspy">
  <div class="container">
    <div class="row">
      
      <h3 class="center">Tentang Kampung Holtekamp</h3>
      <br>

      <?php foreach($about as $abt) : ?>
      <div class="col m12">
        <!-- Menambahkan judul dan gambar struktur organisasi Kampung Holtekamp -->
        <div class="center">
          <h5>Struktur Organisasi Kampung Holtekamp</h5>
          <br>
          <img src="<?php echo base_url('img/pemerintah.png'); ?>" alt="Struktur Organisasi Kampung Holtekamp" style="width: 100%; height: auto; margin-bottom: 20px;">
        </div>

        <br>

        <!-- Menambahkan judul dan gambar struktur organisasi Bamuskam -->
        <div class="center">
          <h5>Struktur Organisasi Bamuskam</h5>
          <br>
          <img src="<?php echo base_url('img/bamuskam.png'); ?>" alt="Struktur Organisasi Bamuskam" style="width: 100%; height: auto; margin-bottom: 20px;">
        </div>

        <h5>Sejarah</h5>
        <p align="justify">
          <?php echo $abt->about_us; ?>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col m6">
        <h5>Visi</h5>
        <p align="justify">
          <?php echo $abt->visi; ?>
        </p>
        
      </div>

      <div class="col m6">
        <h5>Misi</h5>
        <p align="justify">
          <?php echo $abt->misi; ?>
        </p>
      </div>
      <?php endforeach; ?>

    
    </div>
  </div>
</section>




      <!-- services -->
      <section id="fasilitas" class="yellow services gray lighten-3 scrollspy">
        <div class="container">
          <div class="row">
            <div class="clients">
              <h3 class="light center grey-text white-text">Kendaraan Umum</h3>
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
          <h3 class="center light grey-text text-darken-3">Informasi Kampung Holtekamp</h3>
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

<!-- Kelembagaan -->
<section id="kelembagaan" class="kelembagaan scrollspy">
    <div class="container">
        <h3 class="light center grey-text text-darken-3"><b>Kelembagaan Kampung Holtekamp</b></h3>
        <hr />
        <div class="content">
            <div class="table-container">
                <table class="highlight centered responsive-table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Lembaga</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><strong>Pemerintah Kampung</strong></td>
                            <td>Kepala Kampung dan Aparat Kampung</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><strong>Badan Musyawarah Kampung (BAMUSKAM)</strong></td>
                            <td>Lembaga yang mengawasi dan memberikan masukan kepada Pemerintah Kampung</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><strong>Badan Usaha Milik Kampung (BUMKAMP)</strong></td>
                            <td>Lembaga ekonomi yang mengelola usaha-usaha milik Kampung</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><strong>PKK</strong></td>
                            <td>Pemberdayaan dan kesejahteraan keluarga di Kampung</td>
                        </tr>
                    </tbody>
                </table>
            </div>
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
        <div class="card">
            <div class="img-card">
                <img src="img/gmail.ico" alt="Gmail Icon" onclick="showContactDetail('email')">
            </div>
            <div class="contact-detail" id="email">
                <p>Email: <a href="mailto:itlayelia@gmail.com" target="_blank">itlayelia@gmail.com</a></p>
            </div>
        </div>
    </div>
</section>
<!-- akhir kontak -->

            </div>
          </div>
        </div>
      </section>


      <!-- footer -->
      <footer class="dar-3 white-text center">
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
    <!-- JavaScript -->
  <script type="text/javascript" src="<?php echo base_url('assets') ?>/user/js/materialize.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Initialize Sidenav
      var elems = document.querySelectorAll('.sidenav');
      var instances = M.Sidenav.init(elems);

      // Initialize Materialboxed
      var materialboxed = document.querySelectorAll('.materialboxed');
      M.Materialbox.init(materialboxed);

      // Initialize Modals
      var modals = document.querySelectorAll('.modal');
      M.Modal.init(modals);

      // Initialize Dropdown
      var dropdowns = document.querySelectorAll('.dropdown-trigger');
      M.Dropdown.init(dropdowns);
    });
  </script>

  <!-- Initialize the dropdowns -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, {
      constrainWidth: false,
      hover: true,
      coverTrigger: false,
      alignment: 'right'
    });
  });
</script>

</body>
</html>
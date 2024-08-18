<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Foto Kampung Holtekamp</title>
    <link rel="stylesheet" href="gallery.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <a href="index.php" class="h2-icon" title="Kembali ke Halaman Utama">
                <i class="fas fa-home"></i>
            </a>
            <h2>Galeri Foto Kampung Holtekamp</h2>
            <nav>
                <ul>
                    <li><a href="index.php" class="nav-link">Kembali ke Beranda</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="gallery" class="gallery-section">
        <div class="container">
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="assets/user/img/gallery/img1.jpg" alt="Foto 1">
                </div>
                <div class="gallery-item">
                    <img src="assets/user/img/gallery/img2.jpg" alt="Foto 2">
                </div>
                <div class="gallery-item">
                    <img src="assets/user/img/gallery/img3.jpg" alt="Foto 3">
                </div>
                <div class="gallery-item">
                    <img src="assets/user/img/gallery/img4.jpg" alt="Foto 4">
                </div>
                <div class="gallery-item">
                    <img src="assets/user/img/gallery/img5.jpg" alt="Foto 5">
                </div>
                <div class="gallery-item">
                    <img src="assets/user/img/gallery/img6.jpg" alt="Foto 6">
                </div>
                <div class="gallery-item">
                    <img src="assets/user/img/gallery/img7.jpg" alt="Foto 7">
                </div>
                <div class="gallery-item">
                    <img src="assets/user/img/gallery/img8.jpg" alt="Foto 8">
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div id="modal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="modalImage">
        <div id="caption"></div>
    </div>

    <!-- Footer -->
    <footer class="dark-3 white-text center">
        <small>
            <strong>Copyright &copy; KKN USTJ Kelompok 10. 2024/2025</strong>
        </small>
    </footer>

    <!-- Script -->
    <script src="galeri.js"></script>
</body>
</html>

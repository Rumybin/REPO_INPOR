<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="<?= base_url('css/styles_coba.css'); ?>">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="logo">
            <img src="https://arrahmat-bjn.sch.id/wp-content/uploads/2024/09/logo_PPM-removebg-preview-1.png" alt="ARR LOGO">
        </div>
        <div class="logo-text">
            <h3>PPM AR-RAHMAT BOJONEGORO</h3>
        </div>
        <nav>
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="/jadwal">Jadwal</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Prestasi</a></li>
                <li><a href="#">Galeri</a></li>
                <li><a href="#">Kontak</a></li>

            </ul>
        </nav>
        <div class="login">
            <button>Login</button>
        </div>
    </header>

    <div class="main-content">

        <!-- Slideshow section -->
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="<?= base_url('images/ichi.png'); ?>" alt="Slide 1">
            </div>

            <div class="mySlides fade">
                <img src="<?= base_url('images/ni.png'); ?>" alt="Slide 2">
            </div>

            <div class="mySlides fade">
                <img src="<?= base_url('images/san.png'); ?>" alt="Slide 3">
            </div>
        </div>

        <!-- Dot indicators -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>

        <!-- Container for slideshow and boxes -->
        <div class="container">
            <!-- Large box -->
            <a href="/olim">
                <div class="box large-box">
                    <img src="/images/oliymm.png" alt="Olimpiad Image">
                    <div class="overlay-text">OLYMPIAD</div>
                </div>
            </a>

            <!-- Small boxes -->

            <div class="small-box-container">

                <div class="box small-box">
                    <a href="/sport">
                        <img src="<?= base_url('images/sporthead.jpeg'); ?>" alt="Alam Image">
                        <div class="overlay-text-small">SPORT</div>
                    </a>
                </div>

                <div class="box small-box">
                    <a href="/diniyah">
                        <img src="<?= base_url('images/diniyah.png '); ?>" alt="Olom Image">
                        <div class="overlay-text-small">DINIYAH</div>
                    </a>
                </div>
            </div>
        </div> <!-- Tutup container -->

    </div> <!-- Tutup main-content -->

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="logo">
                <img src="https://arrahmat-bjn.sch.id/wp-content/uploads/2024/09/logo_PPM-removebg-preview-1.png"
                    alt="Pondok Logo" height="100" style="object-fit: contain;">
            </div>
            <div class="social-icons">
                <a href="https://www.youtube.com/@ArRahmatOfficial" target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/4/42/YouTube_icon_%282013-2017%29.png" alt="YouTube Logo" width="40">
                </a>
                <a href="https://www.instagram.com/arrahmat_bjn/" target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram Logo" width="40">
                </a>
                <a href="https://wa.me/6289699792391" target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Logo" width="40">
                </a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>PPM ARRAHMAT 2024</p>
        </div>
    </footer>

    <!-- Memuat file JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="<?= base_url('js/slideshow.js'); ?>"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INI COBA</title>
    <link rel="stylesheet" href="<?= base_url('css/styles_coba.css'); ?>">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <header>
        <h1>INI COBA</h1>
    </header>

    <div class="main-content">
        <h2>INI EKSTRA</h2>

        <!-- Tombol lonjong -->
        <!-- Tombol Home, Jadwal, Berita di atas -->
    <div class="button-container">
        <a href="/">Home</a>
        <a href="/jadwal">Jadwal</a>
        <a href="/berita">Berita</a>
    </div>

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
                    <img src="/images/olim.png" alt="Olimpiad Image">
                    <div class="overlay-text">OLYMPIAD</div>
                </div>
            </a>

            <!-- Small boxes -->
            
            <div class="small-box-container">
           
                <div class="box small-box">
                <a href="/sport">
                    <img src="<?= base_url('images/alam.jpg'); ?>" alt="Alam Image">
                    <div class="overlay-text-small">SPORT</div>
                </a>
                </div>
            
                <div class="box small-box">
                <a href="/diniyah"></a>
                    <img src="<?= base_url('images/olom.jpg'); ?>" alt="Olom Image">
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
                <img src="<?= base_url('images/pondok.png'); ?>" alt="Pondok Logo">
            </div>
            <div class="social-icons">
                <a href="https://www.youtube.com/@ArRahmatOfficial" target="_blank">
                    <img src="<?= base_url('images/youtube.png'); ?>" alt="YouTube">
                </a>
                <a href="https://www.instagram.com/arrahmat_bjn/" target="_blank">
                    <img src="<?= base_url('images/instagram.png'); ?>" alt="Instagram">
                </a>
                <a href="https://wa.me/6289699792391" target="_blank">
                    <img src="<?= base_url('images/whatsapp.png'); ?>" alt="WhatsApp">
                </a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Torhuja © copyright 2024</p>
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diniyah</title>
    <!-- Menautkan CSS -->
    <link rel="stylesheet" href="css/stylesolimcoba.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

    <!-- Tombol Home, Jadwal, Berita di atas -->
    <header class="header">
        <div class="logo">
            <img src="images/pondok.png" alt="Logo">
        </div>
        <div class="logo-text">
            <h3>PPM AR-RAHMAT BOJONEGORO</h3>
        </div>
        <nav class="navbar">
            <a href="/">Home</a>
            <a href="/jadwal">Jadwal</a>
            <a href="/berita">Berita</a>
        </nav>
    </header>

    <section>
        <div class="back-tombol">
            <a href="javascript:history.back()" class="nav-link back-button">Back</a>
        </div>
        <div class="kotak">
            <div class="kotak2">
                <h0>
                </h0>
                <h1>Daftar Ekstrakurikuler Diniyah</h1>
                <div class="program-container">
                    <?php if (!empty($ekstra_madin)): ?>
                        <?php foreach ($ekstra_madin as $ekstra): ?>
                            <div class="program-box">
                                <a href="<?= base_url('/halaman' . esc($ekstra['Nama'])); ?>" style="text-decoration: none; color: inherit;">
                                    <img src="<?= base_url('images/' . esc($ekstra['gambar'])); ?>" alt="<?= esc($ekstra['Nama']); ?>" />
                                    <div class="content">
                                        <h2><?= esc($ekstra['Nama']); ?></h2>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="program-box">
                            <p>Tidak ada ekstrakurikuler olimpiade yang ditemukan.</p>
                        </div>
                    <?php endif; ?>
                </div>
                <h8>
                </h8>
            </div>
            <h9>
            </h9>
        </div>

    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-col">
            <h3>Services</h3>
            <ul>
                <li><a href="#">Email Marketing</a></li>
                <li><a href="#">Campaigns</a></li>
                <li><a href="#">Branding</a></li>
                <li><a href="#">Offline</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h3>About</h3>
            <ul>
                <li><a href="#">Our story</a></li>
                <li><a href="#">Benefits</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="#">Careers</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h3>Help</h3>
            <ul>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h3>Social</h3>
            <div class="social-icons">
                <a href="https://www.youtube.com/@ArRahmatOfficial"><i class="fab fa-instagram"></i></a>
                <a href="https://www.instagram.com/arrahmat_bjn"><i class="fab fa-youtube"></i></a>
                <a href="https://wa.me/6289699792391"><i class="fab fa-whatsapp"></i></a>
            </div>

        </div>
    </footer>

</body>

</html>
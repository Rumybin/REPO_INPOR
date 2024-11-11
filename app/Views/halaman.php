<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Ekstrakurikuler</title>
    <link rel="stylesheet" href="css/styleshalaman.css"> <!-- Tautan ke file CSS -->
</head>

<body>

    <!-- Tombol Navigasi di Atas -->
    <div class="navigation">
        <a href="/" class="nav-link">Home</a>
        <a href="/jadwal" class="nav-link">Jadwal</a>
        <a href="/berita" class="nav-link">Berita</a>
    </div>

    <!-- Konten Utama Halaman -->
    <section class="content-container">
        <h1 class="title"><?= $ekstra['Nama']; ?></h1>

        <!-- Gambar Ekstrakurikuler -->
        <img src="<?= base_url('images/' . esc($ekstra['gambar'])); ?>" alt="Ekstrakurikuler Image" class="activity-image">

        <!-- Deskripsi Ekstrakurikuler -->
        <div class="description">
            <p><?= $ekstra['des']; ?></p>
            <ul>
            </ul>
        </div>

        <!-- Tombol Navigasi Kembali dan Home -->
        <div class="button-container">
            <a href="javascript:history.back()" class="back-button">Back</a>
        </div>
    </section>

    <!-- Footer Halaman -->
    <footer>
        <div class="footer-content">
            <p>© 2024 Torhuja | All rights reserved.</p>
        </div>
    </footer>

</body>

</html>
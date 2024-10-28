<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Ekstrakurikuler Hari Ini</title>
    <link rel="stylesheet" href="<?= base_url('/css/jadwal.css'); ?>">
</head>
<body>
    <!-- Tombol Back -->
    <a href="<?= base_url('/'); ?>" class="back-button">Back</a>
    
    <div class="ekstra-hari-ini">
        <h1><?= esc($hari); ?></h1> <!-- Tampilkan nama hari saat ini -->
        <H1></H1>
        <?php if (!empty($ekstra_hari_ini)): ?>
            <div class="program-loop-container">
                <?php foreach ($ekstra_hari_ini as $ekstra): ?>
                    <div class="program-loop">
                        <h3><?= esc($ekstra['Nama']); ?></h3>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p>Tidak ada kegiatan ekstrakurikuler pada hari ini.</p>
        <?php endif; ?>
    </div>
</body>
</html>

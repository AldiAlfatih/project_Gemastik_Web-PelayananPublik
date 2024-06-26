<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>TRASH !SSUE</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="/assets/css/sedekah.css" rel="stylesheet">
</head>

<body class="index-page">

    <div class="sidebar" id="sidebar">
        <div class="top-section">
            TRASH !SSUE
        </div>
        <div class="middle-section">
            <a href="#" class="dashboard-nav-item active"><img src="https://img.icons8.com/?size=100&id=OXVih02dFZ53&format=png&color=000000" alt="Home Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                <span class="text" >Home</span></a>
            <a href="#" class="dashboard-nav-item"><img src="https://img.icons8.com/?size=100&id=tTos00QpPnCN&format=png&color=000000" alt="Leaderboard Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                <span class="text">Leaderboard</span></a>
            <div class='dashboard-nav-dropdown'>
                <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle">
                    <img src="https://img.icons8.com/?size=100&id=57721&format=png&color=000000" alt="Pelaporan Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                    <span class="text">Pelaporan</span>
                </a>
                <div class='dashboard-nav-dropdown-menu'>
                    <a href="#" class="dashboard-nav-dropdown-item">> Ajukan Laporan</a>
                    <a href="#" class="dashboard-nav-dropdown-item">> Cek Riwayat Laporan</a>
                </div>
            </div>
            <div class='dashboard-nav-dropdown'>
                <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle">
                    <img src="https://img.icons8.com/?size=100&id=6cdJEps4HrFl&format=png&color=000000" alt="Settings Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                    <span class="text">Pusat Informasi</span>
                </a>
                <div class='dashboard-nav-dropdown-menu'>
                    <a href="artikel" class="dashboard-nav-dropdown-item">> Artikel Edukasi</a>
                    <a href="video_edukasi" class="dashboard-nav-dropdown-item">> Video Edukasi</a>
                    <a href="lokasi_bank_sampah" class="dashboard-nav-dropdown-item">> Lokasi Bank Sampah</a>
                </div>
            </div>
            <a href="penukaran_poin" class="dashboard-nav-item">
                <img src="https://img.icons8.com/?size=100&id=p8J6hJXwEQQg&format=png&color=000000" alt="Poin Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                <span class="text">Penukaran Poin</span></a>
            <a href="sedekah_barang" class="dashboard-nav-item">
                <img src="https://img.icons8.com/?size=100&id=45617&format=png&color=000000" alt="Sedekah Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                <span class="text">Sedekah Barang</span></a>
        </div>
        <div class="bottom-section">
            <a href="#" class="dashboard-nav-item">
                <img src="https://img.icons8.com/?size=100&id=5SjCmls8VHtY&format=png&color=000000" alt="Settings Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                <span class="text">Settings</span>
            </a>
            <a href="#" class="dashboard-nav-item">
                <img src="https://img.icons8.com/?size=100&id=15249&format=png&color=000000" alt="Profile Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                <span class="text">Profile</span></a>
        </div>
    </div>

    <div class="hamburger" id="hamburger">
        <img src="https://img.icons8.com/?size=100&id=RPcB9NYY5FZq&format=png&color=000000" alt="Menu Icon" style="width: 24px; height: 24px; margin-right: 10px;">
    </div>

    <div class="main-content">
        <h1>Ingin menyumbangkan barang-barang anda yang tidak terpakai?</h1>

        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama-lengkap">Nama Lengkap</label>
                <input type="text" id="nama-lengkap" name="nama-lengkap" required>
            </div>
            <div class="form-group">
                <label for="nomor-telepon">Nomor Telepon</label>
                <input type="tel" id="nomor-telepon" name="nomor-telepon" required>
            </div>
            <div class="form-group">
                <label for="jenis-barang">Jenis Barang</label>
                <input type="text" id="jenis-barang" name="jenis-barang" required>
            </div>
            <div class="form-group">
                <label for="kuantitas-barang">Kuantitas Barang</label>
                <input type="number" id="kuantitas-barang" name="kuantitas-barang" required>
            </div>
            <div class="form-group">
                <label for="gambar-barang">Gambar Barang</label>
                <input type="file" id="gambar-barang" name="gambar-barang" accept="image/*" required>
            </div>
            <div class="form-group">
                <label for="metode-penyerahan">Metode Penyerahan Barang</label>
                <select id="metode-penyerahan" name="metode-penyerahan" required>
                    <option value="antar">Antar ke Kantor</option>
                    <option value="jemput">Barang Dijemput</option>
                </select>
            </div>
            <button type="submit">Kirim</button>
        </form>
    </div>

    <script>
        document.getElementById('hamburger').addEventListener('click', function() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('expanded');
            document.querySelector('.main-content').classList.toggle('expanded');
        });

        document.querySelectorAll('.dashboard-nav-dropdown-toggle').forEach(item => {
            item.addEventListener('click', function() {
                this.parentElement.classList.toggle('active');
            });
        });
    </script>

    <!-- Include Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Artikel Edukasi Sampah</title>
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
    <link href="/assets/css/bank_sampah.css" rel="stylesheet">
</head>

<body class="artikel-page">

    <div class="sidebar" id="sidebar">
        <div class="top-section">
            TRASH !SSUE
        </div>
        <div class="middle-section">
            <a href="/home" class="dashboard-nav-item">
            <a href="/home" class="dashboard-nav-item">
                <img src="https://img.icons8.com/?size=100&id=OXVih02dFZ53&format=png&color=000000" alt="Home Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                <span class="text">Home</span>
            </a>
            <a href="/akun/leaderboard" class="dashboard-nav-item">
                <img src="https://img.icons8.com/?size=100&id=tTos00QpPnCN&format=png&color=000000" alt="Leaderboard Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                <span class="text">Leaderboard</span>
            </a>
            <div class='dashboard-nav-dropdown'>
                <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle">
                    <img src="https://img.icons8.com/?size=100&id=57721&format=png&color=000000" alt="Pelaporan Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                    <span class="text">Pelaporan</span>
                </a>
                <div class='dashboard-nav-dropdown-menu'>
                    <a href="/pelaporan" class="dashboard-nav-dropdown-item">> Ajukan Laporan</a>
                    <a href="<?= base_url('/riwayat-laporan') ?>" class="dashboard-nav-dropdown-item">> Cek Riwayat Laporan</a>
                </div>
            </div>
            <div class='dashboard-nav-dropdown'>
                <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle active">
                    <img src="https://img.icons8.com/?size=100&id=6cdJEps4HrFl&format=png&color=000000" alt="Settings Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                    <span class="text">Pusat Informasi</span>
                </a>
                <div class='dashboard-nav-dropdown-menu'>
                    <a href="artikel" class="dashboard-nav-dropdown-item active">> Artikel Edukasi</a>
                    <a href="video_edukasi" class="dashboard-nav-dropdown-item">> Video Edukasi</a>
                    <a href="lokasi_bank_sampah" class="dashboard-nav-dropdown-item">> Lokasi Bank Sampah</a>
                </div>
            </div>
            <a href="penukaran_poin" class="dashboard-nav-item">
                <img src="https://img.icons8.com/?size=100&id=p8J6hJXwEQQg&format=png&color=000000" alt="Poin Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                <span class="text">Penukaran Poin</span></a>
            </a>
            <a href="sedekah_barang" class="dashboard-nav-item">
                <img src="https://img.icons8.com/?size=100&id=45617&format=png&color=000000" alt="Sedekah Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                <span class="text">Sedekah Barang</span></a>
            </a>
        </div>
        <div class="bottom-section">
            <a href="settings.php" class="dashboard-nav-item">
                <img src="https://img.icons8.com/?size=100&id=5SjCmls8VHtY&format=png&color=000000" alt="Settings Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                <span class="text">Settings</span>
            </a>
            <a href="profile.php" class="dashboard-nav-item">
                <img src="https://img.icons8.com/?size=100&id=15249&format=png&color=000000" alt="Profile Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                <span class="text">Profile</span></a>
        </div>
    </div>

    <div class="hamburger" id="hamburger">
        <img src="https://img.icons8.com/?size=100&id=RPcB9NYY5FZq&format=png&color=000000" alt="Menu Icon" style="width: 24px; height: 24px; margin-right: 10px;">
    </div>

    <div class="main-content">
    <h1>Lokasi Bank Sampah</h1>
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1019.5612924329824!2d119.64596455498117!3d-4.019544399938388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d9a6c8e0eb3221d%3A0x5f9502b83b1671c6!2sParepare%20TPA!5e0!3m2!1sen!2sid!4v1624692672007!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>


    <script>
        window.onload = function() {
            var sidebarState = localStorage.getItem('sidebarState');
            if (sidebarState === 'expanded') {
                document.getElementById('sidebar').classList.add('expanded');
                document.querySelector('.main-content').classList.add('expanded');
            }
        }
        
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

        // Fungsi pencarian artikel
        document.getElementById('search-bar').addEventListener('keyup', function() {
            var searchTerm = this.value.toLowerCase();
            var articles = document.querySelectorAll('.article');
            articles.forEach(function(article) {
                var title = article.querySelector('h2').innerText.toLowerCase();
                if (title.includes(searchTerm)) {
                    article.style.display = '';
                } else {
                    article.style.display = 'none';
                }
            });
        });
    </script>

    <!-- Include Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>

</html>

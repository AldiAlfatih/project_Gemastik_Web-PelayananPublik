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
    <link href="/assets/css/artikel.css" rel="stylesheet">
</head>

<body class="artikel-page">

    <div class="sidebar" id="sidebar">
        <div class="top-section">
            TRASH !SSUE
        </div>
        <div class="middle-section">
            <a href="/home" class="dashboard-nav-item">
                <img src="https://img.icons8.com/?size=100&id=OXVih02dFZ53&format=png&color=000000" alt="Home Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                <span class="text">Home</span>
            </a>
            <a href="leaakun/leaderboard" class="dashboard-nav-item">
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
    <h1>Semua Artikel Edukasi</h1>
    <div class="search-container">
        <div class="search-box">
            <input type="text" id="search-bar" placeholder="Cari artikel...">
            <button id="search-button"><img src="https://img.icons8.com/?size=100&id=59878&format=png&color=000000" alt="Search Icon"></button>
        </div>
    </div>
    <div id="articles">
        <!-- Contoh artikel -->
        <div class="article">
            <a href="https://www.kompas.com/tren/read/2024/06/25/193000765/perang-balon-berlanjut-kini-korut-kirimkan-hello-kitty-dan-cacing-ke-korsel" target="_blank">
                <div class="article-box">
                <img src="https://asset.kompas.com/crops/jNLNjCBTK38MNugqdxEVLvZS2hQ=/0x0:0x0/750x500/data/photo/2024/06/25/667a6da898c2d.jpg" alt="Thumbnail 1" class="thumbnail">
                    <div class="article-content">
                        <h2>Warga Buton Tengah Digegerkan Temuan Tulang Manusia di Tempat Sampah</h2>
                        <p class="date">25/06/2024, 14:20 WIB</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="article">
            <a href="https://makassar.kompas.com/read/2024/06/25/142018378/warga-buton-tengah-digegerkan-temuan-tulang-manusia-di-tempat-sampah" target="_blank">
                <div class="article-box">
                <img src="https://asset.kompas.com/crops/CQkeUst7tfnxWE_tEdEhlELDjpU=/0x59:1024x742/750x500/data/photo/2024/06/02/665c0b48e7179.jpg" alt="Thumbnail 1" class="thumbnail">
                    <div class="article-content">
                        <h2>Perang Balon Berlanjut, Kini Korut Kirimkan Hello Kitty dan Cacing ke Korsel</h2>
                        <p class="date">25/06/2024, 19:30 WIB</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="article">
            <a href="https://lestari.kompas.com/read/2024/06/25/210000886/garudafood-inisiasi-pengelolaan-sampah-organik-dengan-maggot-di-jatijajar" target="_blank">
                <div class="article-box">
                <img src="https://asset.kompas.com/crops/AqUa3ogccKwlyfob6oBhCh6dxmg=/154x0:3664x2340/750x500/data/photo/2024/06/25/667a9edf55a8d.jpeg" alt="Thumbnail 1" class="thumbnail">
                    <div class="article-content">
                        <h2>Garudafood Inisiasi Pengelolaan Sampah Organik dengan Maggot di Jatijajar Depok</h2>
                        <p class="date">25/06/2024, 21:00 WIB</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="article">
            <a href="https://yogyakarta.kompas.com/read/2024/06/25/115325978/pemkot-yogyakarta-janji-kuras-depo-sampah-selama-3-hari-ke-depan" target="_blank">
                <div class="article-box">
                <img src="https://asset.kompas.com/crops/NkljGxl8t-lJuUMCzkKUADzXDqc=/134x0:1147x675/750x500/data/photo/2024/06/22/66765807dd3a2.jpg" alt="Thumbnail 1" class="thumbnail">
                    <div class="article-content">
                        <h2>Pemkot Yogyakarta Janji Kuras Depo Sampah Selama 3 Hari ke Depan</h2>
                        <p class="date">25/06/2024, 11:53 WIB</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="article">
            <a href="https://yogyakarta.kompas.com/read/2024/06/25/113509378/soal-timbunan-5000-ton-sampah-di-yogyakarta-pemkot-sebelum-ada-tps3r" target="_blank">
                <div class="article-box">
                <img src="https://asset.kompas.com/crops/b2hRz6HsuI-e37OT9bl_ywtLuA0=/0x0:0x0/750x500/data/photo/2024/06/22/66765806a978a.jpg" alt="Thumbnail 1" class="thumbnail">
                    <div class="article-content">
                        <h2>Soal Timbunan 5.000 Ton Sampah di Yogyakarta, Pemkot: Sebelum Ada TPS3R</h2>
                        <p class="date">25/06/2024, 11:35 WIB</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="article">
            <a href="https://bandung.kompas.com/read/2024/06/25/080038378/ditutup-tempat-pembuangan-sampah-liar-di-sungai-jamblang-cirebon" target="_blank">
                <div class="article-box">
                <img src="https://asset.kompas.com/crops/pyyiWzEJRZXTFqyyas9OCJkxt6A=/0x0:799x533/750x500/data/photo/2024/06/25/667a1685dc731.jpg" alt="Thumbnail 1" class="thumbnail">
                    <div class="article-content">
                        <h2>Ditutup, Tempat Pembuangan Sampah Liar di Sungai Jamblang Cirebon</h2>
                        <p class="date">25/06/2024, 08:00 WIB</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- Tambahkan artikel lain di sini -->
    </div>
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

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
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet">

    <!-- Main CSS File -->
    <link href="/assets/css/main.css" rel="stylesheet">

    <style>
    /* Additional CSS for dropdown functionality */
    .dashboard-nav-dropdown-menu {
        display: none;
        flex-direction: column;
    }

    .dashboard-nav-dropdown.active .dashboard-nav-dropdown-menu {
        display: flex;
    }
    </style>

</head>

<body class="index-page">

    <header id="header" class="header fixed-top">
        <div class='dashboard'>
            <div class="dashboard-nav">
                <header><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a><a href="#"
                        class="brand-logo"><i class="fas fa-anchor"></i> <span>TRASH !SSUE</span></a></header>
                <nav class="dashboard-nav-list">
                    <a href="#" class="dashboard-nav-item active"><i class="fas fa-home"></i>Home </a>
                    <a href="#" class="dashboard-nav-item"><i class="fas fa-tachometer-alt"></i>Leaderboard</a>
                    <div class='dashboard-nav-dropdown'>
                        <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle">
                            <i class="fas fa-file-upload"></i> Pelaporan
                        </a>
                        <div class='dashboard-nav-dropdown-menu'>
                            <a href="#" class="dashboard-nav-dropdown-item">> Ajukan Laporan</a>
                            <a href="#" class="dashboard-nav-dropdown-item">> Cek Riwayat Laporan</a>
                        </div>
                    </div>
                    <div class='dashboard-nav-dropdown'>
                        <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle">
                            <i class="fas fa-photo-video"></i> Pusat Informasi
                        </a>
                        <div class='dashboard-nav-dropdown-menu'>
                            <a href="#" class="dashboard-nav-dropdown-item">> Artikel Edukasi</a>
                            <a href="#" class="dashboard-nav-dropdown-item">> Video Edukasi</a>
                            <a href="#" class="dashboard-nav-dropdown-item">> Lokasi Bank Sampah</a>
                        </div>
                    </div>
                    <a href="#" class="dashboard-nav-item"><i class="fas fa-cogs"></i> Penukaran Poin </a>
                    <a href="#" class="dashboard-nav-item"><i class="fas fa-cogs"></i> Sedekah Barang </a>
                    <div class="nav-item-divider"></div>
                    <a href="#" class="dashboard-nav-item"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAACt0lEQVR4nO2ZyWsUQRSHv0TccIwSF0QQo6J4cozg0bOIKLhEPKgIgh4EL6IGl4OiCYoIin+B0SDoSbx40bOCKxKzaDyIGAxuidtc0lLwBh5FD93TU93Van9QMNPU79Wr6ldVr6qhoKDAJZOBDqAX6Ae+Az+Bo/wFbAGGgCCkvFf1pgFLyRHNwPkajptSAY5L3dnAO3l+gZxgOz8iDpeBGVbdslX3IjkIG+3QTaAUoblmadbjiSlWzBvnm2LoJgG3le6tTP7M6bDCJmrkNa2iCaRswgO9yoHqJK2H00pvbGXOgHJgVQJ9u9K/wAPjyoF6wqfKLKX/iucO2MtlHFqU/hseGGowhFYrvUk7MueGcuBEAv0ppe/BAzutZdSERFxM3Y9Kvx0PmM1nWDlxPabObHa3lG7Q10Zm2GqlBQtjjLx2fgLYTE6SuWeSXhhmSspcktIuMa/DxpQucsIiFQbzrTQhrEyI883kkHURzg/mIWyiss0rQJ9sduPyu0dWG28TtqDgf2cu0C3ngIpaUZYDc4BHEatPVKlIUtcl9pyyBvhQo2FzabWtQeeDkHsks/k5G/lazus38DCFTrS66EC3Mjoqa3mSE1gUJbkoGFXtnXNhuD/jtHeHau+VC4O/lcF6cv6ktKj2frkw+EUZbCObxDBQ86Bh7iuDx0ifw6q9ey4M7lcGPwHLSI/FcsVSbW+3C6NTgdfK6EBKnWizbjpeSttOKFv3QGZe7HJ0IGmSkf6s7JuvOmtxzEYxrDeb59IRc4Ssl+nAHuBxSEqxgZQwl1FvQnZN07E7wEnp6EpggXxO0pj/B4G71hsNpAynMfJh6/QZYCxmSmDqHRDtpRp1fgBnE77JxMwDOoGnMTrxRDRXred9wBG5CPDKCmAvcBl4IOnHiOykY7IUIyN8CNgHLPHsc0HBP8Ef4HVUieDjQhUAAAAASUVORK5CYII="
                            alt="Profile Icon" style="width: 24px; height: 24px; margin-right: 10px;">Profile </a>
                    <a href="#" class="dashboard-nav-item"><img
                            src="https://img.icons8.com/?size=100&id=ybfklM8wYSX1&format=png&color=000000"
                            alt="Profile Icon" style="width: 24px; height:24px; margin-right: 10px; ">Settings
                    </a>
                    <a href="#" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Keluar </a>
                </nav>
            </div>
            <div class='dashboard-app'>
                <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
                </header>
                <div class='dashboard-content'>
                    <div class='container'>
                        <div class='card'>
                            <div class='card-header'>
                                <h1>Selamat Datang Aldi</h1>
                            </div>
                            <div class='card-body'>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main JS File -->
        <script src="public/assets/js/main.js"></script>
        <script>
        document.querySelectorAll('.dashboard-nav-dropdown-toggle').forEach(item => {
            item.addEventListener('click', function() {
                this.parentElement.classList.toggle('active');
            });
        });
        </script>
</body>

</html>
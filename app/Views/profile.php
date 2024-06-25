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
    <link href="/assets/css/main.css" rel="stylesheet">
    <link href="/assets/css/profilestyle.css" rel="stylesheet">
</head>

<body class="index-page">

    <div class="sidebar" id="sidebar">
        <div class="top-section">
            TRASH !SSUE
        </div>
        <div class="middle-section">
            <a href="#" class="dashboard-nav-item active"><img src="https://img.icons8.com/?size=100&id=OXVih02dFZ53&format=png&color=000000" alt="Home Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                <span class="text">Home</span></a>
            <a href="#" class="dashboard-nav-item"><img src="https://img.icons8.com/?size=100&id=tTos00QpPnCN&format=png&color=000000" alt="Leaderboard Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                <span class="text">Leaderboard</span></a>
            <div class='dashboard-nav-dropdown'>
                <a href="pelaporan.php" class="dashboard-nav-item dashboard-nav-dropdown-toggle">
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
                    <a href="#" class="dashboard-nav-dropdown-item">> Artikel Edukasi</a>
                    <a href="#" class="dashboard-nav-dropdown-item">> Video Edukasi</a>
                    <a href="#" class="dashboard-nav-dropdown-item">> Lokasi Bank Sampah</a>
                </div>
            </div>
            <a href="#" class="dashboard-nav-item">
                <img src="https://img.icons8.com/?size=100&id=p8J6hJXwEQQg&format=png&color=000000" alt="Poin Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                <span class="text">Penukaran Poin</span></a>
            <a href="#" class="dashboard-nav-item">
                <img src="https://img.icons8.com/?size=100&id=45617&format=png&color=000000" alt="Sedekah Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                <span class="text">Sedekah Barang</span></a>
        </div>
        <div class="bottom-section">
            <a href="#" class="dashboard-nav-item" id="profile-link">
                <img src="https://img.icons8.com/?size=100&id=15249&format=png&color=000000" alt="Profile Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                <span class="text">Profile</span></a>
        </div>
    </div>

    <div class="hamburger" id="hamburger">
        <img src="https://img.icons8.com/?size=100&id=RPcB9NYY5FZq&format=png&color=000000" alt="Menu Icon" style="width: 24px; height: 24px; margin-right: 10px;">
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

        document.getElementById('profile-link').addEventListener('click', function() {
            document.getElementById('main-content').innerHTML = `
                <div class="profile-container">
                    <h2>Profil Saya</h2>
                    <div id="profile-view">
                        <p><strong>Nama Lengkap:</strong> <span id="view-nama-lengkap">Nama Lengkap Pengguna</span></p>
                        <p><strong>Username:</strong> <span id="view-username">UsernamePengguna</span></p>
                        <p><strong>Tanggal Lahir:</strong> <span id="view-tanggal-lahir">Tanggal Lahir Pengguna</span></p>
                        <p><strong>Alamat:</strong> <span id="view-alamat">Alamat Pengguna</span></p>
                        <p><strong>No. Telpon:</strong> <span id="view-no-telpon">No Telpon Pengguna</span></p>
                        <p><strong>Total Poin Kontribusi:</strong> <span id="view-total-poin">Total Poin Pengguna</span></p>
                    </div>
                    <button id="edit-profile-btn">Edit Profil</button>
                </div>
            `;
            
            // Event listener untuk tombol Edit Profil
            document.getElementById('edit-profile-btn').addEventListener('click', function() {
                document.getElementById('main-content').innerHTML = `
                    <div class="form-container">
                        <h2>Edit Profil</h2>
                        <form id="edit-profile-form">
                            <label for="edit-nama-lengkap">Nama Lengkap:</label>
                            <input type="text" id="edit-nama-lengkap" name="edit-nama-lengkap" required>

                            <label for="edit-username">Username:</label>
                            <input type="text" id="edit-username" name="edit-username" required>

                            <label for="edit-tanggal-lahir">Tanggal Lahir:</label>
                            <input type="date" id="edit-tanggal-lahir" name="edit-tanggal-lahir" required>

                            <label for="edit-alamat">Alamat:</label>
                            <textarea id="edit-alamat" name="edit-alamat" required></textarea>

                            <label for="edit-no-telpon">No. Telpon:</label>
                            <input type="tel" id="edit-no-telpon" name="edit-no-telpon" pattern="[0-9]{10,12}" required>

                            <button type="submit">Simpan Perubahan</button>
                        </form>
                    </div>
                `;
                
                // Mengisi nilai awal dari form edit dengan data profil yang ada
                document.getElementById('edit-nama-lengkap').value = 'Nama Lengkap Pengguna';
                document.getElementById('edit-username').value = 'UsernamePengguna';
                document.getElementById('edit-tanggal-lahir').value = '2000-01-01';
                document.getElementById('edit-alamat').value = 'Alamat Pengguna';
                document.getElementById('edit-no-telpon').value = '08123456789';

                document.getElementById('edit-profile-form').addEventListener('submit', function(event) {
                    event.preventDefault();
                    // Simpan proses penyimpanan data ke backend di sini (harus diimplementasikan dengan server-side logic)
                    alert('Profil berhasil diperbarui!');
                });
            });
        });
    </script>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>

</html>

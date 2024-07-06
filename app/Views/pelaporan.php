<?php
    if (!session()->get('logged_in')) {
        return redirect()->to('/login');
    }
?>

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
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .report-form {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            border-radius: 8px;
            width: 800px;
        }

        .report-form h2 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: 500;
            color: #666;
            display: block;
            margin-bottom: 8px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-group textarea {
            resize: vertical;
        }

        .form-group button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            display: block;
            width: 100%;
            margin-top: 20px;
            justify-content: center;
        }

        .form-group button:hover {
            background-color: #45a049;
        }

        .form-group button:focus {
            outline: none;
        }

        .photo-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 10px;
        }

        .photo-grid div {
            position: relative;
            width: 100px;
            height: 100px;
            border: 2px dashed #ccc;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .photo-grid img {
            max-width: 100%;
            max-height: 100%;
            display: none;
        }

        .photo-grid input {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }
    </style>
</head>

<body class="index-page">

    <div class="sidebar" id="sidebar">
        <div class="top-section">
            TRASH !SSUE
        </div>
        <div class="middle-section">
            <a href="/home" class="dashboard-nav-item active"><img src="https://img.icons8.com/?size=100&id=OXVih02dFZ53&format=png&color=000000" alt="Home Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                <span class="text">Home</span></a>
            <a href="akun/leaderboard" class="dashboard-nav-item"><img src="https://img.icons8.com/?size=100&id=tTos00QpPnCN&format=png&color=000000" alt="Leaderboard Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                <span class="text">Leaderboard</span></a>
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
                <a href="#" class="dashboard-nav-item dashboard-nav-dropdown-toggle">
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
                <span class="text">Penukaran Poin</span>
            </a>
            <a href="sedekah_barang" class="dashboard-nav-item">
                <img src="https://img.icons8.com/?size=100&id=45617&format=png&color=000000" alt="Sedekah Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                <span class="text">Sedekah Barang</span>
            </a>
        </div>
        <div class="bottom-section">
            <!-- <a href="#" class="dashboard-nav-item">
                <img src="https://img.icons8.com/?size=100&id=5SjCmls8VHtY&format=png&color=000000" alt="Settings Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                <span class="text">Settings</span>
            </a> -->
            <a href="/settingProfil" class="dashboard-nav-item">
                <img src="https://img.icons8.com/?size=100&id=15249&format=png&color=000000" alt="Profile Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                <span class="text">Profile</span>
            </a>
        </div>
    </div>

    <div class="hamburger" id="hamburger">
        <img src="https://img.icons8.com/?size=100&id=RPcB9NYY5FZq&format=png&color=000000" alt="Menu Icon" style="width: 24px; height: 24px; margin-right: 10px;">
    </div>

    <div class="main-content">
        <!-- Form Pelaporan Sampah -->
        <div class="report-form">
            <h2>Ajukan Laporan Sampah</h2>
            <form action="/pelaporan/create" method="POST" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <div class="form-group">
                    <label for="title">Judul Masalah</label>    
                    <input type="text" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="description">Deskripsi Masalah</label>
                    <textarea id="description" name="description" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label for="location">Lokasi</label>
                    <input type="text" id="location" name="location" required>
                </div>
                <div class="form-group">
                <label for="photos">Bukti Foto (max 5)</label>
                    <div class="photo-grid">
                        <div>
                            <input type="file" id="photo1" name="photos[]" accept="image/*" required onchange="previewImage(event, 1)">
                            <img id="photoPreview1" src="#" alt="Preview">
                        </div>
                        <div>
                            <input type="file" id="photo2" name="photos[]" accept="image/*" onchange="previewImage(event, 2)">
                            <img id="photoPreview2" src="#" alt="Preview">
                        </div>
                        <div>
                            <input type="file" id="photo3" name="photos[]" accept="image/*" onchange="previewImage(event, 3)">
                            <img id="photoPreview3" src="#" alt="Preview">
                        </div>
                        <div>
                            <input type="file" id="photo4" name="photos[]" accept="image/*" onchange="previewImage(event, 4)">
                            <img id="photoPreview4" src="#" alt="Preview">
                        </div>
                        <div>
                            <input type="file" id="photo5" name="photos[]" accept="image/*" onchange="previewImage(event, 5)">
                            <img id="photoPreview5" src="#" alt="Preview">
                        </div>
                    </div>
                </div>
                <button type="submit">Kirim Laporan</button>
            </form>
        </div>
        <!-- <h1>Report Form</h1> -->

        <?php if(isset($success)): ?>
            <div style="color: green;">
                <?= $success ?>
            </div>
        <?php endif; ?>

        <?php if(isset($error)): ?>
            <div style="color: red;">
                <?= $error ?>
            </div>
        <?php endif; ?>

        <!-- <form action="/pelaporan/create" method="post" enctype="multipart/form-data">
            <div>
                <label for="title">Title</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div>
                <label for="description">Description</label>
                <textarea id="description" name="description" required></textarea>
            </div>
            <div>
                <label for="location">Location</label>
                <input type="text" id="location" name="location" required>
            </div>
            <div>
                <label for="photo">Photo</label>
                <input type="file" id="photo" name="photo" required>
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form> -->
    </div>

    <script>
        window.onload = function() {
            var sidebarState = localStorage.getItem('sidebarState');
            if (sidebarState === 'expanded') {
                document.getElementById('sidebar').classList.add('expanded');
                document.querySelector('.main-content').classList.add('expanded');
            }
        }
        document.getElementById('hamburger').addEventListener('click', function () {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('expanded');
            document.querySelector('.main-content').classList.toggle('expanded');
        });

        document.querySelectorAll('.dashboard-nav-dropdown-toggle').forEach(item => {
            item.addEventListener('click', function () {
                this.parentElement.classList.toggle('active');
            });
        });
        function previewImage(event, index) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('photoPreview' + index);
                output.src = reader.result;
                output.style.display = 'block';
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>

</html>

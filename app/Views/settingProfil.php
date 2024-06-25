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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .profile-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .profile-header .profile-info {
            display: flex;
            align-items: center;
        }

        .profile-header .profile-info img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-right: 20px;
        }

        .profile-header .profile-info .user-details {
            line-height: 1.5;
        }

        .profile-header .profile-info .user-details h2 {
            margin: 0;
            font-size: 24px;
            color: #333333;
        }

        .profile-header .profile-info .user-details p {
            margin: 5px 0;
            font-size: 16px;
            color: #666666;
        }

        .edit-profile-form {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .edit-profile-form h3 {
            margin-bottom: 20px;
            font-size: 20px;
            color: #333333;
        }

        .edit-profile-form .form-group {
            margin-bottom: 15px;
        }

        .edit-profile-form label {
            font-weight: bold;
            color: #555555;
        }

        .edit-profile-form input[type="text"],
        .edit-profile-form input[type="email"],
        .edit-profile-form select {
            width: 100%;
            padding: 8px;
            border: 1px solid #cccccc;
            border-radius: 4px;
        }

        .modal-content {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .modal-title {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333333;
        }

        .modal-body .form-group {
            margin-bottom: 15px;
        }

        .modal-body label {
            font-weight: bold;
            color: #555555;
        }

        .modal-body input[type="text"],
        .modal-body input[type="email"],
        .modal-body select {
            width: 100%;
            padding: 8px;
            border: 1px solid #cccccc;
            border-radius: 4px;
        }

        .modal-footer {
            justify-content: flex-start;
            border-top: none;
            padding-top: 0;
        }

        .modal-footer button {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .modal-footer button:hover {
            background-color: #0056b3;
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
            <a href="#" class="dashboard-nav-item"><img src="https://img.icons8.com/?size=100&id=tTos00QpPnCN&format=png&color=000000" alt="Leaderboard Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                <span class="text">Leaderboard</span></a>
            <div class='dashboard-nav-dropdown'>
                <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle">
                    <img src="https://img.icons8.com/?size=100&id=57721&format=png&color=000000" alt="Pelaporan Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                    <span class="text">Pelaporan</span>
                </a>
                <div class='dashboard-nav-dropdown-menu'>
                    <a href="#" class="dashboard-nav-dropdown-item">> Ajukan Laporan</a>
                    <a href="<?= base_url('/riwayat-laporan') ?>" class="dashboard-nav-dropdown-item">> Cek Riwayat Laporan</a>
                </div>
            </div>
            <div class='dashboard-nav-dropdown'>
                <a href="#" class="dashboard-nav-item dashboard-nav-dropdown-toggle">
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
                <span class="text">Penukaran Poin</span>
            </a>
            <a href="#" class="dashboard-nav-item">
                <img src="https://img.icons8.com/?size=100&id=45617&format=png&color=000000" alt="Sedekah Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                <span class="text">Sedekah Barang</span>
            </a>
        </div>
        <!-- <div class="bottom-section">
            <a href="#" class="dashboard-nav-item">
                <img src="https://img.icons8.com/?size=100&id=5SjCmls8VHtY&format=png&color=000000" alt="Settings Icon" style="width: 24px; height: 24px; margin-right: 10px;">
                <span class="text">Settings</span>
            </a> -->
        <a href="#" class="dashboard-nav-item">
            <img src="https://img.icons8.com/?size=100&id=15249&format=png&color=000000" alt="Profile Icon" style="width: 24px; height: 24px; margin-right: 10px;">
            <span class="text">Profile</span>
        </a>
    </div>
    </div>

    <div class="hamburger" id="hamburger">
        <img src="https://img.icons8.com/?size=100&id=RPcB9NYY5FZq&format=png&color=000000" alt="Menu Icon" style="width: 24px; height: 24px; margin-right: 10px;">
    </div>

    <div class="container">
        <div class="profile-header">
            <div class="profile-info">
                <?php if ($user) : ?>
                    <img src="https://via.placeholder.com/100" alt="Profile Picture">
                    <div class="user-details">
                        <h2><?= $user['username'] ?></h2>
                        <p>Email: <?= $user['email'] ?></p>
                        <p>No Telepon: <?= $user['no_telepon'] ?></p>
                        <p>Poin Kontribusi: <?= $user['poin_kontribusi'] ?></p>
                    </div>
                <?php else : ?>
                    <p>Belum ada data pengguna yang ditampilkan.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>



    <!-- Edit Profile Modal -->
    <div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProfileModalLabel">Edit Profil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php if (session()->getFlashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('success') ?>
                        </div>
                    <?php endif; ?>
                    <?php if (session()->getFlashdata('error')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>
                    <form action="/profile/update" method="post">
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" value="<?= old('email', $user['email'] ?? '') ?>">
                            <?php if (isset($validation) && $validation->hasError('email')) : ?>
                                <p class="text-danger"><?= $validation->getError('email') ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="phone">No Telepon:</label>
                            <input type="text" id="phone" name="phone" class="form-control" value="<?= old('phone', $user['no_telepon'] ?? '') ?>">
                        </div>
                        <div class="form-group">
                            <label for="gender">Jenis Kelamin:</label>
                            <select id="gender" name="gender" class="form-control">
                                <option value="male" <?= (isset($user['jenis_kelamin']) && $user['jenis_kelamin'] == 'male') ? 'selected' : '' ?>>Laki-laki</option>
                                <option value="female" <?= (isset($user['jenis_kelamin']) && $user['jenis_kelamin'] == 'female') ? 'selected' : '' ?>>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="province">Provinsi:</label>
                            <input type="text" id="province" name="province" class="form-control" value="<?= old('province', $user['provinsi'] ?? '') ?>">
                            <?php if (isset($validation) && $validation->hasError('province')) : ?>
                                <p class="text-danger"><?= $validation->getError('province') ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <label for="city">Kota:</label>
                            <input type="text" id="city" name="city" class="form-control" value="<?= old('city', $user['kota'] ?? '') ?>">
                            <?php if (isset($validation) && $validation->hasError('city')) : ?>
                                <p class="text-danger"><?= $validation->getError('city') ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <label for="district">Kecamatan:</label>
                            <input type="text" id="district" name="district" class="form-control" value="<?= old('district', $user['kecamatan'] ?? '') ?>">
                            <?php if (isset($validation) && $validation->hasError('district')) : ?>
                                <p class="text-danger"><?= $validation->getError('district') ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <label for="subdistrict">Kelurahan:</label>
                            <input type="text" id="subdistrict" name="subdistrict" class="form-control" value="<?= old('subdistrict', $user['kelurahan'] ?? '') ?>">
                            <?php if (isset($validation) && $validation->hasError('subdistrict')) : ?>
                                <p class="text-danger"><?= $validation->getError('subdistrict') ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- JavaScript Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
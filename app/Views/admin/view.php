<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Report</title>
    <link rel="stylesheet" href="/assets/css/admin.css">
</head>
<body>
    <h1 style="margin-left: 2.7rem">Detail Laporan</h1>

    <!-- konten -->
    <div class="container">
        <h2><?= $report['title'] ?></h2>
        <p><?= $report['description'] ?></p>

        <!-- gambar -->
        <h3>Gambar</h3>
        <div class="images">
            <?php foreach ($images as $image): ?>
                <img src="assets/uploads/<?= $image['photo'] ?>" alt="Gambar Laporan" style="max-width: 100%; height: auto;">
            <?php endforeach; ?>
        </div>

        <form action="/admin/accept/<?= $report['id'] ?>" method="post">
            <?= csrf_field() ?>
            <button type="submit">Terima</button>
        </form>

        <form action="/admin/reject/<?= $report['id'] ?>" method="post">
            <?= csrf_field() ?>
            <button type="submit">Tolak</button>
        </form>

        <a href="/admin">Kembali ke Dashboard</a>
    </div>
</body>
<script>
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
</html>

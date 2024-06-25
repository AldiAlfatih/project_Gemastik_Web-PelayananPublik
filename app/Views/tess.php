<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="stylelogin.css">
    <link href="/assets/css/stylelogin.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <form action="/login" method="POST" class="box">
                        <h1>TRASH !SSUE</h1>
                        <h3 class="masukkk">Masuk</h3>
                        <p class="text-muted">Tolong masukkan Username dan Katasandi</p>
                        <?php if(session()->get('error')): ?>
                            <div class="alert alert-danger">
                                <?= session()->get('error') ?>
                            </div>
                        <?php endif; ?>
                        <input type="email" name="email" placeholder="Email" required>
                        <input type="password" name="password" placeholder="Password" required>
                        <input type="submit" value="Login">
                        <a class="forgot text-muted" href="#">Lupa Kata Sandi?</a>
                        <a class="forgot text-muted" href="/register">Belum memiliki akun?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

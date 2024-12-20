<!-- <form action="?c=User&m=login_process" method="post">
    <label> Username:
        <input type="text" name="username" required>
    </label> <br>
    <label> Password:
        <input type="password" name="password" required>
    </label> <br>
    <input type="submit" value="Login">
</form> -->

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/wisata-kreatif-main/public/assets/logo.png">
    <title>Form Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .register-container {
            max-width: 500px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .form-header {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="register-container">
            <h2 class="form-header text-center">Form Login</h2>
            <form action="?c=User&m=login_process" method="post">
                <div class="form-group">
                    <label for="username">Nama Pengguna</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan nama pengguna">
                </div>
                <div class="form-group">
                    <label for="password">Kata Sandi</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan kata sandi">
                </div>
                <?php
                session_start();
                if (isset($_SESSION['error_message'])) {
                    echo '<div class="alert alert-danger" role="alert">' . $_SESSION['error_message'] . '</div>';
                    unset($_SESSION['error_message']);
                }
                ?>
                <button type="submit" value="Login" class="btn btn-primary btn-block">Masuk</button>
                <p class="text-center mt-3">Belum punya akun? <a href="?c=User&m=register_form">Daftar</a></p>
            </form>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
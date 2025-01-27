<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Website Sistem Pakar">
    <meta name="author" content="Katon Gilang Bagaskara">
    <link rel="icon" href="image/icon.png">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- Custom styles -->
    <style>
    body {
        background-color: #e3f2fd;
        font-family: Arial, sans-serif;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
    }

    .form-signin {
        max-width: 330px;
        padding: 15px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        text-align: center;
        opacity: 0;
        transform: translateY(30px);
        animation: fadeIn 1s forwards;
    }

    .form-signin img {
        margin-bottom: 15px;
    }

    .form-signin .form-control {
        margin-bottom: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    .form-signin button {
        background-color: #0056b3;
        border: none;
        color: #fff;
        transition: background-color 0.3s ease;
    }

    .form-signin button:hover {
        background-color: #004494;
    }

    .btn-back {
        margin-top: 10px;
        background-color: #ffcc00;
        border: none;
        color: #fff;
        transition: background-color 0.3s ease;
    }

    .btn-back:hover {
        background-color: #e6b800;
    }

    p.text-muted {
        font-size: 0.85rem;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    </style>
</head>

<body>
    <!-- Form Login -->
    <form class="form-signin" action="proseslogin.php" method="POST">
        <a href="index.php"><img class="mb-4" src="image/logoft.png" alt="Logo" width="72" height="72"></a>
        <h1 class="h3 mb-3 font-weight-normal">Silakan Login</h1>

        <!-- Input Username -->
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username" required
            autofocus>

        <!-- Input Password -->
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>

        <!-- Checkbox Remember Me -->
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Ingat Saya
            </label>
        </div>

        <!-- Button Sign In -->
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>

        <!-- Button Back to Home -->
        <a href="index.php" class="btn btn-lg btn-back btn-block">Kembali ke Halaman Utama</a>

        <!-- Footer -->
        <p class="mt-5 mb-3 text-muted">&copy; 2025 Sistem Pakar</p>
    </form>
</body>

</html>
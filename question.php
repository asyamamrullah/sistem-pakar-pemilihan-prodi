<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="website sistem pakar">
    <meta name="author" content="mr k">
    <link rel="icon" href="image/icon.png">

    <title>Sistem Pakar</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
</head>
<style>
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f8fc;
    /* Warna latar belakang biru pucat */
    color: #333;
    margin: 0;
    padding: 0;
}

.navbar {
    background-color: #0056b3;
    /* Warna biru gelap */
    color: #fff;
}

.navbar a {
    color: #ffcc00;
    /* Warna kuning */
    font-weight: bold;
    text-transform: uppercase;
}

.card {
    background-color: #0056b3;
    /* Warna biru */
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.card-header {
    background-color: #ffcc00;
    /* Warna kuning */
    color: #0056b3;
    /* Warna teks biru */
    font-weight: bold;
    text-align: center;
    font-size: 1.5rem;
}

.card-body {
    color: #fff;
    font-size: 1.2rem;
}

button {
    background-color: #ffcc00;
    /* Warna kuning */
    color: #0056b3;
    /* Warna teks biru */
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 1rem;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    background-color: #e6b800;
}

footer {
    background-color: #0056b3;
    color: #fff;
    text-align: center;
    padding: 10px 0;
    font-size: 0.9rem;
}

.option a {
    color: #ffcc00;
    text-decoration: none;
    font-weight: bold;
}
</style>

<body>
    <?php include ('navbar.php'); ?>

    <main class="batas-atas container mt-4">
        <div class="card text-white">
            <h5 class="card-header">Pertanyaan Diagnosis</h5>
            <div class="card-body text-center ukuran-30">

                <form method="post" action="input-ketampung.php" enctype="multipart/form-data" role="form">

                    <?php
                include ('koneksi.php');
                $kode='m1';
                session_start();
                echo "<p>Hai, <strong>".$_SESSION['nama']."</strong> (".$_SESSION['umur']." th)</p>";
                    
                    if(isset($_GET['kode'])){
                        $kode=$_GET['kode'];
                    }

                    $sql = "SELECT * from tb_pertanyaan WHERE kode_pertanyaan='$kode'";
                    $data = mysqli_query($connect,$sql);
                    $row = mysqli_fetch_assoc($data);     
                ?>

                    <label for="exampleFormControlInput1" class="mb-4">
                        <?php echo $row['isi_pertanyaan']; ?>
                    </label>

                    <br>
                    <div class="option">
                        <?php 
                        include "fungsi.php";
                        answer($kode);                    
                    ?>
                    </div>
                </form>

            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2025 Sistem Pakar. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
</body>


</html>
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

<body style="background-color: #f4f8fc;">

    <?php include ('navbar.php'); ?>

    <main class="batas-atas container mt-5">
        <div class="card mb-3 shadow" style="background-color: #0056b3; border: none; color: #ffffff;">
            <h5 class="card-header text-center" style="background-color: #ffcc00; color: #0056b3; font-weight: bold;">
                Solusi</h5>
            <div class="card-body text-left ukuran-20">

                <form method="post" action="solusi.php" enctype="multipart/form-data" role="form">

                    <?php
                include ('koneksi.php');
                session_start();
                echo "<p><strong>Nama:</strong> ".$_SESSION['nama']."</p>";
                echo "<p><strong>Umur:</strong> ".$_SESSION['umur']."</p>";
                    
                    if(isset($_GET['kode'])){
                        $kode=$_GET['kode'];
                    }   
                ?>
                    <hr style="border-color: #ffcc00;">
                    <p><strong>Kamu merasa:</strong></p>
                    <?php
                 include "fungsi.php";
                 solusi($kode);  
                ?>


                    <hr style="border-color: #ffcc00;">
                    <?php
                $sql = "SELECT * from tb_solusi WHERE kode_solusi='$kode'";
                $data = mysqli_query($connect,$sql);
                $row = mysqli_fetch_assoc($data);

                if ($row['kode_solusi']=="x-1" || $row['isi_solusi']=="x-2" || $row['isi_solusi']=="x-3" || $row['isi_solusi']=="x-4" || $row['isi_solusi']=="x-5") {
                     echo "<center><p><strong style='color:red'>SISTEM TIDAK MENEMUKAN JAWABAN!</strong></p></center><hr>";
                     ?>

                    <!------------------------MASUKAN KEPADA SISTEM -------------------------------->
                    <div class="card bg-light shadow">
                        <h5 class="card-header" style="background-color: #ffcc00; color: #0056b3; font-weight: bold;">
                            Pengguna Menambah Fakta Baru</h5>
                        <div class="card-body">
                            <form action="solusi.php" method="post">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1"><strong>Pilih Jurusan:</strong></label>
                                    <select name="solusi" class="form-control" id="exampleFormControlSelect2">
                                        <?php 
                                include "koneksi.php";
                                $sql = "SELECT * from tb_solusi";
                                $data = mysqli_query($connect,$sql);
                                while ($row = mysqli_fetch_assoc($data)) {
                                   if ($row['isi_solusi']!="x-1" && $row['isi_solusi']!="x-2" && $row['isi_solusi']!="x-3" && $row['isi_solusi']!="x-4" && $row['isi_solusi']!="x-5") {
                                    echo '<option value="'.$row["isi_solusi"].'">'.$row["isi_solusi"].'</option>';
                                 }
                                }
                                ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput2"><strong>Masukan Fakta:</strong></label>
                                    <input type="text" name="fakta" class="form-control" id="exampleFormControlInput1"
                                        placeholder="contoh: Suka memperbaiki komputer">
                                </div>
                                <input type="submit" class="btn"
                                    style="background-color: #ffcc00; color: #0056b3; font-weight: bold;" name="masukan"
                                    value="Kirim">
                            </form>
                        </div>
                    </div>
                    <!------------------------MASUKAN KEPADA SISTEM -------------------------------->
                    <?php 
                }
                
                else{
                    echo "<p><strong>Maka kamu harus mengambil prodi:</strong> <span style='color:yellow;'>".$row['isi_solusi']."</span></p>";
                }
                
                ?>
                </form>
                <br>
                <div class="text-center">
                    <a style="margin-bottom: 10px; border-color: #ffcc00; color: #ffcc00;" href="hapus-session.php"
                        class="btn btn-outline-light col-sm-2">Akhiri</a>
                </div>
            </div>
        </div>
    </main>

    <footer class="text-center p-3 mt-4" style="background-color: #0056b3; color: #ffffff;">
        <p>&copy; 2025 Sistem Pakar. All rights reserved.</p>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
</body>

</html>
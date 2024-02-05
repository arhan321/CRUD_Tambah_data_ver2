<?php
    session_start();
    include 'koneksi.php';

    if (isset($_POST["submit"])) {
        $nim = $_POST["nim_mahasiswa"];
        $nama_mhs = $_POST["Nama_mahasiswa"];
        $fakultas = $_POST["fakultas"];
        $prodi = $_POST["Prodi"];
        $email = $_POST["email"];

        // Upload Foto
        $foto_mahasiswa = $_FILES['foto_mahasiswa']['name'];
        $foto_tmp = $_FILES['foto_mahasiswa']['tmp_name'];
        $folder = "uploads/";

        move_uploaded_file($foto_tmp, $folder.$foto_mahasiswa);

        $insert_data = "INSERT INTO tabel_data_mahasiswa 
                        (Nama_mahasiswa, nim_mahasiswa, fakultas, Foto_mahasiswa, Prodi, email) 
                        VALUES
                        ('$nama_mhs', '$nim', '$fakultas', '$folder$foto_mahasiswa', '$prodi', '$email')";

        mysqli_query($tid, $insert_data);
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Tambah data mahasiswa</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nim_mahasiswa">Nim mahasiswa :</label>
                <input type="text" name="nim_mahasiswa" id="nim_mahasiswa">
            </li>

            <li>
                <label for="Nama_mahasiswa">Nama mahasiswa :</label>
                <input type="text" name="Nama_mahasiswa" id="nama_mahasiswa">
            </li>

            <li>
                <label for="fakultas">Fakultas :</label>
                <input type="text" name="fakultas" id="fakultas">
            </li>

            <li>
                <label for="Prodi">Prodi :</label>
                <input type="text" name="Prodi" id="Prodi">
            </li>

            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email">
            </li>

            <li>
                <label for="foto_mahasiswa">Upload Foto :</label>
                <input type="file" name="foto_mahasiswa" id="foto_mahasiswa">
            </li>

            <li>
                <div class="button">
                    <button type="submit" name="submit">Tambah data</button>
                </div>
            </li>

            <li>
                <div class="button_back">
                    <a href="crud.php"><button type="button">Kembali</button></a>
                </div>
            </li>
        </ul>
    </form>

</body>
</html>


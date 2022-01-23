<?php 
require '../mhs/functions.php';
$nama = $_GET['nama'];
$mhs = query ("SELECT * FROM mhs WHERE nama = '$nama'")[0];


if(isset($_POST["submit"]) ) {
    if(tambah_n($_POST) > 0) {
        echo "
        <script>
        alert('data nilai berhasil ditambahkan');
        document.location.href = 'index.php';
        </script>
        ";
    }else {
        // echo "
        // <script>
        // alert('data nilai gagal ditambahkan');
        // document.location.href = 'index.php';
        // </script>
        // ";
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Nilai Mahasiswa</title>
</head>
<body>
    <h2>Tambah data nilai mahasiswa</h2>
    <form action="" method="post">
        <ul>  
               
                <!-- hidden nim -->
                <input type="text" name="nim" id="nim" required value="<?= $mhs['nim']; ?>" hidden>
                <!-- hidden nama -->
                <input type="text" name="nama" id="nama"required value="<?= $mhs['nama']; ?>" hidden>
                <!-- hidden jurusan -->
                <input type="text" name="jurusan" id="jurusan"required value="<?= $mhs['jurusan']; ?>" hidden>
                <!-- hidden alamat -->
                <input type="text" name="alamat" id="alamat"required value="<?= $mhs['alamat']; ?>" hidden>
                <!-- hidden semester -->
                <input type="text" name="semester" id="semester"required value="<?= $mhs['semester']; ?>" hidden>
             
             <li>
                <label for="kd_nilai">Kd_nilai :</label>
                <input type="text" name="kd_nilai" id="kd_nilai"required>
             </li>
             <li>
                <label for="quiz">quiz :</label>
                <input type="text" name="quiz" id="quiz"required>
             </li>
             <li>
                <label for="tugas">tugas :</label>
                <input type="text" name="tugas" id="tugas"required>
             </li>
             <li>
                <label for="uts">uts :</label>
                <input type="text" name="uts" id="uts"required>
             </li>
             <li>
                <label for="uas">uas :</label>
                <input type="text" name="uas" id="uas"required>
             </li>
             <li>
                <label for="rata_rata">rata_rata :</label>
                <input type="text" name="rata_rata" id="rata_rata"required>
             </li>
             <li>
                <label for="n_huruf">n_huruf :</label>
               <select name="n_huruf" id="n_huruf">
               <option value="">---Pilih options---</option>
                   <option value="A">A</option>
                   <option value="B">B</option>
                   <option value="C">C</option>
                   <option value="D">D</option>
                   <option value="E">E</option>
               </select>
             </li>
             <li>
                <label for="keterangan">keterangan :</label>
                <select name="keterangan" id="keterangan">
                    <option value="">---Pilih options---</option>
                    <option value="lulus">Lulus</option>
                    <option value="tidak">Tidak Lulus</option>
                </select>
             </li>
             <li>
                 <button type='submit' name='submit'>Tambah Data</button>
             </li>
        </ul>
    </form>
</body>
</html>
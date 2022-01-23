<?php

$conn = mysqli_connect("localhost","root","","ujian");


function query($query){
    global $conn;
    $result = mysqli_query($conn , $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[]= $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    $nim = htmlspecialchars($data['nim']);
    $nama = htmlspecialchars($data['nama']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $alamat = htmlspecialchars($data['alamat']);
    $semester = htmlspecialchars($data['semester']);

    $query = "INSERT INTO mhs(nim,nama,jurusan,alamat,semester) VALUES('$nim', '$nama', '$jurusan', '$alamat', '$semester') 
    ";

    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
function ubah($data){
    global $conn;
    $id   = $_POST['id'];
    $nim            = $_POST['nim'];
    $nama           = $_POST['nama'];
    $jurusan        = $_POST['jurusan'];
    $alamat         = $_POST['alamat'];
    $semester       = $_POST['semester'];
// query SQL untuk insert data
$query="UPDATE mhs SET nim='$nim',nama='$nama',jurusan='$jurusan',alamat='$alamat',semester='$semester' WHERE id='$id'";

    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);

}
function tambah_n($data){
    global $conn;


    $nim = htmlspecialchars($data['nim']);
    $nama = htmlspecialchars($data['nama']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $alamat = htmlspecialchars($data['alamat']);
    $semester = htmlspecialchars($data['semester']);
    $kd_nilai = htmlspecialchars($data['kd_nilai']);
    $quiz = htmlspecialchars($data['quiz']);
    $tugas = htmlspecialchars($data['tugas']);
    $uts = htmlspecialchars($data['uts']);
    $uas = htmlspecialchars($data['uas']);
    $rata_rata = htmlspecialchars($data['rata_rata']);
    $n_huruf = htmlspecialchars($data['n_huruf']);
    $keterangan = htmlspecialchars($data['keterangan']);

    $query = "INSERT INTO nilai(nim,nama,jurusan,alamat,semester,kd_nilai,quiz,tugas,uts,uas,rata_rata,n_huruf,keterangan) VALUES('$nim', '$nama', '$jurusan', '$alamat', '$semester' , '$kd_nilai', '$quiz', '$tugas', '$uts', '$uas','$rata_rata','$n_huruf','$keterangan') 
    ";

    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
?>

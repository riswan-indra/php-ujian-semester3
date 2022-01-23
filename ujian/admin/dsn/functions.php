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
    $nidn = htmlspecialchars($data['nidn']);
    $nama = htmlspecialchars($data['nama']);
    $alamat = htmlspecialchars($data['alamat']);
    $email = htmlspecialchars($data['email']);

    $query = "INSERT INTO dsn(nidn,nama,alamat,email) VALUES('$nidn', '$nama', '$alamat', '$email') 
    ";

    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

// function ubah($data){
//     global $conn;

//     $id   = $_POST['id'];
//     $nidn            = $_POST['nidn'];
//     $nama           = $_POST['nama'];
//     $alamat        = $_POST['alamat'];
//     $email         = $_POST['email'];
// // query SQL untuk insert data
// $query="UPDATE dsn SET nidn='$nidn',nama='$nama',alamat='$alamat',email='$email' WHERE id='$id'";

//     mysqli_query($conn,$query);
//     return mysqli_affected_rows($conn);
// }

function ubah($data){
    global $conn;
    $id = $data["id"];
    $nidn = htmlspecialchars($data['nidn']);
    $nama = htmlspecialchars($data['nama']);
    $alamat = htmlspecialchars($data['alamat']);
    $email = htmlspecialchars($data['email']);

    $query = "UPDATE dsn SET
            nidn='$nidn',
            nama='$nama',
            alamat='$alamat',
            email='$email'
            WHERE id = $id
            ";

    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
?>

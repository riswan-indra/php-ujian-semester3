<?php
require "functions.php";
$id = $_GET['id'];
mysqli_query($conn,"DELETE FROM dsn WHERE id='$id'")or die(mysql_error($conn));
header("location:index.php?pesan=hapus");
?>
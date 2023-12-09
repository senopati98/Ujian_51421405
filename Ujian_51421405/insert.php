<?php
$mysqli = new mysqli('localhost', 'root', '', 'ujian_51421405');


if($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}


$nama = $_POST['nama'];
$npm = $_POST['npm'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];


$insert = "INSERT INTO data_mahasiswa (nama, npm, kelas, alamat) VALUES ('$nama', '$npm', '$kelas', '$alamat')";


if($mysqli->query($insert)) {
    header("Location: index.php");
    exit(); 
} else {
    echo "Error: " . $insert . "<br>" . $mysqli->error;
}


$mysqli->close();
?>

<?php


$koneksi = mysqli_connect("localhost", "root", "", "pesan");

$nama = $_POST['nama'];
$email = $_POST['email'];
$subjek = $_POST['subjek'];
$pesan = $_POST['pesan'];
$submit = $_POST['submit'];

$query = "INSERT INTO pesan VALUES('$nama', '$email', '$subjek', '$pesan', '$submit')";

mysqli_query($koneksi, $query);

header('Location: index.php');


?>
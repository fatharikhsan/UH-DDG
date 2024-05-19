
<?php
$id = $_POST['id'];
$nama= $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];

$koneksi = new mysqli('localhost', 'root', '', 'database pplg 1');
if ($koneksi) {
    echo "koneksi berhasil";
} else {
    echo $koneksi->eror;
}

$insert=
$koneksi->query("INSERT INTO user
(id,nama,email,password)
values
($id,'$nama', '$email','$password')
");

if ($insert) {
    echo "data BENAR ditambahkan";
}else {
    echo "salah";
}
?>